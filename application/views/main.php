<div class="container">
	
    	<div class="row">
		<div class="span6">
        	<ul class="breadcrumb">
            	<li class="active">Главная<span class="divider">/</span></li>
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
    </div><!-- /row -->    

    
    <div class="row">
        <div class="span3 offset1">
        <a href="#myModal" class="btn btn-info"role="button" data-target="#myModal" data-toggle="modal"><i class="icon-plus icon-white"></i>добавить компанию</a>	
        </div>
        
                <!-- modal window -->
        
<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Добавить компанию</h3>
    </div>
    <form class="form-horizontal" method="post" action="<?=URL::base()?>main/firm_add">
    <div class="control-group firmName">
    	<label class="control-label" for="">Название компании</label>
        <div class="controls">
        	<input class="span4" type="text" name="name" />
        </div>
    </div><!-- /firmName -->
    
    <div class="control-group firmCode">
    	<label class="control-label" for="">Код компании</label>
        <div class="controls">
        	<input  type="text" name="firm_code" />
        </div>
    </div><!-- /firmCode -->
    
    <div class="control-group vatCode">
    	<label class="control-label" for="">PVM / VAT код<br/> компании</label>
        <div class="controls">
        	<input  type="text" name="vat_code" />
        </div>
    </div><!-- /vAtCode -->
    <hr/>
    <h5 class="offset1">Адрес компании</h5>
    <div class="control-group firmStreet">
    	<label class="control-label" for="">Улица , дом</label>
        <div class="controls">
        	<input  type="text" placeholder="Прм: Kanto I. 12-36" name="firm_street" />
        </div>
    </div><!-- /firmStreet -->
    
    <div class="control-group firmIndex">
    	<label class="control-label" for="">Индекс</label>
        <div class="controls">
        	<input  type="text" placeholder="Прм: 23456" name="firm_index" />
        </div>
    </div><!-- /firmIndex -->
    
    <div class="control-group firmCountry">
    	<label class="control-label" for="">Страна</label>
        <div class="controls">
        	<input  type="text" placeholder="Прм: " name="firm_city" />
        </div>
    </div><!-- /firmCountry -->
    
    
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
    </div>
    </form>
</div><!-- /modal -->
        
        <!-- end modal window -->

        
        <div class="span6">
            <p class="lead">Выберите компанию</p>
        </div>
    </div><!-- / row -->
    <div class="row">
    	<div class="span10 offset1">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название компании</th>
                        <th>Кол. карт</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                   
                   <?php foreach($firms as $num => $item):?>
                   <tr>
                        <td><?=$num + 1 ?></td>
                        <td><a href="<?=URL::base()?>main/firm/<?=$item->id?>"><?=$item->name?></a></td>
                        <td><?=$item->cards->find_all()->count()?></td>
                        <td>
                            <a href="<?=URL::base()?>main/firm_edit/<?=$item->id?>" class="btn btn-mini btn-success">
                                <i class="icon-edit icon-white" ></i>редактировать
                            </a>
                            <a href="<?=URL::base(true, true)?>invoice/info/<?=$item->id?>" class="btn btn-mini btn-primary">
                                <i class="icon-print icon-white">

                                </i>инвойс</a>
                        </td>
                    </tr>
                    <?php endforeach;?>  
                </tbody>
            </table>
       </div>
    </div><!-- / row -->
    
</div><!-- /container -->
