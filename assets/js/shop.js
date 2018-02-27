// token APP_USR-3161981920499652-022320-6d85934c69559962fc923ac3b7b68ae0__M_H__-303963951
//https://api.mercadopago.com/users/303963951/mercadopago_account/balance?access_token=APP_USR-3161981920499652-022413-3c7732b20924fa208626ce5df1fb1841__LA_LC__-303963951

// https://api.mercadopago.com/users/30
$('#pagar').click(function(){
	const busqueda = $('#busqueda').val();
	$.ajax({
        url: `https://api.mercadopago.com/users/303963951/mercadopago_account/balance?access_token=APP_USR-3161981920499652-022413-3c7732b20924fa208626ce5df1fb1841__LA_LC__-303963951#json`,
		type: 'GET',
		datatype: 'json',
		success: function(results){
			console.log(results);
	}
	})
	.done(response)
	.fail(error);
	function response(data) {
    $('#info').empty();
    const id = data.user_id;
    const totalamount = data.total_amount;
   
    $('#contenedor').empty();
    $('#info').append(`<div class="contenedor"><p class="amount">amount: ${id}</p><p class="balance">balance: ${totalamount}</p></div>`);
   

}
function error(){
    alert('Error')
  }
});

