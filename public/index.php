<?php

// -----------------------------------------------------
// + Importing Classes
// -----------------------------------------------------
use App\Controller\Home;
use App\Controller\Test;
use App\Model\HomeModel;
use Effernet\Core\Application\Run;
use Effernet\Core\Auth\LoginControl;
use Effernet\Core\Router\Router;


// -----------------------------------------------------
// + Require Autoload File
// -----------------------------------------------------
require_once "../vendor/autoload.php";


// -----------------------------------------------------
// + Root Path
// -----------------------------------------------------
define("ROOT_DIR", dirname(__DIR__));


// -----------------------------------------------------
// + Calling Application Class
// -----------------------------------------------------
$run = new Run();

// -----------------------------------------------------
// + Login Control
// -----------------------------------------------------


// -----------------------------------------------------
// + Routes
// -----------------------------------------------------
$run->router->get("/", [Home::class, "index"]);
$run->router->get("/user", [Home::class, "user"]);

// Test ---
$run->router->get("/test", [Test::class, "index"]);


// -----------------------------------------------------
// + Run Application
// -----------------------------------------------------
$run->startApp();

