// JavaScript Document
$(document).ready(function(e) {
 
 	$('#from').datepicker();
	$('#to').datepicker();
	$('#topUp').datepicker(); 
 
	
});


/**
 *Функция получения балланса карты
 * @param id карты 
 * @return в случае успеха обновится показатель балланса и дата обновления балланса
 */
 function getCardBallance(cardId){
    
    
	$.ajax({
		type:'POST',
		async:false,
		url: "/ajax/get_ballance/" + cardId ,
		dataType:"json",
		success: function(data){
			if(data['success']){
				
				alert('Балланс карты: ' + data['card_ballance'] +"€"  );
				var sel_date = "#date_"+ cardId;
				var sel_ball = "#ball_"+ cardId;
				$(sel_date).html(data['date']);
				$(sel_ball).html(data['card_ballance']+ '€');
				//console.log($(sel_ball).html());
				return false;
			
			}
			else{
				alert('Номер несуществует или неправильно записан!');
				return false;
			}
			
			
		}
			
	});
	
	

}


