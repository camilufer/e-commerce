// token APP_USR-6333194110187937-022319-3f96a543a10844c26799048ec6ccde8a__D_F__-66755856
// https://api.mercadopago.com/users/303963951/mercadopago_account/balance?access_token=APP_USR-3161981920499652-022320-6d85934c69559962fc923ac3b7b68ae0__M_H__-303963951
// https://api.mercadopago.com/users/30

var MP = require ("mercadopago");
var mp = new MP ("3161981920499652", "BZd641UsIgZmfZ1iCJqdrvCWD3s5b5qs");
mp.getAccessToken(function (err, accessToken){
	console.log (accessToken);
});
