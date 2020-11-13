<?php
use App\Classes\Router;
use App\Controllers\RecipesController;
use App\Controllers\UsersController;
use App\Controllers\LinksController;
use App\Controllers\IngredientsController;

require_once '../vendor/autoload.php';

session_start();

$router = new Router();

$router->add('/', [RecipesController::class,'display']);
$router->add('/admin/recipes/index',[RecipesController::class,'index']);
$router->add('/admin/recipes/create',[RecipesController::class,'create']);
$router->add('/admin/recipes/edit/([0-9]*)',[RecipesController::class,'edit']);
$router->add('/admin/recipes/read/([0-9]*)',[RecipesController::class,'read']);
$router->add('/admin/recipes/save',[RecipesController::class,'save'],'post');
$router->add('/admin/recipes/update/([0-9]*)',[RecipesController::class,'update'],'post');
$router->add('/admin/recipes/delete/([0-9]*)',[RecipesController::class,'delete']);
$router->add('/admin/ingredients/index',[IngredientsController::class,'index']);
$router->add('/admin/ingredients/create',[IngredientsController::class,'create']);
$router->add('/admin/ingredients/edit/([0-9]*)',[IngredientsController::class,'edit']);
$router->add('/admin/ingredients/read/([0-9]*)',[IngredientsController::class,'read']);
$router->add('/admin/ingredients/save',[IngredientsController::class,'save'],'post');
$router->add('/admin/ingredients/update/([0-9]*)',[IngredientsController::class,'update'],'post');
$router->add('/admin/ingredients/delete/([0-9]*)',[IngredientsController::class,'delete']);
$router->add('/admin/links/index',[LinksController::class,'index']);
$router->add('/admin/links/create',[LinksController::class,'create']);
$router->add('/admin/links/edit/([0-9]*)',[LinksController::class,'edit']);
$router->add('/admin/links/read/([0-9]*)',[LinksController::class,'read']);
$router->add('/admin/links/save',[LinksController::class,'save'],'post');
$router->add('/admin/links/update/([0-9]*)',[LinksController::class,'update'],'post');
$router->add('/admin/links/delete/([0-9]*)',[LinksController::class,'delete']);
$router->add('/admin/users/index',[UsersController::class,'index']);
$router->add('/admin/users/create',[UsersController::class,'create']);
$router->add('/admin/users/edit/([0-9]*)',[UsersController::class,'edit']);
$router->add('/admin/users/read/([0-9]*)',[UsersController::class,'read']);
$router->add('/admin/users/save',[UsersController::class,'save'],'post');
$router->add('/admin/users/update/([0-9]*)',[UsersController::class,'update'],'post');
$router->add('/admin/users/delete/([0-9]*)',[UsersController::class,'delete']);
$router->add('/recipes/([a-zA-Z0-9-]*)',[RecipesController::class,'read']);
$router->add('/advanced-search',[RecipesController::class,'advancedSearch']);
$router->add('/advanced-search',[RecipesController::class,'advancedSearch'], 'post');
$router->add('/search',[RecipesController::class,'search']);
$router->add('/login',[UsersController::class,'login']);
$router->add('/login',[UsersController::class,'login'], 'post');
$router->add('/logout',[UsersController::class,'logout']);

$router->run();
