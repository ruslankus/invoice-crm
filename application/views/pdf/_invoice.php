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
                                <p class="font10">Lietuva</p>
                            </td>
                            <td>
                                <p class="font10">Imones kodas: 302496605</p>
                                <p class="font10">PVM moketojo kodas: LT100005320519</p>
                                <p class="font10">A/S: LT537044060007450393</p>
                                <p class="font10">AB SEB Bankas 70440</p>
                                <p class="font10">SWIFT: CBVILT2X</p>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<h4 class="font12 lineh14">Abonentas:</h4>
                            </td>
                            <td>
                            	<h4 class="font12 lineh14">Pristatymo adresas:</h4>
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
            	<h1 align="center" class="font24">PVM Saskaita - Faktura</h1>
                <hr/>
                <table width="100%">
                	<tr>
                    	<td><p class="font14"><strong>Laikotarpis:</strong></p></td>
                        <td><p class="font14"><?=date('m/d/Y',$date_from)?> - <?=date('m/d/Y',$date_to)?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Data:</strong></p></td>
                        <td><p class="font14"><?=date('m/d/Y')?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Serija Nr:</strong></p></td>
                        <td><p class="font14">LIMA13 NR0003</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Saskaitos Nr:</strong></p></td>
                        <td><p class="font14">LT0003</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Valiuta :</strong></p></td>
                        <td><p class="font14">LTL</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Apmoketi per:</strong></p></td>
                        <td><p class="font14">14 dienu</p></td>
                    </tr>
                </table>
            </div><!-- /infoRight -->
        </td>
    </tr>    
    </table>
    <!--- end header -->
    
        <table width="100%">
   	    <tr class="thead">
           	
            <td class="colorWh" style="width: 40%;">PAVADINIMAS</td>
            <td class="colorWh">KODAS</td>
            <td class="colorWh">KIEKIS</td>            
            <td class="colorWh">KAINA,EUR</td>
            <td class="colorWh">KAINA,LTL</td>
            <td class="colorWh">TOTAL,EUR</td>
            <td class="colorWh">TOTAL,LTL</td>
        </tr>
        
        <?php if($ops_act->count() > 0):?>
            <tr>            	
                
                <td class="font12"><?=$op_act_name->op_name?></td>
                <td class="font12"><?=$op_act_name->op_code?></td>
                <td class="font12"><?=$ops_act->count()?></td>
                <td class="font12">&euro; <?=$op_act_name->op_cost_eur?></td>
                <td class="font12"><?=$op_act_name->op_cost_lit.' Lt'?></td>
                <td class="font12">&euro; <?=number_format($op_act_name->op_cost_eur*$ops_act->count(),2)?></td>
                <td class="font12"><?=number_format($op_act_name->op_cost_lit*$ops_act->count(),2);?></td>
            </tr>        
        <?php endif;?>
        
        <?php if($ops1->count() > 0):?>
            <tr>            	
                
                <td class="font12"><?=$ops1_name->op_name?></td>
                <td class="font12"><?=$ops1_name->op_code?></td>
                <td class="font12"><?=$ops1->count()?></td>
                <td class="font12">&euro; <?=$ops1_name->op_cost_eur?></td>
                <td class="font12"><?=$ops1_name->op_cost_lit.' Lt'?></td>
                <td class="font12">&euro; <?=number_format($ops1_name->op_cost_eur*$ops1->count(),2)?></td>
                <td class="font12"><?=number_format($ops1_name->op_cost_lit*$ops1->count(),2)?></td>
            </tr>        
        <?php endif;?>
        
        <?php if($ops2->count() > 0):?>
            <tr>            	
                
                <td class="font12"><?=$ops2_name->op_name?></td>
                <td class="font12"><?=$ops2_name->op_code?></td>
                <td class="font12"><?=$ops2->count()?></td>
                <td class="font12">&euro; <?=$ops2_name->op_cost_eur?></td>
                <td class="font12"><?=$ops2_name->op_cost_lit.' Lt'?></td>
                <td class="font12">&euro; <?=number_format($ops2_name->op_cost_eur*$ops2->count(),2);?></td>
                <td class="font12"><?=number_format($ops2_name->op_cost_lit*$ops2->count(),2);?></td>
            </tr>        
        <?php endif;?>
        
        <?php if($ops3->count() > 0):?>
            <tr>            	
                
                <td class="font12"><?=$ops3_name->op_name?></td>
                <td class="font12"><?=$ops3_name->op_code?></td>
                <td class="font12"><?=$ops3->count()?></td>
                <td class="font12">&euro; <?=$ops3_name->op_cost_eur?></td>
                <td class="font12"><?=$ops3_name->op_cost_lit.' Lt'?></td>
                <td class="font12">&euro; <?=number_format($ops3_name->op_cost_eur*$ops3->count(),2)?></td>
                <td class="font12"><?=number_format($ops3_name->op_cost_lit*$ops3->count(),2)?></td>
            </tr>        
        <?php endif;?>
        
        <tr>
			<td colspan="1">&nbsp;</td>
            <td colspan="6">
                
            	<table width="100%" style="width: 100%;" class="borderTop"> 
                	<tr class="font13">
                       <td width="70%">Total / Viso  </td>
                       <td width="15%">&euro; <?=number_format($totallEur,2)?></td>
                       <td width="15%"><?=number_format($totallLit,2)?> Lt</td>
                    </tr>
                    <tr class="margintopBot"><td colspan="3"><hr></td></tr>
                    <tr class="font13 borderTop">
                       <td> PVM/VAT TAX <?=$vat?>% </td>
                       <td>&euro; <?php echo round(($totallEur * $vat/100),2); ?></td>
                       <td><?php echo round(($totallLit * $vat/100),2); ?> Lt</td>
                    </tr>
                    <tr><td colspan="3"><hr></td></tr>
                    <tr class="font13">
                       <td>Bendra summa su PVM /Subtotal</td>
                       <td>&euro; <?=round(($totallEur + $totallEur * $vat/100),2)?></td>
                       <td><?=round(($totallLit + $totallLit * $vat/100),2)?> Lt</td>
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
                                <p class="font10">UAB inlusion Netforms </p>
                                <p class="font10">Z.Sierakausko 15A-7</p>
                                <p class="font10">LT-08241 Vilnius</p>
                                <p class="font10">Lietuva</p>
                            </td>
                            <td>
                                <p class="font10">Imones kodas: 302496605</p>
                                <p class="font10">PVM moketojo kodas: LT100005320519</p>
                                <p class="font10">A/S: LT537044060007450393</p>
                                <p class="font10">AB SEB Bankas 70440</p>
                                <p class="font10">SWIFT: CBVILT2X</p>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<h4 class="font12 lineh14">Abonentas:</h4>
                            </td>
                            <td>
                            	<h4 class="font12 lineh14">Pristatymo adresas:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <?php foreach($num['abonent'] as $ab): ?>
                               <p class="font10"> <?=$ab ?>test </p>
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
                    	<td><p class="font14"><strong>Laikotarpis:</strong></p></td>
                        <td><p class="font14"><?=date('m/d/Y',$date_from)?> - <?=date('m/d/Y',$date_to)?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Data:</strong></p></td>
                        <td><p class="font14"><?=date('m/d/Y')?></p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Serija Nr:</strong></p></td>
                        <td><p class="font14">LIMA13 NR0003</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Saskaitos Nr:</strong></p></td>
                        <td><p class="font14">LT0003</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Phone Nr:</strong></p></td>
                        <td><p class="font14"><?=$num['card_phone']?></p></td>
                    </tr>
                    
                    <tr>
                    	<td><p class="font14"><strong>Sim card Nr:</strong></p></td>
                        <td><p class="font14"><?=$num['card_number']?></p></td>
                    </tr>
                    
                    <tr>
                    	<td><p class="font14"><strong>Valiuta :</strong></p></td>
                        <td><p class="font14">LTL</p></td>
                    </tr>
                    <tr>
                    	<td><p class="font14"><strong>Apmoketi per:</strong></p></td>
                        <td><p class="font14">14 dienu</p></td>
                    </tr>
                </table>
            </div><!-- /infoRight -->
        </td>
    </tr>    
    </table>
    <!--- end header -->  
    
    <table width="100%" >
    	<tr class="thead">
        	<td class="colorWh">DATA</td>
        	<td class="colorWh">PASLAUGA</td>
            <td class="colorWh">PAVADINIMAS</td>
            <td class="colorWh">KODAS</td>            
            <td class="colorWh">KAINA,EUR</td>
            <td class="colorWh">KAINA,LTL</td>
        </tr>
         <?php foreach($num['ops'] as $op):?>   
        	<tr>
            	<td class="font12"><?=date('Y.m.d',$op->data)?></td>
                <td class="font12"><?=$op->op_names->op_description?></td>
                <td class="font12"><?=$op->op_names->op_name?></td>
                <td class="font12"><?=$op->op_names->op_code?></td>
                <td class="font12">&euro; <?=$op->op_names->op_cost_eur?></td>
                <td class="font12"><?=$op->op_names->op_cost_lit?></td>                
            </tr>
         <?php endforeach;?>   
    </table>    
    
      
    
    </div><!-- / end wrapper -->
   <?php endforeach;?> 
    
</body>
</html>
