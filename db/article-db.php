<?php
require_once("db/pdo.php");

function getArticles() {
    global $pdo; // toujours présent
    $sql = 'SELECT * FROM article';
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

function getArticleById(int $id) {
    global $pdo;
    $sql = 'SELECT * FROM article WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);
}
    ?>