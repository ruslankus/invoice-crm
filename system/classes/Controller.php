<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller {
    
    /**
     * ??????? ???????
     * 
     * @param $value ???????? ??? ??????????
     */
    public function d($value = null,$die = 1){
        echo 'Debug: <br/><pre>';
        print_r($value);
        echo '</pre>';
        
        if($die)
            die;
    } 
}
