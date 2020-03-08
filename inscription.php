<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=blogjf', 'root', '');

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $pass = sha1($_POST['pass']);
   $pass2 = sha1($_POST['pass2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pass']) AND !empty($_POST['pass2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $db->prepare("SELECT * FROM administration WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($pass == $pass2) {
                     $insertmbr = $db->prepare("INSERT INTO administration (pseudo, mail, password) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $pass));
                     $erreur = "Votre compte a bien été créé  <a href= connexion.php>Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      }  
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>Inscription membre</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Identifiant :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre identifiant" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pass">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="pass" name="pass" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pass2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre pass" id="pass2" name="pass2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="left">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
         <div>
            <br/>
         <input type="button" value="Retournez à la page d'accueil" class="homebutton" id="btnHome" onClick="window.location = 'http://localhost/blogjf/index.php'"/>
         
      </div>
   </body>
</html>