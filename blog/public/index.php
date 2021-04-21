<?php

use Router\Router;

require "../vendor/autoload.php";

define('ROOT', str_replace('public/index.php', '', $_SERVER['PHP_SELF']));
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'blog');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@accueil'); 
$router->get('/articles', 'App\Controllers\BlogController@index'); 

$router->get('/articles/:id', 'App\Controllers\BlogController@show');
$router->post('/articles/:id', 'App\Controllers\BlogController@showPost');


$router->get('/categorie/:id', 'App\Controllers\BlogController@tag');

$router->get('/inscription', 'App\Controllers\UserController@register');
$router->post('/inscription', 'App\Controllers\UserController@registerPost');

$router->get('/connexion', 'App\Controllers\UserController@login');
$router->post('/connexion', 'App\Controllers\UserController@loginPost');

$router->get('/profil/:id', 'App\Controllers\UserController@editProfil');
$router->post('/profil/:id', 'App\Controllers\UserController@updateProfil');

$router->get('/logout', 'App\Controllers\UserController@logout');

$router->get('/admin', 'App\Controllers\Admin\PostController@index');
$router->get('/admin/creer-article', 'App\Controllers\Admin\PostController@create');
$router->post('/admin/creer-article', 'App\Controllers\Admin\PostController@createPost');

$router->get('/admin/creer-categorie', 'App\Controllers\Admin\PostController@createCategorie');
$router->post('/admin/creer-categorie', 'App\Controllers\Admin\PostController@createCategoriePost');

$router->get('/admin/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/edit/:id', 'App\Controllers\Admin\PostController@update');
$router->post('/admin/delete/:id', 'App\Controllers\Admin\PostController@destroy');

$router->get('/admin/edit/categorie/:id', 'App\Controllers\Admin\PostController@editCategorie');
$router->post('/admin/edit/categorie/:id', 'App\Controllers\Admin\PostController@updateCategorie');
$router->post('/admin/delete/categorie/:id', 'App\Controllers\Admin\PostController@destroyCategorie');

$router->get('/admin/edit/user/:id', 'App\Controllers\Admin\PostController@editUser');
$router->post('/admin/edit/user/:id', 'App\Controllers\Admin\PostController@updateUser');
$router->post('/admin/delete/user/:id', 'App\Controllers\Admin\PostController@destroyUser');


try {
    $router->run();
} catch(Exception $e){
    echo $e->getMessage();
}
