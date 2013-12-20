<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Pdf extends Controller_Base {
    
    public function action_index(){
        
        
        $pdf = View_MPDF::factory('pdf/test');
        $pdf->set('name','Ruslan');
        
        $pdf->write_to_disk('media/pdf/test.pdf');
        $pdf->download('test.pdf'); 
        
    }
}