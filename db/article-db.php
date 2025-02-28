<?php
require_once("db/pdo.php");

function getArticles() {
    global $pdo; // toujours présent
    $sql = 'SELECT a.*, c.label FROM article as a JOIN category as c ON a.category_id = c.id';
    // $sql = 'SELECT * FROM article';
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute();

    // on fech ou fetchAll pour la lecture de données
    return $stmt->fetchAll();
}

function getArticleById(int $id) {
    global $pdo;
    $sql = 'SELECT a.*, c.label FROM article as a JOIN category as c ON a.category_id = c.id WHERE a.id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);
    return $stmt->fetch();
}

function get3Articles() {
    global $pdo; // toujours présent
    $sql = 'SELECT a.*, c.label FROM article as a JOIN category as c ON a.category_id = c.id ORDER BY a.id DESC LIMIT 3';
    // $sql = 'SELECT * FROM article';
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute();

    // on fech ou fetchAll pour la lecture de données
    return $stmt->fetchAll();
}

function getArticlesOrderByTitle() {
    global $pdo; // toujours présent
    $sql = 'SELECT * FROM article ORDER BY title DESC';
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute();

    // on fech ou fetchAll pour la lecture de données
    return $stmt->fetchAll();
}

function getArticlesByCategory() {
    global $pdo;
    $sql = 'SELECT * FROM article';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

// Fonction pour créer un article avec 3 paramètres (les 3 variables)
function createArticle($title, $content, $categoryid) { // mettre : bool avant { pour que la fonction retroune un boolean
    global $pdo; // toujours présent
    $sql = "INSERT INTO `article`(`title`, `content`, `category_id`) VALUES (:title, :content, :categoryid)";
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute([
        ':title' => $title,
        ':content' => $content,
        ':categoryid' => $categoryid
    ]);
}
    ?>