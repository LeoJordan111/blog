<!-- ./traitement.php -->


<form action="" method="post"> 
    <label for="author">Votre prénom et nom :</label><br><br>
    <input type="text" name="author" id="author" placeholder="Prénom Nom" required><br><br>

    <label for="content">Le contenu de votre commentaire:</label><br><br>
    <textarea placeholder="Exprimez-vous" name="content" required></textarea><br><br>
    

    <input type="hidden" name="article_id" id="article_id" value=<?=$id?>>

    <button class="btn btn-primary" type="submit">Envoyer</button>

</form>