<?php
require_once 'config/Database.php';
require_once 'controllers/StudentController.php';
require_once 'models/Student.php';

$database = new Database();
$db = $database->connect();

$controller = new StudentController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch($action) {
    case 'add':
        $controller->add();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}