<div class="container">
	<div class="row">
		<div class="span6">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li><a href="<?=URL::base()?>main/firm/<?=$firm->id?>"><?=$firm->name?></a><span class="divider">/</span></li>
                <li class="active">карта: <?=$card->cart_number?></li>
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
    
     	<div class="row">
        <div class="span7">
            <div class="row">
                <div class="span3 " >
                    <p>Карта  N: <?=$card->cart_number?></p>
                    <p>Тел. номер: <?=$card->phone_number?></p>
                    <p>Принадлежность: <a href="<?=URL::base()?>main/firm/<?=$firm->id?>"><?=$firm->name?></a></p>
                </div>
            </div><!--/row -->
              
            <div class="row">
                <div class="span3">
                   <p class="lead"><strong>Статус</strong>: <?=$card->status->name?></p>
                </div><!--/span3-->
            
                <div class="span3">
                
                <?php if($card->cart_status == 1):?>
                    <a href="<?=URL::base()?>cards/active/<?=$card->id?>" class=" btn btn-warning"><i class="icon-remove icon-white"></i> Актировать</a>
                <?php endif;?>
                
                <?php if($card->cart_status == 2):?>
                    <a href="<?=URL::base()?>cards/block/<?=$card->id?>" class=" btn btn-danger"><i class="icon-remove icon-white"></i> Блокировать</a>
                <?php endif;?>
                
                <?php if($card->cart_status == 3):?>
                    <a href="<?=URL::base()?>cards/unblock/<?=$card->id?>" class=" btn btn-success"><i class="icon-repeat icon-white"></i> Разблокировать</a>
                <?php endif;?>
                    
                </div><!--/span3 -->
            </div><!--row-->  
            
        </div><!--/span6 -->
        <div class="span5">
        	<div class="row">
                <div class="span5">
                	
                    <p>Балланс : <strong><span id="ball_<?=$card->id?>"><?=number_format($card->cart_ballance/100,2)?>&euro;</span></strong></p>
                    <p>Обновлен: <span id="date_<?=$card->id?>"><?=date('d.m.Y',$card->ballance_date);?></span></p>
                </div><!--/span5 -->    
            </div><!--/row -->
            
            <div class="row">
            	<div class="span5">
                	<a href="#" onclick="getCardBallance(<?=$card->id?>)" class="btn btn-success" ><i class="icon-refresh icon-white"></i> Обновить</a>
                </div>
            </div>
            
        </div><!--/span5 -->
    </div><!-- /row -->

    
    <div class="row">
        <h4 align="center" class="well offset1">Операции с картами</h4>
        
    </div><!-- / row -->
    
    <div class="row">
    	<div class="span4">
        	<form class="topUp" method="post" action="<?=URL::base()?>cards/ops_add/<?=$card->id?>">
            	<fieldset>
                	<legend align="center">Пополнить карту</legend>
                    <?php foreach($options as $num => $item):?>
                        <label class="radio">
                        	<input type="radio" name="ops" id="optionsRadios<?=$item->id?>" value="<?=$item->id?>" 
                            <?php if($num == 0):?>
                                checked="true"                            
                            <?php endif;?>/>
                             <?=$item->op_code ?> <?=$item->op_name?>
                        </label>
                    <?php endforeach;?>
                    
                    
                    <button type="submit" class=" offset2 btn btn-primary" 
                    <?php if($card->cart_status != 2):?>
                        disabled="disable"                    
                    <?php endif;?> >Пополнить</button>
                   
            	</fieldset>
            </form>
        </div>
        
        <div class="span4">
        	<form class="form-horizontal" method="post" action="<?=URL::base()?>cards/defoult_op/<?=$card->id?>">
            	<fieldset>
                	<legend align="center">Пополнить карту</legend>
                    <div class="control-group">
                    	<label class="control-label topUpLabel" for="topUp">Дата</label>
                        <div class="controls topUpControls">
                        	<input type="text" class="span2" name="date" placeholder="Укажите дату" id="topUp"/>
                        </div>
                    </div><!--/ control-group -->
                    
                    <?php foreach($options as $num => $item):?>
                        <label class="radio">
                        	<input type="radio" name="ops" id="optionsRadios<?=$item->id?>" value="<?=$item->id?>" 
                            <?php if($num == 0):?>
                                checked="true"                            
                            <?php endif;?>/>
                             <?=$item->op_code ?> <?=$item->op_name?>
                        </label>
                    <?php endforeach;?>
                    
                    
                    <?php if($card->cart_status == 1):?>
                        <button type="submit" class="offset2 btn btn-warning" name="activate">Активировать</button>
                    <?php endif;?>
                    
                    <?php if($card->cart_status == 2): ?>
                        <button type="submit" class=" offset2 btn btn-primary" name="topUp">Пополнить</button>
                    <?php endif; ?>
                </fieldset>
            </form>
        </div><!-- / span4 -->

        
        
        
        <div class="span4">
        	<form method="post" class="invoice form-horizontal" action="<?=URL::base()?>cards/generate/<?=$card->id?>">
            	<fieldset>
                	<legend align="center">Сгенирировать счет</legend>
                    <div class="control-group">
                    	<label class="control-label historyLabel" for="from">От</label>
                        <div class="controls historyControls">
                        	<input type="text" class="span2" name="from" placeholder="От" id="from"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                    	<label class="control-label historyLabel" for="to">До</label>
                        <div class="controls historyControls">
                        	<input type="text" class="span2" name="to" placeholder="До" id="to"/>
                        </div>
                    </div>
                       
                    <button type="submit" class="btn offset2"
                    <?php if($card->cart_status != 2):?>
                        disabled="disable"                    
                    <?php endif;?> >Сгенерировать</button>
   
                </fieldset>
            </form><!-- /invoice -->
        </div><!-- /span4 -->
    </div><!-- /row -->
    
    <div class="row">
    	<div class="span10 offset1">
        	<h5 align="center">История операций</h5>
            <table class="table table-bordered">
            	<thead>
                	<tr>
                    	<th>#</th>
                        <th>Дата</th>
                        <th>Операция</th>
                        <th>описание</th>
                        <th>Цена</th>
                        <th>Кто делал</th>
                        <th>Тип</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody class="font11">
                <?php foreach($card_history as $num => $item):?>
                    <tr>
                    	<td><?=$num+1?></td>
                        <td><?=date('Y-m-d',$item->data)?></td>
                        <td><?=$item->op_names->op_code?> <?=$item->op_names->op_name?></td>
                        <td><?=$item->op_names->op_description?></td>
                        <td><?=$item->op_names->op_cost_eur?></td>
                        <td><?=$item->person?></td>
                        <th>Real</th>
                        <td>
                        <?php if($item->operation_type == 1): ?>
                            <a href="<?=URL::base()?>cards/delete_op/<?=$item->id?>" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i>Удалить</a>
                        <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach;?>
                    
                </tbody>
        	</table>
        </div><!-- /span9 -->
        
    </div><!-- /row -->
    
</div><!-- /container -->
