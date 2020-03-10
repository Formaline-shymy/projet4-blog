<!DOCTYPE html>
<html>
    <head>
    <title>Blog Jean Forteroche</title>
    <meta charset="UTF-8" />
    <base href="<?= $racineWeb ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="Public/css/style.css"> 
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
   integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
   <link rel="icon" type="image/jpg" href="Public/images/icona1.png" sizes="32x32"/>
   <meta name="description" content="Nouveau roman en ligne: Billet simple pour Alaska via un blog." />

  
 </head>
  
  <body>
    <div id="global">
      <?php	
        require_once('front/header.php');
      ?>
       <div id="content">
         <?= $content ?>
      </div> 
    </div> <!-- #global -->

      <?php 
      require_once('front/footer.php');
      ?>
  </body>
</html>

