<?php


include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';


$pg = isset($_GET['pg']);


if ($pg) {

//PÁGINA INDEX DO SITE
    
    switch ($_GET['pg']) {

//        Responsável Laura - paginacards
        case 'inicial':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-cards.php';
            include_once 'site/paginas/includes/footer.php';
            
            break;
        
        case 'pagina-artigos':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-artigos.php';
            include_once 'site/paginas/includes/footer.php';
            
            break;
        
            
//        Responsável Juliana
        case 'contato':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/contato.php';
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
            include_once 'site/paginas/faca-voce-mesmo.php';
            include_once 'site/paginas/includes/footer.php';

            break;
        
//        Responsavel Hermes
        case 'pesquisar':
         
            
            
            
            
            

            break;


        
        
// FIM PÁGINA INDEX DO SITE
        

        case 'login':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'painel/paginas/includes/footer.php';

            break;
        
        
        case 'validar-artigo':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/pagina-validar-artigo.php';
            include_once 'painel/paginas/includes/footer.php';

            break;
        
        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';

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
    include_once 'site/paginas/includes/erro.php'; 
    include_once 'site/paginas/includes/footer.php';  


}



        
        
        
        
        
        
