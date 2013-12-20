<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Ajax extends Controller {
    
    
    /**
     * ??????? ??? ????????? ???????? ????????
     * 
     * @param ID ????????
     * @return json ?????? ? ???????????? ???????? ? ????????
     * 
     */
    public function action_get_ballance(){
        
        $card_id = $this->request->param('id');
        $card_db = ORM::factory('Card',$card_id);
        $card_number = $card_db->phone_number;
        
        $ball_date = time();
        
        
        $ball_xml = Model::factory('XML')->get_card_ballance($card_number);
        
        $ball = simplexml_load_string($ball_xml);
        
               
        
        if((string)$ball->type == 'ERROR' ){
            
            $result['success'] = 0;
            
            
        }
        else{
            
            $card_ball = (float)$ball->card->balance;        
            $card_ball = number_format($card_ball,2);
            
            $card_db->cart_ballance = $card_ball*100; 
            $card_db->ballance_date = $ball_date;
            $card_db->save();
            
            $result['success'] = 1;
            $result['card_ballance'] = $card_ball;
            $result['phone_number'] = $card_number;
            $result['date'] = date('d.m.Y',$ball_date);
             
        }
        
   
        
        echo json_encode($result);
    }// end get_ballance    
    
    
}