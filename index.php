<?php
require_once 'db/db_connect.php';
require_once 'controllers/ArticleController.php';

$articleController = new ArticleController($conn);
$articleController->index();
?>
