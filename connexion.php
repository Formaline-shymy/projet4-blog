<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $passconnect = sha1($_POST['passconnect']);
   if(!empty($mailconnect) AND !empty($passconnect)) {
      $requser = $bdd->prepare("SELECT * FROM administration WHERE mail = ? AND pass = ?");
      $requser->execute(array($mailconnect, $passconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id".$_SESSION['id']);
      } else {
         $error = "Nom d'utilisateur ou le mot de passe est incorrect. Veuillez réessayer.";
      }
   } else {
      $error = "Merci de renseigner vos identifiants.";
   }
}
?>

<html>
   <head>
      <title>Connexion admin</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <div class="container">
         <form  method="POST" action="">
            <div> 
               <input id="mail" type="email" name="mailconnect" placeholder="Mail">
            </div><br />
   
            <div>
               <input id="pass" type="password" name="passconnect" placeholder="Mot de passe">
            </div><br />
  
            <div>
               <input type="submit" name="formconnexion" value="Se connecter">
            </div>
         </form>
         </div>
      
<?php
         if(isset($error)) {
           echo "<div style ='font:15px Arial,tahoma,sans-serif;color:red'>" .$error. "</div>";
         }
         ?>
           
      </div> 
   </body>
</html>


