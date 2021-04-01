<?PHP

namespace Controllers;

use MVC\Router;

class PaginasController{

public static function admin(Router $router){

    $router->render('admin', [
        'hola' => 'hola'
    ]);
    
}

public static function index(Router $router){
    echo 'hola';
}

}