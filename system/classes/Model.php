<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Model extends Kohana_Model {
    
    /**
     * Функция отладки
     * 
     * @param $value параметр что отлаживаем
     */
    public function d($value = null,$die = 1){
        echo 'Debug: <br/><pre>';
        print_r($value);
        echo '</pre>';
        
        if($die)
            die;
    } 

}
