<?php

require_once '../../vendor/autoload.php';

use App\routes\Router;

$router = new Router();

$router->setRoutes([
    'GET' => [
        'details' => ['DetailsController', 'details'],
        'signup' => ['AuthController', 'signup'],
        'signin' => ['AuthController', 'login'],
<<<<<<< HEAD
        'view' => ['MessageController', 'view'],
        'profil'=>['UserController', 'profil'],
=======
        'viewChat' => ['MessageController', 'viewChat'],
>>>>>>> 5312a7bce068b21c52a1c2404a281b45748b7e59
    ],
    'POST' => [
        'submit' => ['DetailsController', 'save'],
        'details' => ['CommentsController', 'saveComment'],
        'signup' => ['AuthController', 'registerUser'],
        'signin' => ['AuthController', 'authenticateUser'],
        'addMessage' => ['MessageController', 'addMessage'],
        ],
]);

if (isset($_GET['url'])) {
    $uri = trim($_GET['url'], '/');
    
    $methode = $_SERVER['REQUEST_METHOD'];

    try {
        $route = $router->getRoute($methode, $uri);

        if ($route) {
            list($controllerName, $methodName) = $route;

            $controllerClass = 'App\\controllers\\' . ucfirst($controllerName);

            $controller = new $controllerClass();

            if ($methodName) {
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                } else {
                    throw new Exception('Method not found in controller.');
                }
            } else {
                $controller->index();
            }
        } else {
            throw new Exception('Route not found.');
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}