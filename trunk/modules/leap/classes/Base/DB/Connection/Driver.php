<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Copyright © 2011–2013 Spadefoot Team.
 *
 * Unless otherwise noted, LEAP is licensed under the Apache License,
 * Version 2.0 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License
 * at:
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * This class sets forth the functions for a database connection.
 *
 * @package Leap
 * @category Connection
 * @version 2013-02-03
 *
 * @abstract
 */
abstract class Base_DB_Connection_Driver extends Core_Object {

	/**
	 * This variable stores the connection configurations.
	 *
	 * @access protected
	 * @var string
	 */
	protected $cache_key;

	/**
	 * This variable stores the connection configurations.
	 *
	 * @access protected
	 * @var DB_DataSource
	 */
	protected $data_source;

	/**
	 * This variable stores a reference to the lock builder.
	 *
	 * @access protected
	 * @var DB_SQL_Lock_Builder
	 */
	protected $lock;

	/**
	 * This variable is used to store the connection's resource.
	 *
	 * @access protected
	 * @var mixed
	 */
	protected $resource;

	/**
	 * This variable stores the last SQL statement executed.
	 *
	 * @access protected
	 * @var string
	 */
	protected $sql;

	/**
	 * This function initializes the class with the specified data source.
	 *
	 * @access public
	 * @param DB_DataSource $data_source            the data source to be used
	 */
	public function __construct(DB_DataSource $data_source) {
		$this->cache_key = NULL;
		$this->data_source = $data_source;
		$this->lock = DB_SQL_Lock_Builder::factory($this);
		$this->resource = NULL;
		$this->sql = '';
	}

	/**
	 * This destructor ensures that the connection is closed.
	 *
	 * @access public
	 * @abstract
	 */
	public abstract function __destruct();

	/**
	 * This function returns the value associated with the specified property.
	 *
	 * @access public
	 * @override
	 * @param string $key                           the name of the property
	 * @return mixed                                the value of the property
	 * @throws Throwable_InvalidProperty_Exception  indicates that the specified property is
	 *                                              either inaccessible or undefined
	 */
	public function __get($key) {
		switch ($key) {
			case 'data_source':
				return $this->data_source;
			case 'lock':
				return $this->lock;
			case 'sql':
				return $this->sql;
			default:
				throw new Throwable_InvalidProperty_Exception('Message: Unable to get the specified property. Reason: Property :key is either inaccessible or undefined.', array(':key' => $key));
		}
	}

	/**
	 * This function begins a transaction.
	 *
	 * @access public
	 * @abstract
	 * @throws Throwable_SQL_Exception              indicates that the executed
	 *                                              statement failed
	 */
	public abstract function begin_transaction();

	/**
	 * This function manages query caching.
	 *
	 * @access protected
	 * @param string $sql                           the SQL statement being queried
	 * @param string $type                          the return type that is being used
	 * @param DB_ResultSet $results                 the result set
	 * @return DB_ResultSet                         the result set for the specified
	 */
	protected function cache($sql, $type, $results = NULL) {
		if ($this->data_source->cache->enabled) {
			if ($results !== NULL) {
				if ($this->data_source->cache->lifetime > 0) {
					Kohana::cache($this->cache_key, $results, $this->data_source->cache->lifetime);
				}
				return $results;
			}
			else if ($this->data_source->cache->lifetime !== NULL) {
				$this->cache_key = 'DB_Connection_Driver::query("' . $this->data_source->id . '", "' . $type . '", "' . $sql . '")';
				$results = Kohana::cache($this->cache_key, NULL, $this->data_source->cache->lifetime);
				if (($results !== NULL) AND ! $this->data_source->cache->force) {
					return $results;
				}
			}
		}
		return $results;
	}

	/**
	 * This function closes an open connection.
	 *
	 * @access public
	 * @abstract
	 * @return boolean                              whether an open connection was closed
	 */
	public abstract function close();

	/**
	 * This function commits a transaction.
	 *
	 * @access public
	 * @abstract
	 * @throws Throwable_SQL_Exception              indicates that the executed
	 *                                              statement failed
	 */
	public abstract function commit();

	/**
	 * This function processes an SQL statement that will NOT return data.
	 *
	 * @access public
	 * @abstract
	 * @param string $sql                           the SQL statement
	 * @throws Throwable_SQL_Exception              indicates that the executed
	 *                                              statement failed
	 */
	public abstract function execute($sql);

