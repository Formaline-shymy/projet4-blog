<?php
    header("HTTP/1.x 404 Not Found");
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Error 404 -Page introuvable </title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h5>
        Désolé mais cette page n'existe pas. </br> La page que vous recherchez semble introuvable. 
        </h5>

        <div align="center">
          <input type="button" value="Retournez à la page d'accueil" class="homebutton" id="btnHome" onClick="window.location = 'http://localhost/blogJF/index.php'" /> </input>
        </div>
        
    </body>
</html>