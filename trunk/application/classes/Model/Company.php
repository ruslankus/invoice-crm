<?php defined('SYSPATH') or die('No direct script access.');

class Model_Company extends ORM {
    
     protected $_has_many = array(
      'cards'   => array(
               'model'       => 'Card',
               'foreign_key' => 'company_id',
           )
    );
}