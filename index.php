<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';


$pg = isset($_GET['pg']);


if ($pg) {

    switch ($_GET['pg']) {

        case 'inicial':
            echo 'pahins inivsnsl';
            //Página inicial do Painel Adm           
//            if (verificarLogin()) {
//                
//                
//                include_once './site/paginas/inicial.php';
//                
//            } else {
//                echo 'página não encontrada';
//            }
            break;

        case 'contato':

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/contato.php';
            include_once './site/paginas/includes/footer.php';

            break;

        case 'sobre':


            include_once './site/paginas/sobre.php';

            break;

        case 'paginacards':

            include_once './painel/paginas/includes/header.php';
            include_once './site/paginas/paginacards.php';
            include_once './painel/paginas/includes/footer.php';
            break;

        case 'paginaartigos':


            include_once './painel/paginas/includes/header.php';
            include_once './site/paginas/paginaartigos.php';
            include_once './painel/paginas/includes/footer.php';
            break;



        case 'paginas':


            include_once './painel/paginas.php';

            break;

        case 'login':


            include_once './painel/paginas/acesso/login.php';

            break;

        default:

            include_once 'site/paginas/inicial.php';
            echo 'default';


            break;
    }
} else {
//não existe   
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/menus.php'; 
    include_once 'site/paginas/inicial.php'; 
    include_once 'site/paginas/includes/footer.php';  

    include_once 'site/paginas/includes/menus.php';
    include_once 'site/paginas/contato.php';
    include_once './site/paginas/includes/footer.php';
    echo 'nova ateracao';

}



        
        
        
        
        
        
