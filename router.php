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
    $authController = new AuthController();

    switch($params[0]){
        case 'home':
            $homeController->showHome();
            break;
        case'movies':
            $moviesController->showMovies();
            break;
        case'movie':
            $moviesController->showOneMovie($params[1]);
            break;
        case'genre':
            $genresController = new GenresController();
            $genresController->showGenre($params[1]);
            break;
        case 'login':
            $authController->viewForm();
            break;
        case "autherr":
            $authController->viewFormAndError($params[1]);
            break;
        case "validate":
            $authController->validateData();
            break;
        case "logout":
            $authController->logout();
            break;
        case "logged":
            $authController->checkLoggedIn();
            $authController->showLoginByUser();
            break;
        case "admin":
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
        case "delete_movie":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->deleteMovie($params[1]);
            break;
        case "delete_genre":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->deleteGenre($params[1]);
            break;
        case "formeditmovie":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->showEditForm($params[1]);
            break;
        case "formeditgenre":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->showEditForm($params[1]);
            break;
        case "warning_edit_genre":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->showWarning("esta seguro que desea editar este genero? se editara en todas las peliculas del mismo.", "edit_genre/$params[1]/". $_POST['genre'] . "/" . $_POST['isatp'], "genre/$params[1]");
            break;
        case "warning_delete_genre":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->showWarning("esta seguro que desea borrar este genero? se borraran todas las peliculas del mismo.", "delete_genre/$params[1]", "genre/$params[1]");
            break;
        case "edit_movie":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->editMovie($params[1]);
            break;
        case "edit_genre":
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->editGenre($params[1], $params[2], $params[3]);
            break;
        case "buy":
            $authController->checkLoggedIn();
            $sellController = new SellController();
            $sellController->addSell($params[1], $params[2]);
            break;
        case 'outofstock':
            $moviesController->showOneMovie($params[1], "lo siento, no hay stock disponible");
            break;
        case 'compra_realizada':
            $authController->checkLoggedIn();
            $sellController = new SellController();
            $sellController->viewCompra($params[1]);
            break;
        case 'add_movie':
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $moviesController = new MoviesController();
            $moviesController->addMovie();
            break;
        case 'add_genre':
            $authController->checkLoggedIn();
            $authController->checkAdmin();
            $genresController = new GenresController();
            $genresController->addGenre();
            break;
        default:
            echo "error 404";
            break;
        }
    