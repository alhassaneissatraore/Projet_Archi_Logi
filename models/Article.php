<?php

class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getArticlesByCategory($category = '') {
        $sql = "SELECT Article.titre, Article.contenu, Categorie.libelle 
                FROM Article 
                JOIN Categorie ON Article.categorie = Categorie.id";

        if ($category) {
            $sql .= " WHERE Categorie.libelle = :category";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        } else {
            $stmt = $this->conn->prepare($sql);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
