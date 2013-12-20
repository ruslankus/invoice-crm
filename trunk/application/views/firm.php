<div class="container">
	<div class="row">
		<div class="span6">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li class="active"><?=$firm->name?></li>
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
        <div class="span5 offset1">
        	<p><strong>Фирма :</strong><?=$firm->name?></p>
        </div>
     </div><!-- / row -->   
    	<div class="row">
        	<div class="span5 offset1">
            	<p>Код фирмы: <?=$firm->firm_code?></p>
            </div>
        </div><!-- /row -->
        <div class="row">
        	<div class="span5 offset1">
            	<p>Email фирмы: <?=$firm->email?></p>
            </div>
        </div><!-- /row -->
        
        <div class="row">
        	<div class="span5 offset1">
            	<p class="lead">VAT фирмы: <?=$firm->vat_code?></p>
            </div>
        </div><!-- /row -->
        <div class="row">
        	<div class="span2 offset1">
            	<h4>Адрес</h4>
               <?php foreach($adr as $item):?> 
                <p><?=$item?></p>
               <?php endforeach;?> 
            </div>
            
            <div class="span3 offset1">
            	<h4>Адрес доставки</h4>
                <?php foreach($del_adr as $item):?> 
                <p><?=$item?></p>
               <?php endforeach;?> 
            </div>
        </div><!--/row -->
        
        <div class="row">
            <div class="span3 offset1">
            	<a href="#" class="btn btn-info" role="button" data-target="#myModal" data-toggle="modal"><i class="icon-plus icon-white"></i>добавить карточку</a>
                
                                <!-- modal window -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Добавить карточку</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?=URL::base()?>cards/add/<?=$firm->id?>">
    <div class="control-group firmName">
    	<label class="control-label" for="">Номер карточки</label>
        <div class="controls">
        	<input name="cart_number" type="text" />
        </div>
    </div><!-- /firmName -->
    
    <div class="control-group firmCode">
    	<label class="control-label" for="">Телефонный номер</label>
        <div class="controls">
        	<input  type="text" name="phone_number" />
        </div>
    </div><!-- /firmCode -->
    
    
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>
    </form>
</div><!-- /modal -->
                
                <!-- end modal window -->

                	
            </div>
            <div class="span6">
            	<p class="lead">Выберите карточку</p>
        	</div>
        </div><!-- /row -->	
        <div class="row">
        	<div class="span12">
                <table  class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>номер карты</th>
                            <th>тел. номер</th>
                            <th>статус карты</th>
                            <th>дата активации</th>
                            <th>Балланс</th>
                            <th>дата обновл.</th>
                            <th>действия</th>
                        </tr>
                    </thead>
                   	<tbody>
                    <?php foreach($cards as $num => $item):?>
                    	<tr>
                        	<td><?=$num + 1?></td>
                        	<td><?=$item->cart_number?></td>
                            <td><a href="<?=URL::base()?>cards/info/<?=$item->id?>"><?=$item->phone_number?></a></td>
                            <td><?=$item->status->name?></td>
                            <td>
                            <?php if($item->activation_date): ?>
                                <?=date('Y.m.d',$item->activation_date);?>
                            <?php else: ?>
                                Не активирована
                            <?php endif;?>
                            </td>
                            <td id="ball_<?=$item->id?>"><?=number_format($item->cart_ballance/100,2)?>&euro;</td>
                            <td id="date_<?=$item->id?>">
                                <?php if($item->ballance_date): ?>
                                    <?=date('d.m.Y',$item->ballance_date);?>
                                <?php else:?>
                                    не проверялся
                                <?php endif;?>
                            </td>
                            
                            <td>
                                <a href="<?=URL::base()?>cards/edit/<?=$item->id?>" title="Редактировать" class="btn btn-mini btn-info"><i class="icon-edit icon-white" ></i></a>
                                <a href="#" onclick="getCardBallance(<?=$item->id?>)" title="Обновить баллансе" class="btn btn-mini btn-success"><i class="icon-refresh icon-white"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                        
                    </tbody>
                </table>
            </div>
        </div><!-- /row -->
        
   
    
</div><!-- /container -->


