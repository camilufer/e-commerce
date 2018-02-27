'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('decoracion', 'decoracion.html', true),
          new Route('deportes', 'deportes.html'),
          new Route('accesorios', 'accesorios.html'),
          new Route('juegos', 'juegos.html'),
          new Route('login', 'login.html'),
          new Route('registro', 'registro.html')
        ]);
    }
    init();

}());

fetch(
 'http:/localhost/mercado/data.json')
 .then(function(response) {
   console.log(response);
   return response.json();
 })
 .then(function(miJson){
   console.log("JSON > "+JSON.stringify(miJson));
 })
 .catch(function(error){
   console.log('error : '+JSON.stringify(error)+" "+error.stack);
 })
