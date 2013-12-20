<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template {
        
    public $template = 'base';
    protected $auth;
    protected $user;
    protected $session;
    
    public function before(){
        parent::before();
        
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        Session::$default = 'native';
        $this->session = Session::instance();
       

         // подключаем стили и скрипты
        $this->template->styles = array('media/css/jquery-ui-1.9.2.custom.css','media/css/bootstrap.min.css','media/css/datepicker.css','/media/css/style.css');
        $this->template->scripts = array('media/js/jquery-1.8.3.js','media/js/bootstrap.min.js','media/js/bootstrap-datepicker.js','media/js/main.js');

        
        $this->template->center = null;
    }

  
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