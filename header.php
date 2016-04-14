<!DOCTYPE html>
<?php
require 'init.php';

$tag->html();
  $tag->head();
    $tag->title();
      $tag->printer($config['project_name']);
    $tag->title;
    $tag->meta('name="viewport" content="width=device-width, initial-scale=1"');
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'jquery.dataTables.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'bootstrap.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'bootstrap-theme.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'index.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'dataTables.bootstrap.min.css']);
    
  $tag->head;

  $tag->body();