<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Auth extends Controller_Base {
    
    
    public function action_index(){
        
        $center = View::factory('login');
        
              
        
        $this->template->center = $center;
        
    }
    
    
    /**
     * Акшн авторизации
     * 
     *  
     */
     public function action_login(){
        
        if(Auth::instance()->logged_in()){
            Controller::redirect(URL::base());
        }
        

         //Получаем балланс фирмы и пишем его в сеесию
        $money = 0;
        try {
            $ball = Model::factory('XML')->get_firm_ballance();

            $data = simplexml_load_string($ball);

            $money = (float)$data->credit;
        }catch (Exception $e){
            $money = 999;
        }

        $this->session->set('ballance',$money);
        
        
        if(isset($_POST['submit'])){
            
            $data = Arr::extract($_POST,array('login','password'));
            
            $status = Auth::instance()->login($data['login'],$data['password']);
            
            if($status){
             
                if(Auth::instance()->logged_in() ){
                    Controller::redirect(URL::base());
                }
                     
                Controller::redirect(URL::base());                
            }
            else{
                
                $errors = array('Не правильные данные',);
                Controller::redirect(URL::base().'auth');
            }
        }       
        
    } // login
    
    
    public function action_logout(){
        
        if(Auth::instance()->logout()){
            $this->session->destroy();
            Controller::redirect();
        }
    }// logout


    
    
    public function action_create_pass(){
        
        $pass = Auth::instance()->hash('ib1973');
        echo "<h2>$pass</h2>";
        
    }

}