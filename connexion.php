<?php
session_start();

$db = new PDO('mysql:host=127.0.0.1;dbname=blogjf', 'root', '');
if(isset($_POST['formconnexion']))
 {
   $nickconnect = htmlspecialchars($_POST['nickconnect']);
   $passconnect = sha1($_POST['passconnect']);
   if(!empty($nickconnect) AND !empty($passconnect)) {
      $requser = $db->prepare("SELECT * FROM administration WHERE pseudo = ? AND password = ?");
      $requser->execute(array($nickconnect, $passconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['password'] = $userinfo['password'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $error = "Le nom d'utilisateur ou le mot de passe est incorrect. Veuillez réessayer";
      }
   } else {
      $error = "Merci de renseigner tous les champs.";
   }

?>

<html>
   <head>
      <title>Connexion</title>
      <html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br />
         <form method="POST" action="">
            <input type="text" name="nickconnect" placeholder="Identifiant" />
            <br /><br />
            <input type="password" name="passconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter" />
         </form>
         <?php
         if(isset($error)) {
            echo '<font color="green">'.$error."</font>";
         }
         ?>
      </div>
      </bod>
</html>
   