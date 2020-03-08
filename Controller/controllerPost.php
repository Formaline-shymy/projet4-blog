<?php

require_once 'Main/Controller.php';
require_once 'Model/Post.php';
require_once 'Model/Comment.php';

class ControllerPost extends Controller {

  private $post;
  private $comment;

  public function __construct() {
    $this->post = new Post();
    $this->comment = new Comment();
  }

  // Affiche les détails sur un billet
  public function index() {
    $idPost = $this->request->getParameter("id");
        
    $post = $this->post->getPost($idPost);
    $comments = $this->comment->getComments($idPost);
        
    $this->genererView(array('post' => $post, 
      'comments' => $comments));
  }

  // Ajoute un commentaire sur un billet
  public function remark() {
    $idPost = $this->request->getParameter("id");
    $author = $this->request->getParameter("author");
    $content = $this->request->getParameter("content");
        
    $this->comment->addComment($author, $content, $idPost);
        
    // Exécution de l'action par défaut pour actualiser la liste des billets
    $this->executeAction("index");
  }
}

 
  