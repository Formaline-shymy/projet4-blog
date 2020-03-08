<?php $this->title = "Blog Jean Forteroche"; ?>
<div class="row">
    <h1 class="titlePost"><?= $this->clean($post['title']) ?></h1>
    <p><a href="http://localhost/blogJF/index.php">Retour à la liste des billets</a></p>
   
    <time><?= $this->clean($post['date']) ?></time>
  </header>
  <p><?= $this->clean($post['content'] )?></p>
</div>

<hr />

  <h1 id="titleComments">Commentaires à <?= $this->clean ($post['title'] )?></h1>
  <?php if ($this->clean($nbComment) >= 1) { ?>

<?php foreach ($comments as $comment): ?>
  <p><?=$this->clean($comment['author']) ?> écrit :  <?=$this->clean($comment['content']) ?></p>
<?php endforeach; ?>
<?php } else { ?>
                <p>
                        <span>
                            Il n'y a pas encore de commentaire ...
                        </span>
                </p>
            <?php } ?>
        </div>

<form method="post" action="index.php?action=remark">
    <input id="author" name="author" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtComment" name="content" rows="4" cols="22" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $post['id'] ?>" />
    <input type="submit" value="Envoyer" />
</form>


