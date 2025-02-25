
<?php
include("templates/header.php");
?>

<h1>Archive</h1>

<?php
    $article = getArticles();
    // pour chaque article --> for each
    
?>

<!-- Faire une boucle sur toutes les card (1 card = 1 article) -->



<div class="row">

    <div class="col-lg-4 col-md-6">
        <div class="card">
            <!-- <img src= "./assets/images/"> -->
                <div class="card-body">
                <h5 class="card-title"> titre </h5>
                <p class="card-text"> resume </p>
                <a href="./single.php" class="btn btn-primary" target="_blank">Article</a>
            </div>
        </div>
    </div>

</div>


<?php
include("templates/footer.php");
?>