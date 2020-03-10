<?php $this->title = "Blog Jean Forteroche"; ?>

<div class= news> 
            <p> Nouveau roman en ligne: Billet simple pour Alaska</p>
</div> 
        


  <?php foreach ($posts as $post): ?>
    
    <div class="postBlock"> 
         <a href="<?= "post/index/" . $this->clean($post['id']) ?>">
         <p class="titlePost">
             <?= $this->clean($post['title']) ?>
        </p></a> 
           
         <p class="timePost">   
            <time><?= $this->clean($post['date']) ?></time>
        </p>
        <!-- <p class="textPost"><?= $this->clean($post['content']) ?>
        </p> -->
        

        <div class="footPost">
        <?= substr_replace($post['content'], "...", 480);?> 
        <a href="<?= "post/index/" . $this->clean($post['id']) ?>">Lire la suite</a>

       
        </div>
        <hr class="style-one">
    </div> 
    
       <?php endforeach; ?>

       
