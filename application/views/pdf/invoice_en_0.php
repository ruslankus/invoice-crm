<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="<?=URL::base()?>/media/css/invoice.css"/>
<head>
<meta charset="utf-8"/>
</head>

<body>
	<div class="wrapper border">
    <table width="100%">
    <tr>
    	<td width="50%">
            <div class="infoLeft">
                <div class="infoWe">
                    <table width="100%" valign='top'>
                        <tr>
                            <td>
                                <img style="border:1px solid white" src="<?=URL::base()?>media/images/logo.jpg"  width="112" height="90" />
                            </td>
                            <td >
                                <p class="font10">Tel :   +370-5-2058255</p>
                                <p class="font10">Fax :  +370-5-2058256</p>
                                <p class="font10">email : info@inlu.net</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font10">UAB inlusion Netforms </p>
                                <p class="font10">Z.Sierakausko 15A-7</p>
                                <p class="font10">LT-08241 Vilnius</p>
                                <p class="font10">Lithuania</p>
                            </td>
                            <td>
                                <p class="font10">Comp.Reg.Nr: 302496605</p>
                                <p class="font10">EU VAT NR: LT100005320519</p>
                                <p class="font10">IBAN: LT537044060007450393</p>
                                <p class="font10">AB SEB Bank 70440</p>
                                <p class="font10">SWIFT: CBVILT2X</p>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<h4 class="font12 lineh14">Customer:</h4>
                            </td>
                            <td>
                            	<h4 class="font12 lineh14">Delivery Address :</h4>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                                <?php foreach($abonent as $item):?>
                            	   <p class="font10"><?=$item?></p>
                                <?php endforeach;?>                                
                            </td>
                            <td>
                            	<?php foreach($del_adr as $item):?>
                            	   <p class="font10"><?=$item?></p>
                                <?php endforeach;?>   
                            </td>
                        </tr>
                    </table>
                </div><!-- /infoWe-->
                
                
            </div><!-- /infoLeft -->
        </td>
        <td valign="top">
            <div class="infoRight">
            	<h1 align="center" class="font24">Invoice / Sąskaita-faktūra</h1>
                <hr/>
                <table width="100%">
                	<tr>
                    	<td><p class="font12"><strong>Timeline:</strong></p></td>
                        <td><p class="font10"><?=date('d/m/Y',$date_from)?> - <?=date('d/m/Y',$date_to)?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Date:</strong></p></td>
                        <td><p class="font10"><?=date('d/m/Y')?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Serial Nr:</strong></p></td>
                        <td><p class="font10"><?=$inv_full_nr?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Invoice Nr:</strong></p></td>
                        <td><p class="font10">LT<?=$inv_nr?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Currency :</strong></p></td>
                        <td><p class="font10">EUR</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Payment Term:</strong></p></td>
                        <td><p class="font10">14 days</p></td>
                    </tr>
                </table>
            </div><!-- /infoRight -->
        </td>
    </tr>    
    </table>
    <!--- end header -->
    
        <table width="100%">
   	    <tr class="thead">
           	<td class="colorWh font12">&nbsp;Service</td>
            <td class="colorWh font12">&nbsp;Description </td>            
            <td class="colorWh font12">&nbsp;Item Code</td>
            <td class="colorWh font12">&nbsp;Quantity</td>
            <td class="colorWh font12">&nbsp;Unit Value</td>
            <td class="colorWh font12">&nbsp;Total Value</td>
        </tr>
        
        <?php if($ops_act->count() > 0):?>
            <tr>            	
                <td class="font12"><?=$op_act_name->op_description_eng?></td>
                <td class="font12"><?=$op_act_name->op_name?></td>
                <td class="font12"><?=$op_act_name->op_code?></td>
                <td class="font12"><?=$ops_act->count()?></td>
                <td class="font12">&euro; <?=number_format($op_act_name->op_cost_full_eur,2); ?></td>
                <td class="font12">&euro; <?=number_format($op_act_name->op_cost_full_eur*$ops_act->count(),2)?></td>
           </tr>        
        <?php endif;?>
        
        <?php if($ops1->count() > 0):?>
            <tr>            	
                <td class="font12"><?=$ops1_name->op_description_eng?></td>
                <td class="font12"><?=$ops1_name->op_name?></td>
                <td class="font12"><?=$ops1_name->op_code?></td>
                <td class="font12"><?=$ops1->count()?></td>
                <td class="font12">&euro; <?=number_format($ops1_name->op_cost_full_eur,2)?></td>
                <td class="font12">&euro; <?=number_format($ops1_name->op_cost_full_eur*$ops1->count(),2)?></td>
            </tr>        
        <?php endif;?>
        
        <?php if($ops2->count() > 0):?>
            <tr>            	
                <td class="font12"><?=$ops2_name->op_description_eng?></td>
                <td class="font12"><?=$ops2_name->op_name?></td>
                <td class="font12"><?=$ops2_name->op_code?></td>
                <td class="font12"><?=$ops2->count()?></td>
                <td class="font12">&euro; <?=number_format($ops2_name->op_cost_full_eur,2)?></td>
                <td class="font12">&euro; <?=number_format($ops2_name->op_cost_full_eur*$ops2->count(),2)?></td>
            </tr>        
        <?php endif;?>
        
        <?php if($ops3->count() > 0):?>
            <tr>            	
                <td class="font12"><?=$ops3_name->op_description_eng?></td>
                <td class="font12"><?=$ops3_name->op_name?></td>
                <td class="font12"><?=$ops3_name->op_code?></td>
                <td class="font12"><?=$ops3->count()?></td>
                <td class="font12">&euro; <?=number_format($ops3_name->op_cost_full_eur,2)?></td>
                <td class="font12">&euro; <?=number_format($ops3_name->op_cost_full_eur*$ops3->count(),2)?></td>
            </tr>        
        <?php endif;?>
        
        <tr>
			<td colspan="2">&nbsp;</td>
            <td colspan="4">
                
            	<table width="100%" style="width: 100%;" class="borderTop font12"> 
                	<tr class="font13">
                       <td width="85%">Total  </td>
                       <td width="15%">&euro; <?=number_format($totall_full_Eur,2)?></td>
                     </tr>
                    <tr class="margintopBot"><td colspan="3"><hr></td></tr>
                    <tr class="font13 borderTop">
                       <td>VAT TAX <?=$vat?>% </td>
                       <td>&euro; <?php echo round(($totall_full_Eur * $vat/100),2); ?></td>
                     </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr class="font13">
                       <td>Subtotal</td>
                       <td>&euro; <?=round(($totall_full_Eur + $totall_full_Eur * $vat/100),2)?></td>
                    </tr>
                </table>
            </td>	
         </tr>

           
    </table>    

        
    </div><!-- /wrapper -->
    
    <?php foreach($numbers as $num):?>
    <div class="wrapper border">
    <table width="100%">
    <tr>
    	<td width="50%">
            <div class="infoLeft">
                <div class="infoWe">
                    <table width="100%" valign='top'>
                        <tr>
                            <td>
                                <img style="border:1px solid white" src="<?=URL::base()?>media/images/logo.jpg"  width="112" height="90" />
                            </td>
                            <td >
                                <p class="font10">Tel :   +370-5-2058255</p>
                                <p class="font10">Fax :  +370-5-2058256</p>
                                <p class="font10">email : info@inlu.net</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="font10">UAB Inlusion Netforms </p>
                                <p class="font10">Z.Sierakausko 15A-7</p>
                                <p class="font10">LT-08241 Vilnius</p>
                                <p class="font10">Lithuania</p>
                            </td>
                            <td>
                                <p class="font10">Comp.Reg.Nr: 302496605</p>
                                <p class="font10">EU VAT NR: LT100005320519</p>
                                <p class="font10">A/S: LT537044060007450393</p>
                                <p class="font10">AB SEB Bankas 70440</p>
                                <p class="font10">SWIFT: CBVILT2X</p>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<h4 class="font12 lineh14">Customer:</h4>
                            </td>
                            <td>
                            	<h4 class="font12 lineh14">Delivery Address :</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <?php foreach($num['abonent'] as $ab): ?>
                               <p class="font10"><?=$ab ?></p>
                            <?php endforeach;?> 
                            </td>  
                        </tr>  
                            <td>  
                            <?php foreach($num['del_adr'] as $ad):?>
                               <p class="font10"><?=$ad ?></p>
                            <?php endforeach;?> 
                            </td>
                        </tr>
                    </table>
                </div><!-- /infoWe-->
                
                
            </div><!-- /infoLeft -->
        </td>
        <td valign="top">
            <div class="infoRight">
            	<h1 align="center" class="font24">Account	statement</h1>
                <hr/>
                <table width="100%">
                	<tr>
                    	<td><p class="font12"><strong>Timeline:</strong></p></td>
                        <td><p class="font10"><?=date('d/m/Y',$date_from)?> - <?=date('d/m/Y',$date_to)?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Date:</strong></p></td>
                        <td><p class="font10"><?=date('d/m/Y')?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Serial Nr:</strong></p></td>
                        <td><p class="font10"><?=$inv_full_nr?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Invoice Nr:</strong></p></td>
                        <td><p class="font10">LT<?=$inv_nr?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Phone Nr:</strong></p></td>
                        <td><p class="font10"><?=$num['card_phone']?></p></td>
                    </tr>
                    
                    <tr>
                    	<td><p class="font12"><strong>Sim card Nr:</strong></p></td>
                        <td><p class="font10"><?=$num['card_number']?></p></td>
                    </tr>
                    
                    <tr>
                    	<td><p class="font12"><strong>Currency :</strong></p></td>
                        <td><p class="font10">EUR</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font12"><strong>Payment Term :</strong></p></td>
                        <td><p class="font10">14 days</p></td>
                    </tr>
                </table>
            </div><!-- /infoRight -->
        </td>
    </tr>    
    </table>
    <!--- end header -->  
    
    <table width="100%" >
    	<tr class="thead">
        	<td class="colorWh">Date</td>
        	<td class="colorWh">Service</td>
            <td class="colorWh">Item</td>
            <td class="colorWh">Description</td>            
            <td class="colorWh">Quantity</td>
            <td class="colorWh">Unit Value</td>
        </tr>
         <?php foreach($num['ops'] as $op):?>   
        	<tr>
            	<td class="font12"><?=date('Y.m.d',$op->data)?></td>
                <td class="font12"><?=$op->op_names->op_description_eng?></td>
                <td class="font12"><?=$op->op_names->op_code?></td>
                <td class="font12"><?=$op->op_names->op_name?></td>
                <td>1</td>
                <td class="font12">&euro; <?=$op->op_names->op_cost_full_eur?></td>
                                
            </tr>
         <?php endforeach;?>   
    </table>    
    
      
    
    </div><!-- / end wrapper -->
   <?php endforeach;?> 
    
</body>
</html>