	/**
	 * This function returns the last insert id.
	 *
	 * @access public
	 * @abstract
	 * @param string $table                         the table to be queried
	 * @param string $column                        the column representing the table's id
	 * @return integer                              the last insert id
	 * @throws Throwable_SQL_Exception              indicates that the query failed
	 */
	public abstract function get_last_insert_id($table = NULL, $column = 'id');

	/**
	 * This function returns the connection's resource.
	 *
	 * @access public
	 * @return mixed                                the resource being used
	 * @throws Throwable_Database_Exception         indicates that no connection has been
	 *                                              established
	 */
	public function get_resource() {
		if ( ! $this->is_connected()) {
			throw new Throwable_Database_Exception('Message: Unable to fetch resource. Reason: No connection has been established.');
		}
		return $this->resource;
	}

	/**
	 * This function is for determining whether a connection is established.
	 *
	 * @access public
	 * @abstract
	 * @return boolean                              whether a connection is established
	 */
	public abstract function is_connected();

	/**
	 * This function opens a connection using the data source provided.
	 *
	 * @access public
	 * @throws Throwable_Database_Exception         indicates that there is problem with
	 *                                              opening the connection
	 */
	public abstract function open();

	/**
	 * This function processes an SQL statement that will return data.
	 *
	 * @access public
	 * @param string $sql                           the SQL statement
	 * @param string $type                          the return type to be used
	 * @return DB_ResultSet                         the result set
	 * @throws Throwable_SQL_Exception              indicates that the query failed
	 */
	public function query($sql, $type = 'array') {
		if ( ! $this->is_connected()) {
			throw new Throwable_SQL_Exception('Message: Failed to query SQL statement. Reason: Unable to find connection.');
		}
		$result_set = $this->cache($sql, $type);
		if ($result_set !== NULL) {
			$this->sql = $sql;
			return $result_set;
		}
		$reader = DB_SQL_DataReader::factory($this, $sql);
		$result_set = $this->cache($sql, $type, new DB_ResultSet($reader, $type));
		$this->sql = $sql;
		return $result_set;
	}

	/**
	 * This function escapes a string to be used in an SQL statement.
	 *
	 * @access public
	 * @param string $string                        the string to be escaped
	 * @param char $escape                          the escape character
	 * @return string                               the quoted string
	 * @throws Throwable_SQL_Exception              indicates that no connection could
	 *                                              be found
	 *
	 * @license http://codeigniter.com/user_guide/license.html
	 *
	 * @see http://codeigniter.com/forums/viewthread/179202/
	 */
	public function quote($string, $escape = NULL) {
		static $removables = array(
			'/%0[0-8bcef]/',
			'/%1[0-9a-f]/',
			'/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S',
		);

		if ( ! $this->is_connected()) {
			throw new Throwable_SQL_Exception('Message: Failed to quote/escape string. Reason: Unable to find connection.');
		}

		do {
			$string = preg_replace($removables, '', $string, -1, $count);
		}
		while ($count);

		$string = "'" . str_replace("'", "''", $string) . "'";

		if (is_string($escape) OR ! empty($escape)) {
			$string .= " ESCAPE '{$escape}'";
		}

		return $string;
	}

	/**
	 * This function creates a data reader for query the specified SQL statement.
	 *
	 * @access public
	 * @param string $sql                           the SQL statement
	 * @return DB_SQL_DataReader                    the SQL data reader
	 * @throws Throwable_SQL_Exception              indicates that the query failed
	 */
	public function reader($sql) {
		if ( ! $this->is_connected()) {
			throw new Throwable_SQL_Exception('Message: Failed to create SQL data reader. Reason: Unable to find connection.');
		}
		$reader = DB_SQL_DataReader::factory($this, $sql);
		$this->sql = $sql;
		return $reader;
	}

	/**
	 * This function rollbacks a transaction.
	 *
	 * @access public
	 * @abstract
	 * @throws Throwable_SQL_Exception              indicates that the executed
	 *                                              statement failed
	 */
	public abstract function rollback();

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * This function returns a connection to the appropriate database based
	 * on the specified configurations.
	 *
	 * @access public
	 * @static
	 * @param mixed $config                         the data source configurations
	 * @return DB_Connection_Driver                 the database connection
	 */
	public static function factory($config = 'default') {
		$data_source = DB_DataSource::instance($config);
		$driver = 'DB_' . $data_source->dialect . '_Connection_' . $data_source->driver;
		$connection = new $driver($data_source);
		return $connection;
	}

}
