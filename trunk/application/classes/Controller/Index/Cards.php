<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Cards extends Controller_Base {
    
    protected $firmMoney;
    
    public function before(){
        parent::before();
        
        if(!$this->auth->logged_in()){
                Controller::redirect('Auth');
        }
        
        $this->firmMoney = $this->session->get('ballance');

    }
    
    
    public function action_info(){
        
        $card_id = (int)$this->request->param('id');
        
        $card_db = ORM::factory('Card',$card_id);
        
        $firm_id = $card_db->company_id;
        
        $firm = ORM::factory('Company',$firm_id);
        
        // получение операций(пополнения) с картой
        $options = ORM::factory('Opname')->where('op_flag','=',1)->find_all();
        
        $card_history = ORM::factory('Operation')->where('card_id','=',$card_id)->order_by('data','ASC')->find_all();
        
        $center = View::factory('card');
        $center->set('card',$card_db);
        $center->set('firm',$firm);
        $center->set('options',$options);
        $center->set('card_history',$card_history);
        $center->set('firmMoney',$this->firmMoney);
        $center->set('user',$this->user);
        
        $this->template->center = $center;
    } // end info
    
    
    
    
    
    /**
     * 
     * Акшн добаление карочки в БД
     * 
     */
    public function action_add(){
        
        $firm_id = $this->request->param('id');
        
        if(isset($_POST)){
            
            $data = Arr::extract($_POST,array('cart_number','phone_number'));
            $data['company_id'] = $firm_id;
            
            $card_db = ORM::factory('Card')->values($data)->save();
            Controller::redirect(URL::base().'main/firm/'.$firm_id);
        }
    }
    
    
    /**
     * Акшн редактирования карты
     */
    public function action_edit(){
        
        $card_id = $this->request->param('id');
        
        $card_db = ORM::factory('Card',$card_id);
        $firm_id = $card_db->company_id;
        $firm_db = ORM::factory('Company',$firm_id);
        
        if(isset($_POST['submit'])){
            
            $data = Arr::extract($_POST,array('cart_number','phone_number'));
            $card_db->values($data)->save();
            Controller::redirect(URL::base().'main/firm/'.$firm_id);
        }
        
        $center = View::factory('card_edit');
        $center->set('card',$card_db);
        $center->set('firm',$firm_db);
        $center->set('firmMoney',$this->firmMoney);
        $this->template->center = $center;
        
    }
    
    
    /**
     * 
     * Акшн активации карты
     * 
     */
    public function action_active(){
        
        $card_id = $this->request->param('id');
        $company_id = ORM::factory('Card',$card_id)->company_id;
        
        //activiruem
        $card_db = ORM::factory('Card',$card_id);
        $card_db->cart_status = 2;
        $card_db->activation_date = time();
        $card_db->save();
        
        //logiruen operaciu activacii
        $data['data'] = time();
        $data['operation_id'] = 1;
        $data['card_id'] = $card_id;
        $data['company_id'] = $company_id;
        $data['person'] = $this->user;
        
        $op_db = ORM::factory('Operation')->values($data)->save();
        
        Controller::redirect(URL::base().'cards/info/'.$card_id);
    }// end active
    
    
    /**
     * 
     * Акшн блокировка карты
     */
    public function action_block(){
        
        $card_id = $this->request->param('id');
        
        $card_db = ORM::factory('Card',$card_id);
        $card_db->cart_status = 3;
        $card_db->save();
        
        Controller::redirect(URL::base().'cards/info/'.$card_id);
    }// end block
    
    /**
     * Акшн разблокировки карты
     */
    public function action_unblock(){
        $card_id = $this->request->param('id');
        
        $card_db = ORM::factory('Card',$card_id);
        $card_db->cart_status = 2;
        $card_db->save();
        
        Controller::redirect(URL::base().'cards/info/'.$card_id);
        
    }// unblock
    
    /**
     * Акш  добавлият операции пополнения карты в БД
     * 
     */
    public function action_ops_add(){
        
        
        $card_id = $this->request->param('id');
        $company_id = ORM::factory('Card',$card_id)->company_id;
                
        if(isset($_POST)){
           
           $data['operation_id'] = Arr::get($_POST,'ops');
           $data['card_id'] = $card_id;
           $data['data'] = time();
           $data['company_id'] = $company_id;
           $data['person'] = $this->user;
           $op_db = ORM::factory('Operation')->values($data)->save();
           
           Controller::redirect(URL::base().'cards/info/'.$card_id); 
        }
        else{
            Controller::redirect(URL::base());
        }
    }// end add
    
    
    /**
     * Акшн произвольных операций с картой по дате 
     * 
     */
    public function action_defoult_op(){
        
        $card_id = $this->request->param('id');
        $company_id = ORM::factory('Card',$card_id)->company_id;
        
        // операция активации
        if(isset($_POST['activate'])){
            
            //activiruem
            $card_db = ORM::factory('Card',$card_id);
            $card_db->cart_status = 2;
            $card_db->activation_date = strtotime($_POST['date']);
            $card_db->save();
            
            //logiruen operaciu activacii
            $data['data'] = strtotime($_POST['date']);
            $data['operation_id'] = 1;
            $data['card_id'] = $card_id;
            $data['company_id'] = $company_id;
            $data['person'] = $this->user;
            
            $op_db = ORM::factory('Operation')->values($data)->save();
            
            Controller::redirect(URL::base().'cards/info/'.$card_id);
        }    
            
        
        // Операция пополнения карты
        if(isset($_POST['topUp'])){
            
           $data['operation_id'] = Arr::get($_POST,'ops');
           $data['card_id'] = $card_id;
           $data['data'] = strtotime($_POST['date']);
           $data['company_id'] = $company_id;
           $data['person'] = $this->user;
           $data['operation_type'] = 1;
           $op_db = ORM::factory('Operation')->values($data)->save();
           
           Controller::redirect(URL::base().'cards/info/'.$card_id); 
        }
        
        Controller::redirect(URL::base());
        
    }
    
    
    /**
     * Акшн удаления произвольной операции по дате
     * 
     * @param id - ID опрерации
     */
    public function action_delete_op(){
        
        $op_id = (int)$this->request->param('id');
        
        $op_db = ORM::factory('Operation',$op_id);
        $card_id = $op_db->card_id;
        $op_db->delete()->save();
        
        Controller::redirect(URL::base().'cards/info/'.$card_id);
    }
    
    
    /**
     * 
     * Акшн для генерации PDF отчета
     * 
     * @return pdf файл
     */
    public function action_generate() {
        
        
        
        $card_id = (int)$this->request->param('id');
        $card_db = ORM::factory('Card',$card_id);
        $firm_id = $card_db->company_id;
        $firm_db = ORM::factory('Company',$firm_id);
        
        //получение  2 цифр года 
        $year = date('y');
        
        if(isset($_POST)){
            
            $data = Arr::extract($_POST,array('from','to','vat'));
            
           // подготовка данных для БД 
           $data['period_from'] = $date_from = date('Y-m-d',strtotime($data['from']));
           $data['period_to'] = $date_to = date('Y-m-d',strtotime($data['to']));
           $data['date'] = date('Y-m-d');
           $data['card_id'] = $card_id;
           
           $inv_db = ORM::factory('Invoice')->values($data)->save();
           $pk = $inv_db->pk();     
            
           // formiruem filename
           $nr = null;
           if($pk < 10){
                $nr = 'NR00'.$pk;
           }
           elseif($pk < 100){
                $nr = 'NR0'.$pk;
           }
           else{
                $nr = 'NR'.$pk;
           }
           
            $file_name = 'LIMA'.$year.$nr; 
            
            //получение данных из бызы по дате
            $op_db = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to));
            // ???????? ?????? ?? ???????? 1
            //$op_db_op1 = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('operation_id','=','2')->and_where('data','BETWEEN',array($date_from,$date_to))->find_all();
            $op_db_act = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to))->and_where('operation_id','=','1')->find_all();
            $op_act_name = ORM::factory('Opname',1);
            $op_db_op1 = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to))->and_where('operation_id','=','2')->find_all();
            $op1_name = ORM::factory('Opname',2);
            $op_db_op2 = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to))->and_where('operation_id','=','3')->find_all();
            $op2_name = ORM::factory('Opname',3);
            $op_db_op3 = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to))->and_where('operation_id','=','4')->find_all();
            $op3_name = ORM::factory('Opname',4);
            $op_db_all = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('data','BETWEEN',array($date_from,$date_to))->find_all();
            
            //Считаем тотал
            $summ_totall = 0;
            
            foreach($op_db_all as $op){
                
                $summ_totall += $op->op_names->op_cost;
                echo $op->op_names->op_cost.'<br/>';
            }
            
            echo $summ_totall;
            
            
            
            $pdf = View_MPDF::factory('pdf/invoice');
            $pdf->set('date_from',$date_from);
            $pdf->set('date_to',$date_to);
            $pdf->set('ops',$op_db_all);
            $pdf->set('ops_act',$op_db_act);
            $pdf->set('op_act_name',$op_act_name);
            $pdf->set('ops1',$op_db_op1);
            $pdf->set('ops1_name',$op1_name);
            $pdf->set('ops2',$op_db_op2); 
            $pdf->set('ops2_name',$op2_name);
            $pdf->set('ops3',$op_db_op3);
            $pdf->set('ops3_name',$op3_name);
            $pdf->set('firm',$firm_db);
            $pdf->set('card',$card_db);
            $pdf->set('totallEur',$summ_totall); 
            
            
            $pdf->write_to_disk('media/pdf/'.$file_name.'.pdf');
            
            //запись имени файла в БД файла 
            $inv_db = ORM::factory('Invoice',$pk);
            $inv_db->file = $file_name;
            $inv_db->save();
            
            
            Controller::redirect(URL::base().'cards/info/'.$card_id);             
        }
    }// end generate
}