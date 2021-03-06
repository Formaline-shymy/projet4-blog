<?php

require_once 'Framework/Model.php';

class Comment extends Model
{

  // Renvoie la liste des commentaires associés à un billet
  public function getComments($idPost) {
    $sql = 'SELECT comm_id as id, comm_date as date,' . ' comm_author as author, comm_content as content from comment'. ' WHERE post_id = ?';
    $comments = $this->executeRequest($sql, array($idPost));
    return $comments;
  }
// Ajoute un commentaire dans la base
  public function addComment($author, $content, $idPost) {
    $sql = 'INSERT INTO comment (comm_date, comm_author, comm_content, post_id)'
      . ' values(?, ?, ?, ?)';
    $date = date('Y-m-d H:i:s');  // Récupère la date pour le tableau
    $this->executeRequest($sql, array($date, $author, $content, $idPost));
}



}