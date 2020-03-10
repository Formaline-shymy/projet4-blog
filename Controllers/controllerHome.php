<?php

require_once 'Controller.php';
require_once 'Models/post.php';

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