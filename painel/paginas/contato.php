<?php
$resultDados = new Conexao();
$dados = $resultDados->selecionaDados('SELECT * FROM contato');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contato</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">            
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabela-produtos" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Cod</th>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">Mensagem</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($dados as $dado) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $dado ['id']; ?></td>
                                        <td class="text-center"><?php echo $dado ['nomecompleto']; ?></td>
                                        <td class="text-center"><?php echo $dado ['email']; ?></td>
                                        <td class="text-center"><?php echo $dado ['mensagem']; ?></td>
                                        <td class="text-center">
                                            <!--vizualiza-->
                                            <a href="?pg=vizualizar-contato&id=<?php echo $dado['id']; ?>" class="btn btn-success"><span class="fa fa-eye"></span></a>
                                            
                                            <a href="?pg=excluir-contato&id=<?php echo $dado['id']; ?>" class="btn btn-secondary"><span class="fa fa-trash"></span> </a>
                                                   
                                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>



                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Cod</th>
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Categoria</th>
                                    <th class="text-center">Nome do Usuário</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->

        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>