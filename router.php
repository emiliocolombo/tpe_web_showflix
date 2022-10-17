<?php
include_once "app/controllers/movies.controller.php";
include_once "app/controllers/home.controller.php";
include_once "app/controllers/auth.controller.php";
include_once "app/controllers/genres.controller.php";
include_once "app/controllers/admin.controller.php";
include_once "app/controllers/user.controller.php";
include_once "app/controllers/sell.controller.php";
include_once "app/helpers/auth.helper.php";


// relllenar toda la tabla de stock de peliculas
// y terminar funcionalidad de comprar pelicula, ya esta hecho el
// control de stock antes de comprarlo, habria q agregar la venta
// a la tabla de la db

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_REQUEST['action'])){
        $action = $_REQUEST['action'];
    }
    else{
        $action = 'home';
    }

    $params = explode("/", $action);
    $moviesController = new MoviesController();
    $homeController = new HomeController();

    switch($params[0]){
        case 'home':
            $authHelper = new AuthHelper();
            $homeController->showHome();
            break;
        case'movies':
            $authHelper = new AuthHelper();
            $moviesController->showMovies();
            break;
        case'movie':
            $authHelper = new AuthHelper();
            $moviesController->showOneMovie($params[1]);
            break;
        case'genre':
            $authHelper = new AuthHelper();
            $genresController = new GenresController();
            $genresController->showGenre($params[1]);
            break;
        case 'login':
            $authController = new AuthController();
            $authController->viewForm();
            break;
        case "autherr":
            $authController = new AuthController();
            $authController->viewFormAndError($params[1]);
            break;
        case "validate":
            $authController = new AuthController();
            $authController->validateData();
            break;
        case "logout":
            $authController = new AuthController();
            $authController->logout();
            break;
        case "logged":
            $authController = new AuthController();
            $authController->checkLoggedIn();
            $authController->showLoginByUser();
            break;
        case "admin":
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $adminController = new AdminController();
            $adminController->showAdminForm();
            break;
        case "register":
            $userController = new UserController();
            $userController->showRegister();
            break;
        case "add_user":
            $userController = new UserController();
            $userController->checkEmail();
            $userController->insertUser();
            break;
        case "registererr":
            $userController = new UserController();
            $userController->showRegister("el email ya esta registrado");
            break;
        case "delete":
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->deleteMovie($params[1]);
            break;
        case "formedit":
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->showEditForm($params[1]);
            break;
        case "edit":
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->editMovie($params[1]);
            break;
        case "buy":
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $sellController = new SellController();
            $sellController->addSell($params[1], $params[2]);
            break;
        case 'outofstock':
            $authHelper = new AuthHelper();
            $moviesController->showOneMovie($params[1], "lo siento, no hay stock disponible");
            break;
        case 'compra_realizada':
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $sellController = new SellController();
            $sellController->viewCompra($params[1]);
            break;
        case 'add_movie':
            $authController = new AuthHelper();
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->addMovie();
            break;
        default:
            echo "error 404";
            break;
        }
    