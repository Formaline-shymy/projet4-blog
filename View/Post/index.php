<?php $this->title = "Blog Jean Forteroche"; ?>

<p class="linkback">
  <a href="http://localhost/blogJF/index.php">Retour à la liste des billets</a>
</p><br/>

<p class="titlePost">
    <?= $this->clean($post['title']) ?>
</p>

<p class="timePost">   
    <time><?= $this->clean($post['date']) ?></time>
</p>

  <p><?= $this->clean($post['content'] )?></p>


  <hr class="style-one">
  <p class="titleComments">Commentaires à <?= $this->clean ($post['title'] )?></p>

<?php foreach ($comments as $comment): ?>
  <p><?=$this->clean($comment['author']) ?> écrit :  <?=$this->clean($comment['content']) ?></p>
<?php endforeach; ?>


<form method="post" action="index.php?action=remark">
    <input id="author" name="author" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtComment" name="content" rows="4" cols="22" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $post['id'] ?>" />
    <input type="submit" value="Envoyer" />
</form>


