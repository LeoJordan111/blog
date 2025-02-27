<?php
require_once("db/pdo.php");

function getComments(int $id) {
    global $pdo; // toujours présent
    $sql = 'SELECT * FROM comment WHERE article_id = :id';
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute([
        ':id' => $id
    ]);

    // on fech ou fetchAll pour la lecture de données
    return $stmt->fetchAll();
}