<?php defined('SYSPATH') or die('No direct script access.');

class Model_Card extends ORM {
    
    protected $_belongs_to = array(
      'status'  => array(
               'model'       => 'Cardstat',
               'foreign_key' => 'cart_status',
          )
    );
}