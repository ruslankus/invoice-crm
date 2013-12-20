<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Invoice extends Controller_Base {
    
    private $firmMoney;
    
    public function before(){
        parent::before();
        
        if(!$this->auth->logged_in()){
                Controller::redirect('Auth');
            }
         $this->firmMoney = $this->session->get('ballance');
    }
    
    
    
    
    public function action_info(){
        
        $company_id = $this->request->param('id');
        
        $firm_db = ORM::factory('Company',$company_id);
        
        $today = time();
        // for 30days last operations
        
        $m = Date::MONTH;
        
        $start_date = $today - $m;
        
        //$this->d($today);
        
        $ops_db = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$start_date)->find_all();
        
        $inv_count = ORM::factory('Invoice')->find_all()->count();
        
        $inv_db = ORM::factory('Invoice')->where('company_id','=',$company_id)->find_all();     
        
        $center = View::factory('inv_info');
        $center->set('firm',$firm_db);
        $center->set('user',$this->user);
        $center->set('ops',$ops_db);
        $center->set('invoice',$inv_db);
        $center->set('inv_count',$inv_count);
        $center->set('firmMoney',$this->firmMoney);
        $this->template->center = $center;            
    }// info
    
    
    
    /**
     * Акшн получения истории инвойсов
     */
    public function action_history(){
        
        $firm_id = $this->request->param('id');
        
        $firm_db = ORM::factory('Company',$firm_id);
        //poluchenie vsex invoisov
        $inv_db = ORM::factory('Invoice')->where('company_id','=',$firm_id)->find_all();
        
        $center = View::factory('inv_history');
        $center->set('firm',$firm_db);
        $center->set('invoices',$inv_db);
        $center->set('firmMoney',$this->firmMoney);
        $this->template->center = $center;
    }// end history
    
    
    /**
     *Акшн удаления инвосов из БД 
     */
     public function action_delete(){
        
        $inv_id = $this->request->param('id');
        
        $inv_db = ORM::factory('Invoice',$inv_id);
        $inv_file = $inv_db->file.'.pdf';
        $firm_id = $inv_db->company_id;
        $inv_db->delete();
        
        //udalenie faila
        $file_url = 'media/pdf/'.$inv_file;
        
        //$this->d($file_url);
        if($file_url){
            @unlink($file_url);
        }
                
        Controller::redirect(URL::base().'invoice/history/'.$firm_id);
        
    }// end delete
    
    
    public function action_mail(){
        
        $message = 'This is test';
        
        $res = mail("ruslankus@yahoo.com", "the subject", $message, 
     "From: webmaster@lime.com \r\n" 
    ."X-Mailer: PHP/" . phpversion()); 
        
        $this->d($res);
        
    }
    
    
    /**
     * 
     * Генерируем инвойс в PDF формате
     * 
     * @return pdf файл
     */
    public function action_generate(){
        
     
        $company_id = (int)$this->request->param('id');
        
        $day_offset = 86400;
        
        
                
        
        //получаем  2 цифры года 
        $year = date('y');
        
        if(isset($_POST['submit'])){
            
            
            
            
            $data = Arr::extract($_POST,array('from','to','vat_lang','inv_count'));
            
            
           
           //poluchaem preffick lang
            if($data['vat_lang'] == '0'){
                $lng = '_en';
                $data['lng'] = "ENG";
                $vat = '_0';
                $data['vat'] = 0;
            }
            elseif($data['vat_lang'] == '21'){
                $lng = '_lt';
                $data['lng'] = "LIT";
                $vat = '_21';
                $data['vat'] = 21;
            }
            elseif($data['vat_lang'] == '21_eng'){
                $lng = '_en';
                $data['lng'] = "ENG";
                $vat = '_21';
                $data['vat'] = 21;
                
            }
            
            
           
           //formiruem nomer invoica
           $pk = $data['inv_count'];
           $inv_nr = null;
           if($pk < 10){
                $inv_nr = '000'.$data['inv_count'];
           }
           elseif($pk < 100){
                $inv_nr = '00'.$data['inv_count'];
           }
           elseif($pk < 1000  ){
                $inv_nr = '0'.$data['inv_count'];
           }
           else{
                $inv_nr = $data['inv_count'];
           }
           
            $inv_full_nr = 'LIMA'.$year;
           
           
           // подготавлием данные в БД
           $data['period_from'] = $date_from = strtotime($data['from']);
           $data['period_to'] = $date_to = strtotime($data['to']);
           $data['date'] = time();
           $data['company_id'] = $company_id;
           $data['invoice_number'] = $inv_nr;
           $data['person'] = $this->user;
           $data['vat'] = (int)$data['vat'];
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
            
            
            
           
            $op_db = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from - $day_offset)->and_where('data','<',$date_to + $day_offset);
            
            //$op_db_op1 = ORM::factory('Operation')->where('card_id','=',$card_id)->and_where('operation_id','=','2')->and_where('data','BETWEEN',array($date_from,$date_to))->find_all();
            $op_db_act = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from - $day_offset)->and_where('data','<=',$date_to + $day_offset)->and_where('operation_id','=','1')->find_all();
            $op_act_name = ORM::factory('Opname',1);
            
            $op_db_op1 = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from-$day_offset)->and_where('data','<',$date_to + $day_offset)->and_where('operation_id','=','2')->find_all();
            $op1_name = ORM::factory('Opname',2);
            
            $op_db_op2 = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from - $day_offset)->and_where('data','<',$date_to + $day_offset)->and_where('operation_id','=','3')->find_all();
            $op2_name = ORM::factory('Opname',3);
            
            $op_db_op3 = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from - $day_offset)->and_where('data','<',$date_to + $day_offset)->and_where('operation_id','=','4')->find_all();
            $op3_name = ORM::factory('Opname',4);
            
            $op_db_all = ORM::factory('Operation')->where('company_id','=',$company_id)->and_where('data','>',$date_from - $day_offset)->and_where('data','<',$date_to + $day_offset)->find_all();
            
            //считаем тоттал
            $summ_totall_full_eur = 0;
            $summ_totall_eur = 0;
            $summ_totall_lit = 0;
            foreach($op_db_all as $op){
                
                $summ_totall_full_eur = $summ_totall_full_eur + $op->op_names->op_cost_full_eur;
                $summ_totall_eur = $summ_totall_eur + $op->op_names->op_cost_eur;
                $summ_totall_lit = $summ_totall_lit + $op->op_names->op_cost_lit;
            }
            
                
        //poluchaem dannie firmi
        $firm = ORM::factory('Company',$company_id);    
            
            
            //delaem massiv adress
        $abonent = array();
                      
        if($firm->name){
            $abonent[] = $firm->name; 
        }              
        
        //litovskij variant                    
        if($firm->firm_code && $lng == '_lt') {
           $abonent[] = 'Įmonės kodas: '. $firm->firm_code;
        }
        elseif(!$firm->firm_code && $lng == '_lt'){
           $abonent[] = 'Įmonės kodas: nera ';  
        }
        
        // english variant
        if($firm->firm_code && $lng == '_en') {
           $abonent[] = 'Comp.Reg.Nr: '. $firm->firm_code;
        }
        elseif(!$firm->firm_code && $lng == '_en'){
           $abonent[] = 'Comp.Reg.Nr: no ';
        }  
        
        //litovskij variant
        if($firm->vat_code and $lng == '_lt'){
           $abonent[] = 'PVM kodas: '. $firm->vat_code;
        }
        elseif(!$firm->vat_code and $lng == '_lt'){
           $abonent[] = 'PVM kodas: nera'; 
        }
        
        // english variant
        if($firm->vat_code and  $lng == '_en'){
           $abonent[] = 'EU VAT NR: '. $firm->vat_code;
        }
        elseif(!$firm->vat_code and  $lng == '_en'){
           $abonent[] = 'EU VAT NR: no'; 
        }
                
        if($firm->firm_account){
           $abonent[] = 'A/S: '.$firm->firm_account;
        }
        if($firm->firm_bank){
           $abonent[] = $firm->firm_bank;
        }
        
       
        
        //delaem massiv adress dostavki
        $del_adr =  array();
        if($firm->name){
            $del_adr[] = $firm->name; 
        }    
        
        if($firm->firm_deliv_street) {
           $del_adr[] = $firm->firm_deliv_street;
        }
        if($firm->firm_deliv_index) {
           $del_adr[] = $firm->firm_deliv_index .' '.$firm->firm_deliv_city ;
        }
        if($firm->firm_deliv_country) {
           $del_adr[] = $firm->firm_deliv_country;
        }
        
        // formiruem detalizaciju;
        $numbers = array();
        
        $cards = ORM::factory('Card')->where('company_id','=',$company_id)->and_where('cart_status','=',2)->find_all();
        
        foreach($cards as $num => $card){
            
            $numbers[$num]['card_phone'] = $card->phone_number;
            $numbers[$num]['card_number'] = $card->cart_number;
            $ops = ORM::factory('Operation')->where('card_id','=',$card->id)->and_where('data','BETWEEN',array($date_from - $day_offset ,$date_to + $day_offset))->order_by('data','ASC')->find_all();
            $numbers[$num]['ops'] = $ops;
            $numbers[$num]['abonent'] = $abonent;
            $numbers[$num]['del_adr'] = $del_adr;
        }
            
         
            
            $pdf = View_mPDF::factory('pdf/invoice'.$lng.$vat);
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
            $pdf->set('totall_full_Eur',$summ_totall_full_eur);
            $pdf->set('totallEur',$summ_totall_eur);
            $pdf->set('totallLit',$summ_totall_lit);
            $pdf->set('numbers',$numbers);
            $pdf->set('vat',$data['vat']);
            $pdf->set('abonent',$abonent);
            $pdf->set('del_adr',$del_adr);
            $pdf->set('inv_nr',$inv_nr);
            $pdf->set('inv_full_nr',$inv_full_nr); 
            
            
            
            $pdf->write_to_disk('media/pdf/'.$file_name.'.pdf');
            
            //пишем имя файла в БД
            
            $inv_db = ORM::factory('Invoice',$pk);
            $inv_db->file = $file_name;
            $inv_db->save();
            
            
            Controller::redirect(URL::base().'invoice/info/'.$company_id);             
        }
                
        
    }
}

?>