<?php
require_once("db/article-db.php");
$articles = get2Articles();
include("templates/header.php");
?>

<h1> Home </h1>

<?php
include("templates/slide.php");
?>

<div class="row">
    <?php
    foreach ($articles as $key => $article): ?>
        <div class="col-lg-4 col-md-6" style="margin-bottom:10px">
            <div class="card">
                <?php include("templates/card.php"); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<a href="./contact.php" target="_blank">Contact</a>

<?php
include("templates/footer.php");
?>