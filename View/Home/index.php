<?php $this->title = "Blog Jean"; ?>
<div class="row">
  <?php foreach ($posts as $post): ?>
   
    <div class="postBlock"> 
         <a href="<?= "post/index/" . $this->clean($post['id']) ?>">
         <p class="titlePost">
             <?= $this->clean($post['title']) ?>    
         </a> 
         <br/>      
            <time><?= $this->clean($post['date']) ?></time>
            <p class="textPost"><?= $this->clean($post['content']) ?>
        </p>

        <div class="footPost">
       <a href="<?= "post/index/" . $this->clean($post['id']) ?>">Lire la suite</a>
        </div>
    </div> 
    <hr>
       <?php endforeach; ?>
</div>
       
