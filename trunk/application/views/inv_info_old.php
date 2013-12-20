<div class="container">
	<div class="row">
		<div class="offset1 span6">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li class="active">генерация инвойса - фирма : <?=$firm->name?></li>
            </ul>
        </div>
        <div class="span2">
        	<p>Hello <strong><?=$user?></strong> <a href="<?=URL::base()?>auth/logout">logout</a></p>
        </div>
        <div class="span2">
        	Lime CMR ver:1.00
        </div>    
    
    </div><!-- /row-->
	<div class="row">
    	<h4 align="center">Firma :  <?=$firm->name?></h4>
        <div class="offset1">
        	<form method="post" class="invoice form-horizontal" action="<?=URL::base()?>invoice/generate/<?=$firm->id?>">
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
                                <input type="radio" name="vat" value="21" checked> PVM (VAT) 21%
                            </label>
                            
                            <label class="radio">
                                <input type="radio" name="vat" value="0"> PVM (VAT) 0%
                            </label>
                            <button type="submit" class="btn">Сгенерировать</button>
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
         	<h5 align="center">История счетов</h5>
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
