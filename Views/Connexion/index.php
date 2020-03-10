<title>Connexion admin</title>
<div align="center">
  
  <div class="row">
        
  <form class="login-box" action="connect" method="post" class="form-signin">
            <h2>Connectez-vous à votre Espace Admin</h2></br>
            <input type="text" id="inputIdent" class="form-control" placeholder="Entrez votre identificant" name="pseudo" required><br>
            <br />
           <input type="password" id="inputPassword" class="form-control" placeholder="Entrez votre mot de passe"
               name="password" required></br>
               </br>
            <br />
            <button class="btn btn-lg  btn-block" type="submit">Se connecter</button>
         </form>

         <input type="button"  value="Retournez à la page d'accueil" class="homebutton" id="btnHome" onClick="window.location = 'http://localhost/blogjf/index.php'"/>
 