<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';





$pg = isset($_GET['pg']);

if ($pg) {

//P�?GINA INDEX DO SITE

    switch ($_GET['pg']) {

//        Responsável Laura - paginacards
        case 'inicial':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-cards.php';
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'artigos-menu':

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/artigosmenu.php';
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'pagina-artigos':

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM facavocemesmo');
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-artigos.php';
            include_once 'site/paginas/includes/footer.php';

            break;


//        Responsável Juliana
        case 'contato':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//                pegando variaveis via post
                $nomecompleto = $_POST ['nomecompleto'];
                $email = $_POST ['email'];
                $curso = $_POST ['curso'];
                $mensagem = $_POST ['mensagem'];
//                tratar os dados enviados via post
                $parametros = array(''
                    . ':nomecompleto' => $nomecompleto,
                    ':email' => $email,
                    ':curso' => $curso,
                    ':mensagem' => $mensagem,
                );
                $resultDados = new conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'contato (nomecompleto, email, curso, mensagem) '
                        . 'VALUES (:nomecompleto, :email, :curso, :mensagem)', $parametros);
                include_once 'site/paginas/contato.php';
            } else {
                include_once 'site/paginas/contato.php';
            }
            include_once 'site/paginas/includes/footer.php';

            break;

//        Responsável Manu
        case 'sobre':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/sobre.php';
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'faca-voce-mesmo':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';

            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//                pegando variaveis via post
                $categoria = $_POST ['categoria'];
                $usuario = $_POST ['usuario'];
                $titulo = $_POST ['titulo'];
                $sobrenome = $_POST ['sobrenome'];
                $nome = $_POST ['nome'];
                $email = $_POST ['email'];
                $curso = $_POST ['curso'];
                $instituicao = $_POST ['instituicao'];
                $linkVideo = $_POST ['linkVideo'];
                $linkImagem = $_POST ['linkImagem'];
                $artigo = $_POST ['artigo'];

//                tratar os dados enviados via post
                $parametros = array(''
                    . ':categoria' => $categoria,
                    ':usuario' => $usuario,
                    ':titulo' => $titulo,
                    ':sobrenome' => $sobrenome,
                    ':nome' => $nome,
                    ':email' => $email,
                    ':curso' => $curso,
                    ':instituicao' => $instituicao,
                    ':linkVideo' => $linkVideo,
                    ':linkImagem' => $linkImagem,
                    ':artigo' => $artigo,
                );
                $resultDados = new conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'facavocemesmo ('
                        . 'categoria, usuario, titulo, '
                        . 'sobrenome, nome, email, '
                        . 'curso, instituicao, linkVideo, '
                        . 'linkImagem, artigo)'
                        . ' '
                        . 'VALUES (:categoria, :usuario, :titulo, '
                        . ':sobrenome, :nome, :email, '
                        . ':curso, :instituicao, :linkVideo, '
                        . ':linkImagem, :artigo)', $parametros);
                include_once 'site/paginas/pagina-cards.php';
            } else {
                include_once 'site/paginas/faca-voce-mesmo.php';
            }
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'login':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'validar-artigo':
            $resultDados = new conexao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM facavocemesmo');
            include_once 'site/paginas/includes/header.php';

            include_once 'painel/paginas/validar-artigo.php';


            break;


//        Responsavel Hermes
        case 'pesquisar':

            //Nome da pesquisa do usuario 
            $consulta = $_POST["consulta"];

            //Instanciando uma classe, criando o objeto para consulta no banco de dados 
            $resultDados = new conexao();

            //Parametros da consulta
//            $parametros = array(
//                ':consulta' => $consulta
//            );
            //Carregando o resultado em uma variável
            $dados = $resultDados->selecionaDados("SELECT * FROM facavocemesmo"
                    . " WHERE "
                    . "mensagem LIKE '%$consulta%' or sobrenome LIKE '%$consulta%'");

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';

            include_once 'site/paginas/result-pesquisar.php';
            include_once 'site/paginas/includes/footer.php';
            break;




// FIM P�?GINA INDEX DO SITE
        default:

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-cards.php';
            include_once 'site/paginas/includes/footer.php';
            break;
    }
} else {
//não existe   
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/menus.php';
    include_once 'site/paginas/erro.php';
    include_once 'site/paginas/includes/footer.php';
}





        
        
        
        
        
        
