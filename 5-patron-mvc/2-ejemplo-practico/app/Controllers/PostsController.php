<?php
require 'app/Models/Post.php';

class PostsController
{
  /**
   * Función que envía todos los Post a la vista Home
   */
  public function index()
  {
    $posts = Post::getAll();
    require VIEWS_PATH . '/home.php';
  }

  /**
   * Función que envía el post seleccionado a la vista Show
   */
  public function show($id)
  {
    $post = Post::getById($id);
    require VIEWS_PATH . '/show.php';
  }
}
