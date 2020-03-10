<?php
require_once 'Configuration.php';

class View
 {
  // Nom du fichier associé à la vue
  private $file;
  // Titre de la vue (défini dans le fichier vue)
  private $title;

  public function __construct($action, $controller = "") {
    // Détermination du nom du fichier vue à partir de l'action et du constructeur
     $file = "Views/";
     if ($controller != "") {
       $file = $file . $controller . "/";
     }
     $this->file = $file . $action . ".php";
   }

  // Génère et affiche la vue
  public function generer($datas) {
    // Génération de la partie spécifique de la vue
    $content = $this->genererFile($this->file, $datas);
   // On définit une variable locale accessible par la vue pour la racine Web
    // Il s'agit du chemin vers le site sur le serveur Web
    // Nécessaire pour les URI de type controleur/action/id
    $racineWeb = Configuration::get("racineWeb", "/");
    $view = $this->genererFile('Views/template.php',
      array('title' => $this->title, 'content' => $content, 'racineWeb' => $racineWeb));
    // Renvoi de la vue au navigateur
    echo $view;
  }
// Nettoie une valeur insérée dans une page HTML
private function clean($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}

 
  // Génère un fichier vue et renvoie le résultat produit
  private function genererFile($file, $datas) {
    if (file_exists($file)) {
      // Rend les éléments du tableau $donnees accessibles dans la vue
      extract($datas);
      // Démarrage de la temporisation de sortie
      ob_start();
      // Inclut le fichier vue
      // Son résultat est placé dans le tampon de sortie
      require $file;
      // Arrêt de la temporisation et renvoi du tampon de sortie
      return ob_get_clean();
    }
    else {
      throw new Exception("File '$file' introuvable");
    }
  }
}