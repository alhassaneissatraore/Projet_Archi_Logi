<?php

require_once 'models/Article.php';

class ArticleController {
    private $articleModel;

    public function __construct($db) {
        $this->articleModel = new Article($db);
    }

    public function index() {
        $category = isset($_GET['categorie']) ? $_GET['categorie'] : '';
        $articles = $this->articleModel->getArticlesByCategory($category);
        include 'views/articles.php';
    }
}
?>
