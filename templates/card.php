   <!-- <img src= "./assets/images/"> -->
   <div class="card-body">
       <h4 class="card-title"><?php echo $article['title'] ?> </h4>
       <h5 class="card-title">Catégorie : <?php echo $article['label'] ?> </h5>
       <p class="card-text"> <?php echo substr($article['title'], 0, 25) ?></p>
       <!-- <button class="btn btn-primary" target="_blank">Article</button> -->
       <a href="./single.php?key=<?php echo $article['id']; ?>" class="btn btn-primary" target="_blank">Lire l'article</a>
   </div>