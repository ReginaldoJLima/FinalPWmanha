<?php
foreach ($dados as $dado) {
    
}
?>


    <div class="container mt-5">
        <h1 class="text-center pb-2"><b>Faça você mesmo</b></h1>
        <div class="form w-75 h-50 mx-auto ">
            <div class="row justify-content-center">
                <div class="col-6">

                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <label for="exampleFormControlInput1"><b>Nome: </b></label>
                        <br />
                      <?php echo $dado['nome']; ?>

                    </div>
                    <div class="-group">
                        <span class="reg-location1"></span>  
                        <label for="exampleFormControlInput1"><b>Sobrenome:</b></label>
                        <br />
                     <?php echo $dado['sobrenome']; ?>
                    </div>
                </div>
                <div class="col-6">

                    <div class="form-group">
                        <span class="reg-user-group"></span>
                        <label for="exampleFormControlSelect1"><b>Usuário:</b></label>
                        <br />
                     <?php echo $dado['usuario']; ?>
                    </div>
                    <div class="form-group ">
                        <span class="reg-office"></span>
                        <label for="exampleFormControlInput1"><b>Curso/Instituição:</b></label>
                        <span class="manu-document"></span>
                        <br />
                       <?php echo $dado['curso']; ?> / <?php echo $dado['instituição']; ?>
                    </div> 


                </div>

            </div>



            <div class="card ess mt-4">

                <div class="card-body">
                    <h5 class="card-title">Video</h5>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Link do vÃ­deo:</label>
                        <br /> 
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['linkVideo'] . '<br>';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col ">
                    <div class="form-group text">
                        <span class="reg-book-reference"></span>
                        <label for="exampleFormControlTextarea1"><b>Exemplo de textarea:</b></label>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['artigo'] . '<br>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col mt-4">
                    <img class="img-fluid"src="https://placehold.it/400x500" alt=""/>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <a href="" class="btn btn-dark btn-block mt-3">Confirmar</a>
                </div>
            </div>
        </div>

    </div>
<input type="submit" value="" />

























































<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';


$pg = isset($_GET['pg']);


if ($pg) {

    switch ($_GET['pg']) {



        case 'login':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'tabela-artigo':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM facavocemesmo WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/validar-artigo.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'validar-artigo':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM facavocemesmo WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
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
                include_once 'painel/paginas/validar-artigo.php';
            } else {

                include_once 'painel/paginas/pagina-validar-artigo.php';
            }
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'painel-contato':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        default:
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
//não existe   
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/menus.php';
    include_once 'site/paginas/includes/erro.php';
    include_once 'site/paginas/includes/footer.php';
}


