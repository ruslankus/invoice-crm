<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Test extends Controller_Base {
    
    
    public function action_index(){
        
        $xml = Model::factory('XML')->get_firm_ballance();
        
        $data =  new SimpleXMLElement($xml);
        
        $this->d($data);
    }
}