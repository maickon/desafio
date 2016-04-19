<?php
require '../../init.php';

require '../../header.php';

$tag->div('class="container"');
	$tag->div('class="row"');
        $tag->div('class="col-lg-12 text-center"');
			
            $form->h1('Outros projetos que mantenho');
      
            $projetos = 
            [
            	[	'nome'=>'Help RPG', 
            		'url_coodigo'=>'https://github.com/maickon/HelpRpg-Fichas', 
            		'url'=>'http://helprpg.com.br', 
            		'descricao'=>'Um site sobre jogos de RPG.'
            	],

            	[	
            		'nome'=>'Dungeon Evolution', 
            		'url_coodigo'=>'https://github.com/maickon/Dungeon-Evolution', 
            		'url'=>'http://dungeonevolution.orgfree.com/.', 
            		'descricao'=>'Outro site sobre jogos de RPG.'
            	],

            	[	'nome'=>'Taverna do Elfo', 
            		'url_coodigo'=>'Código indisponível', 
            		'url'=>'http://tavernadoelfo.com.br/', 
            		'descricao'=>'Site feito com wordpress para um amigo.'
            	]
            ];

            $tag->ul('class="list-unstyled"');
                foreach($projetos as $key => $value):
                    $tag->li();
                		$tag->printer('<b>Nome: </b>'.$value['nome']);
                		$tag->br();
                		$tag->printer('<b>Código Fonte: </b><a href="'.$value['url_coodigo'].'" target="blank">'.$value['url_coodigo']."</a>");
                		$tag->br();
                		$tag->printer('<b>Endereço web: </b><a href="'.$value['url'].'" target="blank">'.$value['url']."</a>");
                		$tag->br();
                		$tag->printer('<b>Descrição: </b>'.$value['descricao']);
                		$tag->hr();
                    $tag->li;
                endforeach;
            $tag->ul;

        $tag->div;
    $tag->div;
$tag->div;

require '../../footer.php';