<?php defined('SYSPATH') or die('No direct script access.');

class Model_XML extends Model {
       
       
    public function get_firm_ballance(){
        
             
    
        $curl = curl_init(); //инициализация сеанса
        curl_setopt($curl, CURLOPT_URL, 'http://www.travelsim.lt/scripts/netformsproxy.php'); //урл сайта к которому обращаемся 
        curl_setopt($curl, CURLOPT_HEADER,false); //выводим заголовки
        curl_setopt($curl, CURLOPT_POST, true); //передача данных методом POST
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true); //теперь curl вернет нам ответ, а не выведет
        

        curl_setopt($curl, CURLOPT_POSTFIELDS, //тут переменные которые будут переданы методом POST 
            array (
            'curr'=>'EUR',
            'plain'=>'1',
            'onum'=>'',
            'upass'=>'ahMcUUPk4e',
            'uname'=>'netforms.eur',
            'command'=>'daccount',
            'amount'=>'',
            'enumber'=>'',
                        
        ));
        
        curl_setopt($curl, CURLOPT_USERAGENT, 'MSIE 5'); //эта строчка как-бы говорит: "я не скрипт, я IE5" :)
        curl_setopt ($curl, CURLOPT_REFERER, "http:/travelsim.lt"); //а вдруг там проверяют наличие рефера
        
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;

    }
    
    public function get_card_ballance($number){
   
        $curl = curl_init(); //инициализация сеанса
        curl_setopt($curl, CURLOPT_URL, 'http://www.travelsim.lt/scripts/netformsproxy.php'); //урл сайта к которому обращаемся 
        curl_setopt($curl, CURLOPT_HEADER,false); //выводим заголовки
        curl_setopt($curl, CURLOPT_POST, true); //передача данных методом POST
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true); //теперь curl вернет нам ответ, а не выведет
        

        curl_setopt($curl, CURLOPT_POSTFIELDS, //тут переменные которые будут переданы методом POST 
            array (
            'curr'=>'EUR',
            'plain'=>'1',
            'onum'=>$number,
            'upass'=>'ahMcUUPk4e',
            'uname'=>'netforms.eur',
            'command'=>'gbalance',
            'amount'=>'',
            'enumber'=>'',
                        
        ));
        
        curl_setopt($curl, CURLOPT_USERAGENT, 'MSIE 5'); //эта строчка как-бы говорит: "я не скрипт, я IE5" :)
        curl_setopt ($curl, CURLOPT_REFERER, "http:/travelsim.lt"); //а вдруг там проверяют наличие рефера
        
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;

    } 
}