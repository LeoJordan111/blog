<form method="post">
    <label for="title">Le titre de votre <?php echo $text ?>:</label><br><br>
    <input type="text" name="name" id="title" placeholder="titre" required><br><br>

    <label for="message">Le contenu de votre <?php echo $text ?>:</label><br><br>
    <textarea placeholder="Exprimez-vous" name="message" required></textarea><br><br>
    <button class="btn btn-primary" type="submit">Envoyer</button>
</form>