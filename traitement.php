
<?php
 require_once("db/article-db.php");


if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    createArticle($title, $content, $category);
}

var_dump($_POST['title']);
var_dump($_POST['category']);


header("location:./index.php");