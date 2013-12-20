<div class="container">
	<div class="row">
        <div class="span3 offset1">
            <a href="<?=URL::base()?>" class="btn btn-info"><i class="icon-home icon-white"></i>на главную</a>
        </div>	
        <div class="span5 offset1">
        	<p class="lead" ><strong>Фирма :</strong><?=$firm->name?></p>
        </div>
     </div><!-- / row -->   
    	<div class="row">
        	<div class="span5 offset1">
            	<p class="lead">Код фирмы: <?=$firm->firm_code?></p>
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
                <p>Kalvariju g. 24 </p>
                <p>LT21006</p>
                <p>Vilnius</p>
            </div>
            
            <div class="span3 offset1">
            	<h4>Адрес доставки</h4>
                <p>Kalvariju g. 24 </p>
                <p>LT21006</p>
                <p>Vilnius</p>
            </div>
        </div><!--/row -->
        
        <div class="row">
            <div class="span3 offset1">
            	<a href="#" class="btn btn-info"><i class="icon-plus icon-white"></i>добавить карточку</a>	
            </div>
            <div class="span6">
            	<p class="lead">Выберите карточку</p>
        	</div>
        </div><!-- /row -->	
        <div class="row">
        	<div class="span8 offset1">
                <table  class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>номер карты</th>
                            <th>тел. номер</th>
                            <th>статус карты</th>
                        </tr>
                    </thead>
                   	<tbody>
                    <?php foreach($cards as $num => $item):?>
                    	<tr>
                        	<td><?=$num + 1?></td>
                        	<td><?=$item->cart_number?></td>
                            <td><a href="<?=URL::base()?>cards/info/<?=$item->id?>"><?=$item->phone_number?></a></td>
                            <td><?=$item->status->name?></td>
                        </tr>
                    <?php endforeach;?>
                        
                    </tbody>
                </table>
            </div>
        </div><!-- /row -->
        
   
    
</div><!-- /container -->


