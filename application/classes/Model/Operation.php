<?php defined('SYSPATH') or die('No direct script access.');

class Model_Operation extends ORM {
   
    protected $_belongs_to = array(
      'op_names'  => array(
               'model'       => 'Opname',
               'foreign_key' => 'operation_id',
          ),
      'cards'  => array(
               'model'       => 'Card',
               'foreign_key' => 'card_id',
          ),
    );
    
       
}