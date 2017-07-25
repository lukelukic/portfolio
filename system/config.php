<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASE_URL', 'http://localhost/portfolio/');

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    $file = $_SERVER["DOCUMENT_ROOT"] . '/' . $file;
    if (file_exists($file)) {
        if (is_readable($file)) {
            require_once $file;
        } else {
            require_once 'Errors/403.php';
        }
    } else {
        require_once 'Errors/404.php';
    }
});

/*---------------------Funckija za redirekciju----------------*/
function redirect($path)
{
    header("Location: " . BASE_URL . $path);
}
session_start();

$flashCount = 0;
if (isset($_SESSION['flash'])) {
    $flashCount>1? session_unset($_SESSION['flash']) : $flashCount++;
}
