<?php
foreach ($dados as $dado) {
    
}
?>
<div class="paginaartigo">
    <div class="container w-auto" style="background-color: white">
        <div class="row">
            <img src="../../painel/assets/img/logosenac" class="img-fluid m-auto w-25" alt="Imagem responsiva" >        
        </div>
        <div class="row m-auto text-center w-25">
            <small class="text-justify"></small>
        </div>
        <div class="row">
            <div class="col mb-3 mt-3">
                <h1 class="mb-0"><?php echo $dado['titulo']; ?></h1> 
                <small class="mb-3 "> <strong><?php echo $dado['sobrenome']; ?>, <?php echo $dado['nome']; ?> | <?php echo $dado['email']; ?></strong></small> <br />
                <small class="mb-3 "> <strong><?php echo $dado['curso']; ?> | <?php echo $dado['instituicao']; ?></strong></small>
            </div>
        </div>

        <!--essa tag de vídio vai aparecer na minha página como um campo enorme vazio 
        porem, quando o banco de dados analisar se existe ou não um vídeo para ser postado, 
        ele vai por a row do texto no lugar certo. A teg precisa existir para o vídeo poder ser
        adicionado, mas o layout vai depender do banco de dados -->

        <div class="row">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" allowfullscreen><?php echo $dado['linkVideo']; ?></iframe>
            </div>
        </div>

        <div class="row">

            <div class="col w-auto ">
                <img class="rounded float-left img-thumbnail mr-2 mb-2" src="<?php echo $dado['linkImagem']; ?>" alt="Imagem de artigo">
                <div>
                    <p class="text-justify"> <?php echo $dado['artigo']; ?></p>
                </div> 
            </div> 
        </div>
    </div>
</div>
<?php
?>


