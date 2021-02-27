<?php
foreach ($dados as $dado) {
    
}
?>

  <h1 class="text-center">Contato</h1>
    
        <div class="form w-75 h-50 mx-auto ">

            <div class="form-group">
                <span class="reg-user"></span>                                        
                <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['nomecompleto']; ?>" disabled="">
            </div>

            <div class="form-group  ">
                <span class="reg-user"></span>                                        
                <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['email']; ?>" disabled="">
            </div>

            <div class="form-group">
                <span class="reg-user"></span>                                          
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="<?php echo $dado['mensagem']; ?>" disabled=""></textarea>
            </div>

            <a href="?pg=painel-contato"><button type="submit" class="btn btn-primary btn-block"></i> Voltar Tabela Contato </button></a>

        </div>
    </form
    <br />
</div>




