<?php

require_once 'Main/controller.php';
require_once 'Model/post.php';

class ControllerHome extends Controller {

  private $post;

  public function __construct() {
    $this->post = new Post();
  }

  // Affiche la liste de tous les billets du blog
  public function index() {
    $posts = $this->post->getPosts();
    $this->genererView(array('posts' => $posts));
  }
}