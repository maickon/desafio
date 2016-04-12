<!DOCTYPE html>
<?php
require 'init.php';

$tag->html();
  $tag->head();
    $tag->title();
      $tag->printer($config['project_name']);
    $tag->title;
    
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>'css/jquery.dataTables.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>'css/bootstrap.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>'css/bootstrap-theme.min.css']);
  $tag->head;

  $tag->body();