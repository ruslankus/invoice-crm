<div class="container">
	<div class="row">
		<div class="span7">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
                <li><a href="<?=URL::base()?>main/firm/<?=$firm->id?>"><?=$firm->name?></a><span class="divider">/</span></li>
            	<li class="active">история инвойсов</li>
            </ul>
        </div>
        <div class="span2">
        	<p>Hello <strong>admin</strong> <a href="#">logout</a></p>
        </div>
        <div class="span2">
        	Балланс: <strong><?=$firmMoney?></strong>&euro;
        </div>
        <div class="span1 font10">
        	Lime CRM ver:1.00
        </div>    
    </div><!-- /row-->
    
	<div class="row">
    	<h4 align="center">История инвойсов , Firma : <?=$firm->name?></h4>
        <table class="table table-bordered">
            	<thead>
                	<tr>
                    	<th>#</th>
                        <th>Дата</th>
                        <th>Периуд</th>
                        <th>Инвойс nr</th>
                        <th>Язык</th>
                        <th>VAT</th>
                        <th>Кто делал</th>
                        <th>Файл</th>
                        <th>Уведомление</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody class="font11">
                    <?php foreach($invoices as $num => $inv):?>
                	<tr>
                    	<td><?=$num+1?></td>
                        <td><?=date('d.m.Y',$inv->date)?></td>
                        <td><?=date('d.m.Y',$inv->period_from)?> до <?=date('d.m.Y',$inv->period_to)?></td>
                        <td>LT<?=$inv->invoice_number?></td>
                        <td><?=$inv->lng?></td>
                        <td><?=$inv->vat?></td>
                        <td><?=$inv->person?></td>
                        <td><a href="<?=URL::base()?>media/pdf/<?=$inv->file?>.pdf" target="_blank"><?=$inv->file?>.pdf</a></td>
                        <td></td>
                        <td>
                        	<a href="<?=URL::base()?>invoice/delete/<?=$inv->id?>" title="Удалить" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i></a>
                            <a href="#" title="Отослать уведомление"  class="btn btn-mini btn-info"><i class="icon-envelope icon-white"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
    </div><!-- /row -->
    
</div><!-- /container -->
