<?php
$tag->div('class="container"');
	$tag->div('class="row"');
        $tag->div('class="col-lg-12 text-center"');
			
            $form->h1('Desafio Luxfacta - Módulo Produto');
            $tag->p('class="lead"');
                $tag->printer('Tecnologias utilizadas');
            $tag->p;
            $tecnologias = [
                'Bootstrap', 
                'DataTables Bootstrap', 
                'Jquery', 
                'Jquery DataTables', 
                'DataTables Bootstrap',
                'Jquery Validate',
                'Jquery MaskMoney',
                'PHP',
                'Mysql',
                'Xamp Control Panel',
                'Server Apache'
                ];
            $tag->ul('class="list-unstyled"');
                foreach($tecnologias as $value):
                    $tag->li();
                        $tag->printer($value);
                    $tag->li;
                endforeach;
            $tag->ul;

            $tag->p('class="lead"');
                $tag->printer('Código fonte do projeto:');
                $tag->br();
                $tag->a('href="https://github.com/maickon/desafio" target="blank"');
                   $tag->printer('Projeto Desafio Luxfacta');
                $tag->a;
            $tag->p;
        $tag->div;
    $tag->div;
$tag->div;