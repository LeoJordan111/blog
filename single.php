<?php
require_once("db/article-db.php");
require_once("db/comment-db.php");
$id = $_GET['key'];
$articles = getArticleById($id);
$comments = getComments($id);

include("templates/header.php");
?>
<br><br>
<h1>Single article</h1>
<br><br>
<div class="row">
    <div class="col-lg-4 col-md-6" style="margin-bottom:10px">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $articles['title']; ?></h4>
                <h5 class="card-title">Catégorie : <?php echo $articles['label']; ?></h5>
                <p class="card-text"><?php echo $articles['content']; ?></p>
                <!-- <a href="./single.php" class="btn btn-primary" target="_blank">Article</a> -->
            </div>
        </div>
    </div>
</div>
<br><br>
    <p>Commentaires</p>
        <?php
        foreach ($comments as $key => $comment): ?>
        <p><?php echo $comment['author']; ?> : <?php echo $comment['content']; ?></p>
        <?php endforeach; ?>
    <p></p>
<br><br>
<a href="./contact.php" target="_blank">Contact</a>
<br><br>
<?php
$text = "commentaire";
include("templates/form.php");
include("templates/footer.php");
?>