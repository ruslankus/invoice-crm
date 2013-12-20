<div class="container">
	<div class="row">
		<div class="span7">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li class="active">редактирование: <?=$firm->name?></li>
            </ul>
        </div>
        <div class="span2">
            <p>Hello <strong><?=$user?></strong> <a href="<?=URL::base()?>auth/logout">logout</a></p>
        </div>
        <div class="span2">
        	Балланс: <strong><?=$firmMoney?></strong>&euro;
        </div>
        <div class="span1 font10">
        	Lime CRM ver:1.00
        </div>    
    
    </div><!-- /row-->
    
    <div class="row">
   	  <h4 align="center">Редактирование данных фирма : <?=$firm->name?></h4>
        <div class="span10 offset1">
            <form class="form-horizontal" method="post" action="<?=URL::base()?>main/firm_edit/<?=$firm->id?>">
                        
                <div class="control-group firmName">
                    <label class="control-label" for="">Название компании</label>
                    <div class="controls">
                        <input class="span4" name="name" type="text" value="<?=$firm->name?>" />
                    </div>
                </div><!-- /firmName -->
                
                <div class="control-group firmCode">
                    <label class="control-label" for="">Код компании</label>
                    <div class="controls">
                        <input  type="text" name="firm_code" value="<?=$firm->firm_code?>" />
                    </div>
                </div><!-- /firmCode -->
                
                <div class="control-group vatCode">
                    <label class="control-label" for="">PVM / VAT код<br/> компании</label>
                    <div class="controls">
                        <input  type="text" name="vat_code" value="<?=$firm->vat_code?>" />
                    </div>
                </div><!-- /vAtCode -->
                
                <div class="control-group email">
                    <label class="control-label" for="">Email компании</label>
                    <div class="controls">
                        <input  type="text" name="email" value="<?=$firm->email?>" />
                    </div>
                </div><!-- /email  -->
                <hr/>
                <h5 class="offset1">Адрес компании</h5>
                <div class="control-group firmStreet">
                    <label class="control-label" for="">Улица , дом</label>
                    <div class="controls">
                        <input  type="text" name="firm_street" value="<?=$firm->firm_street?>" placeholder="Прм: Kanto I. 12-36" />
                    </div>
                </div><!-- /firmStreet -->
                
                <div class="control-group firmIndex">
                    <label class="control-label" for="">Индекс</label>
                    <div class="controls">
                        <input  type="text" name="firm_index" value="<?=$firm->firm_index?>" placeholder="Прм: 23456" />
                    </div>
                </div><!-- /firmIndex -->
                
                <div class="control-group firmCity">
                    <label class="control-label" for="">Город</label>
                    <div class="controls">
                        <input  type="text" name="firm_city" value="<?=$firm->firm_city?>" placeholder="Прм: 23456" />
                    </div>
                </div><!-- /firmCity -->
                
                <div class="control-group firmCountry">
                    <label class="control-label" for="">Страна</label>
                    <div class="controls">
                        <input  type="text" name="firm_country" value="<?=$firm->firm_country?>" placeholder="Прм: " />
                    </div>
                </div><!-- /firmCountry -->
                <!-- block adressa dostavki -->
                
                <h5 class="offset1">Адрес доставки</h5>
                <div class="control-group delivStreet">
                    <label class="control-label" for="">Улица , дом</label>
                    <div class="controls">
                        <input  type="text" name="firm_deliv_street" value="<?=$firm->firm_deliv_street?>" placeholder="Прм: Kanto I. 12-36" />
                    </div>
                </div><!-- /delivStreet -->
                
                <div class="control-group delivIndex">
                    <label class="control-label" for="">Индекс</label>
                    <div class="controls">
                        <input  type="text" name="firm_deliv_index" value="<?=$firm->firm_deliv_index?>" placeholder="Прм: 23456" />
                    </div>
                </div><!-- /delivIndex -->
                
                 <div class="control-group delivCountry">
                    <label class="control-label" for="">Город</label>
                    <div class="controls">
                        <input  type="text" name="firm_deliv_city" value="<?=$firm->firm_deliv_city?>" placeholder="Прм: " />
                    </div>
                </div><!-- /delivCountry -->
                
                <div class="control-group delivCountry">
                    <label class="control-label" for="">Страна</label>
                    <div class="controls">
                        <input  type="text" name="firm_deliv_country" value="<?=$firm->firm_deliv_country?>" placeholder="Прм: " />
                    </div>
                </div><!-- /delivCountry -->
                <hr/>
                <h5 class="offset1">Банковские реквизиты</h5>
                <div class="control-group firmaAccount">
                    <label class="control-label" for="">Расчетный счет</label>
                    <div class="controls">
                        <input  type="text" name="firm_account" value="<?=$firm->firm_account?>" placeholder="Прм: 23456" />
                    </div>
                </div><!-- /firmAccount -->
                
                <div class="control-group firmBank">
                    <label class="control-label" for="">Название банка</label>
                    <div class="controls">
                        <input  type="text" name="firm_bank" value="<?=$firm->firm_bank?>" placeholder="Прм: " />
                    </div>
                </div><!-- /firmBank -->
               <button type="submit" name="submit" class="btn btn-primary offset6">Save changes</button>
            
            </form>
        
      </div><!-- /span10 -->
    </div><!-- / row -->


</div><!-- /container -->
