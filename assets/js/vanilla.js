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
