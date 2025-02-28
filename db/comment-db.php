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


// Fonction pour créer un commentaire avec 3 paramètres (les 3 variables)
function createComments($content, $author, $id) { // mettre : bool avant { pour que la fonction retroune un boolean
    global $pdo; // toujours présent
    $sql = "INSERT INTO `comment`(`content`, `created_at`, `article_id`, `author`) VALUES (:content, NOW(), :id, :author)";
    $stmt = $pdo->prepare($sql); // toujours présent
    $stmt->execute([
        ':content' => $content,
        ':author' => $author,
        ':id' => $id
    ]);
}