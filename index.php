<?php
include("templates/header.php");
?>

<h1> Home </h1>

<?php
include("templates/slide.php");
?>

<div class="row">
    <?php
    $content = "Résumé";
    for ($i = 1; $i < 7; $i++): ?>
        <div class="col-lg-4 col-md-6" style="margin-bottom:10px">
            <div class="card">
                <?php include("templates/card.php"); ?>
            </div>
        </div>
    <?php endfor; ?>
</div>

<a href="./contact.php" target="_blank">Contact</a>

<?php
include("templates/footer.php");
?>