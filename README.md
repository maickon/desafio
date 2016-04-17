# Desafio Luxfacta - Módulo Produto - Arquivo de Implantação
===========
# Requerimentos e configurações do ambiente para poder rodar o sistema.

O sistema deve ser implantado num servidor Apache com PHP no Windows .
Deve ser utilizado um banco de dados Mysql.
Um novo banco de dados deve ser criado dentro Mysql
Deve-se importar o arquivo produto.sql e executa lo no banco de dados recém criado. O arquivos .sql se encontra em \desafio-luxfacta\config\db.
Uma vez com o banco de dados criado e com o devido arquivo .sql já importado, devemos fazer a configuração de acesso ao banco de dados. Abra o arquivo database.php dentro de \desafio-luxfacta\config\db e reconfigure as constantes definidas.

define('DB_USER', "root");		
define('DB_PASS', "");	  		
define('DB_NAME', "desafio"); 	
define('DB_HOST', "localhost");

Troque root pelo seu nome de usuário, desafio pelo nome que você deu ao seu banco de dados no ato da criação e o host que por padrão é localhost. Caso tenha informado uma senha para o seu banco de dados, informa a na constante DB_PASS.
   
Após isso, abra o arquivo config.php que se localiza na raiz do projeto. Este arquivo trata de todas as configurações do sistema. No array config nas linhas 15 e 16, faça a devida alteração referente ao caminho correto de seu ambiente. Os índices abaixo deve ser atualizados para o seu devido caminho correto.

'base_url'		=> 'http://127.0.0.1/desafio-luxfacta/
'base_path'		=> 'C:/xampp/htdocs/desafio-luxfacta/

Apesar de poder configurar Apache, Mysql e PHP separados. Para a implantação deste sistema foi utilizado o Xamp que já vem com tudo configurado. Inclusive o o banco de dados foi feito no PhpMyAdmin que já vem no Xamp.
Para eliminar qualquer possível possibilidade de falha na implantação do sistema, o mesmo está disponível num servidor gratuito que oferece praticamente os mesmos recursos que no ambiente local (Servidor Apache, PhpMyAdmin e o PHP). O endereço pode ser acessado em http://www.projetoluxfacta.orgfree.com. Além disso o código fonte está disponível em https://github.com/maickon/desafio.   
Tive problemas em manter a dataTable com os recursos padrões que ela já oferece como paginação e campo de busca quando implementei a opção de listar produtos disponíveis e indisponíveis. De alguma forma que eu não consegui descobrir ainda, as linhas que eu adiciono na tabela não contam para poder exibir a paginação e fazer a busca. É como se a tabela estivesse vazia. Por conta disso mantive a tabela sem os recursos da dataTable.

    	
