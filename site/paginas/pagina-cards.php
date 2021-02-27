<?php
$resultDados = new Conexao();
$dados = $resultDados->selecionaDados('SELECT * FROM facavocemesmo');
?>
<div class="paginacards">
    <div class="container" style="background-color: white">

        <div class="content w-auto">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-2"> SENAC <small>PE</small></h1>
                            <hr  />
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-6 mr-auto ">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title text-bold">Sala de estudos interativa Senac - PE</h5>
                                </div>
                                <div class="card-body"> 

                                    <p class="card-text text-justify">
                                        A pesquisa no Senac, associada às atividades de ensino e extensão, 
                                        tem como objetivo a criação, a produção, o desenvolvimento e difusão 
                                        do conhecimento nas áreas da Ciência, da Tecnologia, da Cultura e da Arte.
                                    </p>

                                </div>
                            </div>    

                        </div>                                   
                        <div class="col-5">
                            <div class="card card-primary card-outline ">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold">Venha contribuir com postando seus artigos</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Compartilhe seu conhecimento</h6>
                                    <p class="card-text">Através do cadastra no site de Pesquisa Senac PE você pode 
                                        estar colaborando com seus artigos e produções para o enriquecimento da nossa base e fonte de dados.</p>

                                </div>
                            </div>
                        </div>                                                                    
                    </div>
                    <div class="row">
                        <div class="col-6 mr-auto "> 
                            <div class="card card-primary card-outline float-left">           
                                <div class="card-header">
                                    <h5 class="card-title text-bold">Por que fazer artigos?</h5>
                                </div>
                                <p class="card-text text-justify p-4">
                                    As empresas brasileiras estão cada vez mais cientes da importância das áreas de pesquisas e desenvolvimento. De acordo com a consultoria Strategy&, que acompanhou os orçamentos de inovação em algumas empresas por dois anos, o índice dos negócios que investem mais de 5% da receita no segmento passou de 20 para 24%. Em âmbito nacional, o Instituto Brasileiro de Geografia e Estatística (IBGE) afirma que 37,5% das empresas direcionam esforços à inovação.
                                    <br />
                                    Estas estatísticas mostram que, atualmente, um negócio não pode se limitar a revender produtos e serviços. Ele precisa ser um motor de inovação, produzindo conhecimento e atuando como um difusor de avanços.
                                </p>
                            </div><!-- /.card -->
                        </div>                                  
                        <div class="col-5 mt-1 mb-3">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold">Nossos Cursos</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Linhas de estudo e cursos</h6>

                                    <p class="card-text">Venha olhar nossos cursos, os nossos profissionais e tudo o que os nossos alunos estao engajados no momento.</p>
                                    <a href="http://www.pe.senac.br/cursos-2/" class="btn btn-primary">Vem conhecer</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.col-md-6 -->
                    </div>

                    <!--fecha a div col-->
                </div> 

            </div> <!--FECHA A DIV CONTAINER-->

        </div> <!--FECHA A DIV CONTENT-->

        <h1 class="text-center mt-5 mb-3 text-bold">ARTIGOS DOS NOSSOS COLABORADORES</h1> 
        <hr class="text-bold"/>



        <div class="container">
            <div class="row">
                <div class="col px-4">
                    <div>
                        <?php
                        foreach ($dados as $dado) {
                            
                        ?>
                        <div class="list-group-item mt-1">
                            <div class="row m-3">
                                <div class="col-auto">
<?php echo $dado['linkImagem']; ?>
                                </div>
                                <div class="col px-4">
                                    <div>

                                        <h3><strong><?php echo $dado['titulo']; ?></strong></h3>
                                        <h5><?php echo $dado['sobrenome']; ?>, <?php echo $dado['nome']; ?></h5>
                                        <p class="mb-0 text-justify"><?php echo $dado['categoria']; ?> </p>
                                        <br />
                                        <a href="?pg=validar-artigo&id=<?php echo $dado['id']; ?>" class="card-link">Leia mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr />