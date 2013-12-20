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
 * This class is used to read data from a MySQL database using the improved
 * driver.
 *
 * @package Leap
 * @category MySQL
 * @version 2013-03-19
 *
 * @see http://www.php.net/manual/en/book.mysqli.php
 *
 * @abstract
 */
abstract class Base_DB_MySQL_DataReader_Improved extends DB_SQL_DataReader_Standard {

	/**
	 * This function initializes the class.
	 *
	 * @access public
	 * @override
	 * @param DB_Connection_Driver $connection  the connection to be used
	 * @param string $sql                       the SQL statement to be queried
	 * @param integer $mode                     the execution mode to be used
	 * @throws Throwable_SQL_Exception          indicates that the query failed
	 */
	public function __construct(DB_Connection_Driver $connection, $sql, $mode = NULL) {
		$resource = $connection->get_resource();
		$command = @mysqli_query($resource, $sql);
		if ($command === FALSE) {
			throw new Throwable_SQL_Exception('Message: Failed to query SQL statement. Reason: :reason', array(':reason' => @mysqli_error($resource)));
		}
		$this->command = $command;
		$this->record = FALSE;
	}

	/**
	 * This function frees the command reference.
	 *
	 * @access public
	 * @override
	 */
	public function free() {
		if ($this->command !== NULL) {
			@mysqli_free_result($this->command);
			$this->command = NULL;
			$this->record = FALSE;
		}
	}

	/**
	 * This function advances the reader to the next record.
	 *
	 * @access public
	 * @override
	 * @return boolean                          whether another record was fetched
	 */
	public function read() {
		$this->record = @mysqli_fetch_assoc($this->command);
		return ($this->record !== FALSE);
	}

}
