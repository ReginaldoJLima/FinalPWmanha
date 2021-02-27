<div class="container mt-2">
    <h1 class="text-center">Faça você mesmo</h1>
    <form action="?pg=faca-voce-mesmo" method="POST">
        <div class="form w-75 h-50 mx-auto  ">

            <div class="row ml-auto">

                <div class="form-group">
                    <span class="reg-mouse"></span>
                    <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                        <option>Categoria</option>
                        <option>Artes</option>
                        <option>Beleza</option>
                        <option>Comércio</option>
                        <option>Comunicação</option>
                        <option>Conservaçao e Zeladoria</option>
                        <option>Design</option>
                        <option>Educacional</option>
                        <option>Gastronomia</option>
                        <option>Gestao</option>
                        <option>Hospedagem</option>
                        <option>Idiomas</option>
                        <option>Iformática</option>
                        <option>Lazer</option>
                        <option>Meio ambiente</option>
                        <option>Moda</option>
                        <option>Saúde</option>
                        <option>Segurança</option>
                        <option>Turismo</option>
                    </select>
                </div>
            </div>

            <div class="row ml-auto">
                <div class="form-group">
                    <span class="reg-file-text2"></span>                                        
                    <input type="text" name="titulo" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Título">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="text" name="sobrenome" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user-check"></span>  
                        <input type="text" name="nome" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Nome">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-mail1"></span>  
                        <input type="email" name="email" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="usuario@email.com">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span class="reg-books"></span>  
                        <input type="text" name="curso" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Curso">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-office"></span>  
                        <input type="text" name="instituicao" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Instituição">
                    </div>
                </div>
                <div class="col ">
                    <div class="form-group">
                        <span class="reg-user-tie"></span>
                        <select name="usuario" class="form-control" id="exampleFormControlSelect1">
                            <option>Selecione</option>
                            <option>Aluno</option>
                            <option>Ex-Aluno</option>
                            <option>Professor/Instrutor</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <span class="reg-youtube"></span>                                        
                <input type="text" name="linkVideo" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Link Video">
            </div>

            <div class="form-group  ">
                <span class="reg-photo"></span>                                        
                <input type="text" name="linkImagem" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="Arquivo Imagem">
            </div>

            <div class="form-group">
                <span class="reg-file-text"></span>                                          
                <textarea class="form-control" name="artigo" id="exampleFormControlTextarea1" rows="20" placeholder="Artigo (máximo 15.000 caracteres)"></textarea>
            </div>

            <a href="painel.php?pg=tabela-artigo"><button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus" ></i> Criar</button></a>

        </div>
    </form>
    <br />
</div>






