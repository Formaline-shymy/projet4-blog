<?php

require_once 'request.php';
require_once 'view.php';

class Router {

  private $ctrlHome;
  private $ctrlPost;

 
  // Route une requête entrante : exécute l'action associée
  public function routerRequest() {
    try {
      // Fusion des paramètres GET et POST de la requête
      $request = new Request(array_merge($_GET, $_POST));

      $controller = $this->createController($request);
      $action = $this->createAction($request);

      $controller->executeAction($action);
    }
    catch (Exception $e) {
      $this->gererError($e);
    }
  }

  // Crée le contrôleur approprié en fonction de la requête reçue
  private function createController(Request $request) {
    $controller = "Home";  // Contrôleur par défaut
    if ($request->existParameter('controller')) {
      $controller = $request->getParameter('controller');
      // Première lettre en majuscule
      $controller = ucfirst(strtolower($controller));
    }
    // Création du nom du fichier du contrôleur
    $classController = "Controller" . $controller;
    $fileController = "Controller/" . $classController . ".php";
    if (file_exists($fileController)) {
      // Instanciation du contrôleur adapté à la requête
      require($fileController);
      $controller = new $classController();
      $controller->setRequest($request);
      return $controller;
    }
    else
      throw new Exception("Fichier '$fichierControleur' introuvable");
  }

  // Détermine l'action à exécuter en fonction de la requête reçue
  private function createAction(Request $request) {
    $action = "index";  // Action par défaut
    if ($request->existParameter('action')) {
      $action = $request->getParameter('action');
    }
    return $action;
  }

 // Gère une erreur d'exécution (exception)
 private function gererError(Exception $exception) {
  $view = new View('error');
  $view->generer(array('msgError' => $exception->getMessage()));
}
}