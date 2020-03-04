<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function listPosts()
{
    $postManager = new\Forteroche\Blog\PostManager();
    $posts = $postManager ->getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new\Forteroche\Blog\PostManager();
    $commentManager= new\Forteroche\Blog\CommentManager();

    $post = $postManager -> getPost($_GET['id']);
    $comments = $commentManager ->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new\Forteroche\Blog\CommentManager();
    $lines = $commentManager-> postComment($postId, $author, $comment);
    if ($lines === false) {
        throw new Exception ("Impossible d'ajouter le commentaire!");
    }
    else{
        header('Location: index.php?action=post&id=' . $postId);
    }
}


