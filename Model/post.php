<?php

require_once 'Main/model.php';

class Post extends Model {
  const MAX_PER_PAGE = 3;

  // Renvoie la liste des billets du blog
  public function getPosts() {
    $sql =  'SELECT post_id as id, post_date as date,' . ' post_title as title, post_content as content FROM post' . ' ORDER BY post_id desc';
    $posts = $this->executeRequest($sql);
    return $posts;
  }

  // Renvoie les informations sur un billet
  public function getPost($idPost) {
    $sql = 'SELECT post_id as id, post_date as date,' . ' post_title as title, post_content as content FROM post' . ' WHERE post_id = ?';
    $post = $this->executeRequest($sql, array($idPost));
    if ($post->rowCount() == 1)
      return $post->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun billet ne correspond à l'identifiant '$idPost'");
  }
  

}



