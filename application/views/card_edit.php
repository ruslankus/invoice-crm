<div class="container">
	<div class="row">
		<div class="span7">
        	<ul class="breadcrumb">
            	<li><a href="<?=URL::base()?>">Главная</a><span class="divider">/</span></li>
            	<li><a href="<?=URL::base()?>/main/firm/<?=$firm->id?>"><?=$firm->name ?></a><span class="divider">/</span></li>
                <li class="active">редактировать карта: 599909090</li>
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
    	<div class="span10 offset1" >
    		<p>Карта  N: <?=$card->cart_number?></p>
            <p>Тел. номер: <?=$card->phone_number?></p>
            <p>Принадлежность: <a href="<?=URL::base()?>/main/firm/<?=$firm->id?>"><?=$firm->name ?></a></p>
        </div>
    </div><!-- /row --> 
          
    <div class="row">
   	  <h4 align="center">Редактирование карта : <?=$card->cart_number?> </h4>
        <div class="span10 offset1">
           <form class="form-horizontal" method="post" action="<?=URL::base()?>cards/edit/<?=$card->id?>">
           
                <div class="control-group cardNumber">
                    <label class="control-label" for="">Номер карточки</label>
                    <div class="controls">
                        <input class="span4" name="cart_number" value="<?=$card->cart_number?>" type="text" />
                    </div>
                </div><!-- /cardNumber -->
                
                <div class="control-group phoneNumber">
                    <label class="control-label" for="">Номер телефона</label>
                    <div class="controls">
                        <input  type="text" name="phone_number" value="<?=$card->phone_number?>" />
                    </div>
                </div><!-- /phoneNumber -->
               <button type="submit" name="submit" class="btn btn-primary offset4">Save changes</button>
           </form>
        </div><!-- /span10 -->       
	</div><!-- /row -->
        
</div><!-- /container -->
