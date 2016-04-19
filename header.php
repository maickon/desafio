<!DOCTYPE html>
<?php
// require 'init.php';

$tag->html();
  $tag->head();
    $tag->title();
      $tag->printer($config['project_name']);
    $tag->title;
    $tag->meta('name="viewport" content="width=device-width, initial-scale=1"');
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'bootstrap.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'dataTables.bootstrap.min.css']);
    $tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['base_url'].$config['css_path'].'index.css']);
    
    $tag->script('src="'.$config['base_url'].$config['js_path'].'jquery-1.12.0.min.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'bootstrap.min.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'jquery.dataTables.min.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'dataTables.bootstrap.min.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'jquery.validate.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'jquery.maskMoney.min.js"'); $tag->script;
    $tag->script('src="'.$config['base_url'].$config['js_path'].'knockout-3.4.0.js"'); $tag->script;
  $tag->head;

  $tag->body();

  //definicao do menu
  $menu['nomes'] = [  
              $config['menu']['label_produto'],
              $config['menu']['label_outros_projetos'] 
            ];

  $menu['links'] = [  
          $config['base_url'].$config['menu']['link_listar_produto'],
          $config['base_url'].$config['menu']['link_outros_projetos'] 
        ];

  new Components('menu', $menu);
  $tag->br();
  $tag->br();
