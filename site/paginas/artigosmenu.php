<?php
$resultDados = new Conexao();
$dados = $resultDados->selecionaDados('SELECT * FROM facavocemesmo');
?>

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