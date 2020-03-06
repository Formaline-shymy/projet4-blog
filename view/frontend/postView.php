<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon blog!</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<p><strong>Laisser un commentaire</strong></p>
<p><strong>Vous devez <a href= admin/connexion.php> être connecté</a> pour publier un commentaire.</strong></p>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>        
       
        <label for="author">Auteur :</br></label></br>
        <input type="text" name="author" id="author" required />
    </div>      
    <div>    
            <label for="comment"></br>Commentaire : </label></br>
            <textarea name="comment" id="comment"rows="4" cols="22" required></textarea></br>
    </div>
    <div>
            <input type="submit" value="Envoyer" />
    </div>
        </form>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
