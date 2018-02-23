var MP = require("mercadopago");
var mp new MP(1731047847332749, "mpnd6y6vE73SLPbwv7lNlD8dIOBrZuOL");
 mp.getAccessToken(function(err, accessToken) {
  console.log(accessToken);
});
