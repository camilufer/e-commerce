'use strict';
//https://drive.google.com/uc?authuser=0&id=1KeXQ18oOS_4WZ-5QWwZHiPAwmbxNhLDZ&export=download
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
//comentarios
$(function(){
  $.getJSON('https://raw.githubusercontent.com/MrsPepa/e-commerce/master/js/data.json', function(data){
    console.log(data);
    const categorias = [];
    for(let i = 0; i < data.length; i++) {
      [i].push(categorias);
    }
  })
})

/*fetch(
 'https://raw.githubusercontent.com/MrsPepa/e-commerce/master/js/data.json')
 .then(function(response) {
   console.log(response);
   return response.json();
 })
 .then(function(miJson){
   console.log("JSON > "+JSON.stringify(miJson));
 })
 .catch(function(error){
   console.log('error : '+JSON.stringify(error)+" "+error.stack);
 })*/
