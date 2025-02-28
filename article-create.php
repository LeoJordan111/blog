
<?php
    require_once("db/category-db.php");
    $articles = getCategory();
    include("templates/header.php");
?>

<h1>Formulaire création d'un article</h1>

<form action="./traitement.php" method="post">
<div class="mb-3">
  <label for="category" class="form-label">Le titre de votre article :</label>
  <input type="text" class="form-control" name="title" id="title" placeholder="titre" required style=width:15%;>
</div>
<div class="mb-3">
  <label for="content" class="form-label">Le contenu de votre article :</label>
  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Exprimez-vous" required></textarea>
</div>
    <p>
        <label for="category">Quelle est la catégorie de votre article ?</label><br>
        <select class="form-select" name="category" id="category" aria-label="Default select example" style=width:15%;>
            <?php foreach ($articles as $key => $article): ?>
                <option value= <?php echo $article['id']; ?>><?php echo $article['label']; ?></option>
            <?php endforeach; ?>

        </select>
    </p>

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>


<?php   
    include("templates/footer.php");
?>