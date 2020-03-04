<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
?>

<html>
   <head>
      <title>Profil admin</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil d'administration</h2>
         
      
<?php
         if(isset($error)) {
           echo "<div style ='font:15px Arial,tahoma,sans-serif;color:red'>" .$error. "</div>";
         }
         ?>
           
      </div> 
   </body>
</html>


