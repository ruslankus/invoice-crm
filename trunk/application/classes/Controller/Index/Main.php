<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Main extends Controller_Base {
    
    
    protected $firmMoney;
    
    public function before(){
        parent::before();
        
        if(!$this->auth->logged_in()){
                Controller::redirect('Auth');
            }
        
        $this->firmMoney = $this->session->get('ballance');
        
    }
    
    
    public function action_index(){
        
        
        
        //$this->d($this->firmMoney);
        
        $db = ORM::factory('Company')->find_all();
        
        $center = View::factory('main');
        $center->set('firms',$db);
        $center->set('user',$this->user);
        $center->set('firmMoney',$this->firmMoney);
        
        $this->template->center = $center;
    }
    
    public function action_firm(){
        
        $id = (int)$this->request->param('id');
        
        $firm = ORM::factory('Company',$id);
        
        $cards = ORM::factory('Card')->where('company_id','=',$id)->find_all();
        
        //delaem massiv adress
        $adr = array();
                            
        if($firm->firm_street) {
           $adr[] = $firm->firm_street;
        }
        
        if($firm->firm_index){
           $adr[] = $firm->firm_index." ".$firm->firm_city;;
        }
        
        if($firm->firm_country){
           $adr[] = $firm->firm_country;
        }
        
        //delaem massiv adress dostavki
        $del_adr =  array();
        if($firm->firm_deliv_street) {
           $del_adr[] = $firm->firm_deliv_street;
        }
        if($firm->firm_deliv_index) {
           $del_adr[] = $firm->firm_deliv_index.' '.$firm->firm_deliv_city;
        }
        if($firm->firm_deliv_country) {
           $del_adr[] = $firm->firm_deliv_country;
        }
        
        
                
        $center = View::factory('firm');
        $center->set('firm',$firm);
        $center->set('cards',$cards);
        $center->set('user',$this->user);
        $center->set('adr',$adr);
        $center->set('del_adr',$del_adr);
        $center->set('firmMoney',$this->firmMoney);
        
        $this->template->center = $center;
    }// end firm
    
    
    
    /**
     * Акшн добавления фирмы
     */
    public function action_firm_add(){
        
        if(isset($_POST['submit'])){
            
            $data = Arr::extract($_POST,array('name','firm_code','vat_code','firm_index','firm_city'));
            
            $data['firm_street'] = Arr::get($_POST,'firm_street');
            
                       
            $data['firm_deliv_street'] = $data['firm_street'];
            $data['firm_deliv_index'] = $data['firm_index'];
            $data['firm_deliv_city'] = $data['firm_city'];
            
            //$this->d($data);
            
            try{
                
                $firm_db = ORM::factory('Company');
                $firm_db->values($data)->save();
                
                Controller::redirect(URL::base());
            }
            catch( ORM_Validation_Exception $e){
                $error = $e->errors('validation');
            }
        }
    }// end firm_add
    
    /**
     *Акшн редактирования данных фирмы
     *  
     */
     public function action_firm_edit(){
        
        $id = (int)$this->request->param('id');
        
        $firm_db = ORM::factory('Company',$id);
        
        if(isset($_POST['submit'])){
            
            $data = Arr::extract($_POST,array('name','email','firm_code','vat_code','firm_street','firm_index','firm_city','firm_deliv_street','firm_deliv_city','firm_deliv_index','firm_account','firm_bank'));
                
            try{
                
                $firm_db->values($data)->save();
                Controller::redirect(URL::base().'main/firm/'.$id);
            }
            catch(ORM_Validation_Exception $e){
                $errors = $e->errors('validation');
            }
        }
        
        $center = View::factory('firm_edit');
        $center->set('user',$this->user);
        $center->set('firm',$firm_db);
        $center->set('firmMoney',$this->firmMoney);
        
        $this->template->center = $center; 
        
    }// end firm_edit
}