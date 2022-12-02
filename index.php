<?php

require_once("config.php");
require_once("core\Autoload.php");
use core\Auth;
use core\Router;
use core\DB;

$router = new Router();
// Admin

$router->get('admin/productos', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->productos();
});
 $router->get('admin/index', function(){ 
   Auth::isAdmin();
    (new controllers\UsersController)->index();
   
});
$router->get('admin/ordenesCompra', function($params){ 
    Auth::isAdmin();
    (new controllers\ordenController)->adminOrdenCOmpra($params);
});

$router->post('admin/actualizarOrden/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\ordenController)->actualizarOrden($params['id']);
});
$router->get('/admin', function(){ 
    Auth::isAdmin();
    (new controllers\ProductosController)->index();                                                                                     
});
$router->get('admin/users', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->index();                                                                                     
});
$router->get('admin/users/agregar', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->agregar();                                                                                     
});
$router->post('admin/users/agregar', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->agregar();
});
$router->post('admin/editarAdmin', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->editar();
});
$router->get('admin/editarAdmin', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->editar();
});
$router->get('admin/users/editarAdmin/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\UsersController)->editar($params['id']);
});

$router->get('admin/users/eliminar/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\UsersController)->eliminar($params['id']);
});
$router->get('admin/usuarios', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->usuarios();

});
$router->get('admin/estadistica', function(){ 
    Auth::isAdmin();
    (new controllers\UsersController)->estadistica();

});


$router->get('admin/productos/editar/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\ProductosController)->editar($params['id']);
});
$router->get('admin/productos/eliminar/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\ProductosController)->eliminar($params['id']);
});

$router->post('admin/productos/guardar/{id}', function($params){ 
    Auth::isAdmin();
    (new controllers\ProductosController)->guardar($params['id']);
    
});
$router->get('admin/productos/agregar', function(){ 
    Auth::isAdmin();
(new controllers\ProductosController)->agregar();
});

$router->post('admin/productos/agregar', function($params){ 
    Auth::isAdmin();
(new controllers\ProductosController)->agregar($params);
});


// Carrito
$router->get('carrito', function(){ 
    Auth::check();
    (new controllers\CarritoController)->index();
});

$router->post('carrito/agregar/{id}', function($params){ 
   Auth::check();
    (new controllers\CarritoController)->agregar($params['id']);
});
$router->get('carrito/eliminar/{id}', function($params){ 
    Auth::check();
    (new controllers\CarritoController)->eliminar($params['id']);
});
$router->get('carrito/editar/{id}', function($params){ 
    Auth::check();
    (new controllers\CarritoController)->editar($params['id']);
});

$router->get('carrito/finalizarCompra/{id}', function($params){ 
    Auth::check();
    (new controllers\CarritoController)->finalizarCompra($params['id']);
});
$router->get('carrito/finalizarCompra/', function($params){ 
    Auth::check();
    (new controllers\CarritoController)->finalizarCompra($params);
});
$router->get('carrito/pagar/', function(){ 
    Auth::check();
    (new controllers\CarritoController)->pagar();
});

$router->post('productos/search/', function(){ 
    (new controllers\ProductosController)->search();
});

$router->get('login', function(){ 
    (new controllers\UsersController)->login();
   
});
$router->post('login', function(){ 
    (new controllers\UsersController)->login();
});
$router->get('logout', function(){ 
    (new controllers\UsersController)->logout();
});
$router->get('registrar/nuevoUsuario', function(){ 
    (new controllers\UsersController)->agregarNuevoUsuario();
});
$router->post('registrar/nuevoUsuario', function($params){ 
    (new controllers\UsersController)->agregarNuevoUsuario($params);
});
$router->get('Users/userPlace', function(){ 
    Auth::check();
    (new controllers\UsersController)->userPlace();
});
$router->post('Users/editarUser', function(){ 
    Auth::check();
    (new controllers\UsersController)->editar();
});
$router->get('Users/editarUser', function(){ 
    Auth::check();
    (new controllers\UsersController)->editar();
});
$router->get('Users/editarRegistro', function(){ 
    Auth::check();
    (new controllers\UsersController)->editarRegistro();
});

$router->post('Users/editarRegistro', function(){ 
    Auth::check();
    (new controllers\UsersController)->editarRegistro();
});
$router->get('Users/mostrarDatos', function(){ 
    Auth::check();
    (new controllers\UsersController)->mostrarDatos();
});

$router->get('Users/ordenCompra/index', function(){ 
    Auth::check();
    (new controllers\ordenController)->index();
});

$router->get('Users/ordenCompra/generarOrden', function(){ 
    Auth::check();
    (new controllers\ordenController)->generarOrden();
});
$router->post('Users/ordenCompra/generarOrden', function($params){ 
    Auth::check();
    (new controllers\ordenController)->generarOrden($params);
});

$router->get('admin/Users/ordenCompra/index', function(){ 
    Auth::check();
    (new controllers\ordenController)->index();
});
//-------------------
$router->get('index', function(){ 
    (new controllers\UsersController)->index();
});

$router->get('', function($params){ 
    (new controllers\HomeController)->index();
});

$router->get('productos/detalle/{id}', function($params){ 
   Auth::check();
    (new controllers\ProductosController)->detalle($params['id']);
});

$router->notFound(function(){ 
    require_once("./views/404.php");
});

$router->run();



