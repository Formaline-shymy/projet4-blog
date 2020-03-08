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
    
    </head>
    <body>
        <div id="global">
           <!--Navbar-->
<nav class="navbar mb-4">

<!-- Navbar brand -->
<h1 id="titreBlog">
<a class="navbar-brand" href="http://localhost/blogJF/index.php">Blog Jean Forteroche </a></h1>

<!-- Collapse button -->
<button class="navbar-toggler " type="button" data-toggle="collapse"
  data-target="#navbarSupportedContent41" aria-controls="navbarSupportedContent41" aria-expanded="false"
  aria-label="Toggle navigation"><span class="white-text"><i class="fas fa-bars fa-1x"></i></span></button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent41">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">I contenu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="connexion">Connexion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="inscription.php">Inscription</a>
    </li>
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
                       
        <div id="content">
       
                <?= $content ?>
        </div> 
        </div> <!-- #global -->

        <footer class = "page-footer  text-center>
		  <div class="container-fluid">  
			<div class="row">
				<div class="col-12">
                  <span> ©  Blog de Jean Forteroche 2020 Aneta LAURENT - Projet 3 DWJ  OpenClassrooms</span><br/> 
                  <a href="#"><font color="black">Mentions Légales</font></a>
			</div>
                      
               </div>
               
		 </div>
			
	     </footer>
    </body>
</html>
