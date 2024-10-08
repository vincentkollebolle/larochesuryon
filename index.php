<?php 
//preparation des librairies 
include 'vendor/autoload.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// load and initialize any global libraries
require_once 'model/model.php';
require_once 'model/Contact.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/index.php' === $uri) {
    require_once 'controller/indexController.php';
} elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
    require_once 'controller/showController.php';
} elseif ('/index.php/pdf' === $uri) {
    require_once 'controller/pdfController.php';
} elseif ('/index.php/excel' === $uri) {
    require_once 'controller/excelController.php';
} elseif ('/index.php/addform' === $uri) {
    require_once 'controller/ajouterController.php';
} elseif ('/index.php/ajax' === $uri) {
    header('Content-Type: application/json');
    echo json_encode(["fruit1","fruit2","fruit3"]);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}