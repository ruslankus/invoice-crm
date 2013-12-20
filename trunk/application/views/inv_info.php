<div class="container">
	<div class="row">
		<div class="span6">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li class="active">генерация инвойса - фирма : <?=$firm->name?></li>
            </ul>
        </div>
        <div class="span2">
        	<p>Hello <strong><?=$user?></strong> <a href="<?=URL::base()?>auth/logout">logout</a></p>
        </div>
        <div class="span2">
        	Балланс: <strong><?=$firmMoney?></strong>&euro;
        </div>
        <div class="span2">
        	Lime CRM ver:1.00
        </div>    
    
    </div><!-- /row-->
	<div class="row">
    	<h4 align="center">Firma :  <?=$firm->name?></h4>
        <div class="offset1">
        	<form method="POST" class="invoice form-horizontal" action="<?=URL::base()?>invoice/generate/<?=$firm->id?>">
            	<fieldset>
                	<legend align="center">Сгенирировать счет</legend>
                    <div class="control-group">
                    	<label class="control-label" for="from">От</label>
                        <div class="controls">
                        	<input type="text" class="span2" placeholder="От" name="from" id="from"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                    	<label class="control-label" for="to">До</label>
                        <div class="controls">
                        	<input type="text" class="span2" name="to" placeholder="До" id="to"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                             <label class="radio">
                                <input type="radio" name="vat_lang" value="21_eng" checked> PVM (VAT) 21% - ENG
                            </label>
                        
                            <label class="radio">
                                <input type="radio" name="vat_lang" value="21"> PVM (VAT) 21% - LIT
                            </label>
                            
                            <label class="radio">
                                <input type="radio" name="vat_lang" value="0"> PVM (VAT) 0%  - ENG
                            </label>
                            <a href="#myModal" class="btn" role="button" data-target="#myModal" data-toggle="modal">Сгенерировать</a>
                            
                                        <!-- start modal-->
                            <div class="modal fade hide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 id="myModalLabel">Количество инвойсов в системе</h3>
                                </div>
                                <div class="control-group">
                                	<label class="control-label" for="">Инвойсов </label>
                                    <div class="controls">
                                    	<input class="span1" name="inv_count" value="<?=$inv_count+1?>" type="text" />
                                    </div>
                                </div><!-- /control_group-->
                            	<div class="row">
                                    <div class="offset1 span6">   
                                      <i class="icon-warning-sign"></i>  Если количество отличное от вашего - введите провильное значение</p>
                                    </div>   
                            	</div>
                                
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Генерировать</button>
                                </div>
                            </div><!-- /modal -->

                            <!-- end modal--> 
                            
                        </div>
                    </div>
                </fieldset>
            </form><!-- /invoice -->
        </div><!-- /span6 -->

	</div><!-- /row -->
    
        <div class="row">
    	<div class="span6">
        	<h5 align="center">История операций за 30 дней</h5>
            <table class="table table-bordered">
            	<thead>
                	<tr>
                    	<th>#</th>
                        <th>Дата</th>
                        <th>N тел</th>
                        <th>Операция</th>
                        
                    </tr>
                </thead>
                <tbody class="font11">
                 <?php foreach($ops as $num => $op):?>   
                    <tr>
                    	<td><?=$num + 1?></td>
                        <td><?=date('Y-m-d',$op->data)?></td>
                        <td><a href="<?=URL::base()?>cards/info/<?=$op->card_id?>"><?=$op->cards->phone_number?></a></td>
                        <td><?=$op->op_names->op_code?> <?=$op->op_names->op_name?></td>
                    </tr>
                  <?php endforeach;?>  
                    
                </tbody>
        	</table>
        </div><!-- /span6 -->
        
        <div class="span6">
         	<h5 align="center">История счетов, <a href="<?=URL::base()?>invoice/history/<?=$firm->id?>">подробнее...</a></h5>
            <table class="table table-bordered">
            	<thead>
                	<tr>
                    	<th>#</th>
                        <th>Дата</th>
                        <th>Периуд</th>
                        <th>Кто делал</th>
                        <th>Файл</th>
                    </tr>
                </thead>
                <tbody class="font11">
                	<?php foreach($invoice as $num => $item):?> 
                	<tr>
                    	<td><?=$num + 1?></td>
                        <td><?=date('d.m.Y',$item->date)?></td>
                        <td><?=date('d.m.Y',$item->period_from)?> до <?=date('d.m.Y',$item->period_to)?></td>
                        <td><?=$item->person?></td>
                        <td><a href="<?=URL::base()?>media/pdf/<?=$item->file?>.pdf" target="_blank"><?=$item->file?>.pdf</a></td>
                    </tr>
                  <?php endforeach;?> 
                </tbody>
            </table>
        </div><!-- /span -->
    </div><!-- /row -->

</div><!-- /container -->
