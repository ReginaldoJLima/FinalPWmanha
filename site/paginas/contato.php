<div class="conteudo">
    <div class="contato">
        <!--pagina contato-->

        <div class="container"> 
            <br>
            <div class="row">
                <div class="col text-center">
                    <h3 class="text-center">Entre em contato com a gente</h3><br>

                </div>               
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="cordomenu">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"> 

                                <a class="nav-link active text-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="icon-julimail"></span> Contato</a>


                            </li>
                            <li class="nav-item">                        
                                <a class="nav-link  text-bold" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false"><span class="icon-julihome2"></span> Como Chegar<i class="imf-bus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h5 class="text-center font-weight"><strong>Envie sua Mensagem</strong></h5>                           
                            <br>
                            <div class="row">


                                <div class="col-4">
                                    <img src="site/assets/img/contato.jpeg" alt="" class="img-bordered img-fluid mt-5"/>  
                                </div>

                                <div class="col-8">
                                    <form action="?pg=contato" method="POST">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"><span class="badge badge-info">Nome Completo</span></label>
                                            <input type="text" name="nomecompleto" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><span class="badge badge-info">Endereço de email</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><span class="badge badge-info">Curso</span></label>
                                            <input type="text" name="curso" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Curso">
                                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1"><span class="badge badge-info">Mensagem</span></label>
                                            <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                     
                                        <a href="painel.php?pg=painel-contato"> <button type="submit" class="btn btn-outline-primary btn-tool">Enviar</button> </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-6 text-center d-flex align-items-center justify-content-center">
                                        <div class="">
                                            <h4 class="text-primary"><small><strong>Unidade Senac Paulista</strong></small></h4>
                                            <br>
                                            <h5 class="text-primary"><small><strong><span class="icon-juliphone"></span> Telefones</strong></small></h5>
                                            <p class="lead mb5 text-secundary"><small>0800 0811688 / (81) 3372.8295/33728250</small> </p>  
                                            <h5 class="text-primary"><small><strong><span class="icon-julilocation"></span> Onde Estamos</strong></small></h5>
                                            <p class="lead mb-0"><small>Avenida Prefeito Severino Cunha Primo, 30 </small></p> 
                                            <p class="lead mb-0"><small>Jardim Paulista, Paulista – PE</small></p> 
                                            <p class="lead mb-0"><small> CEP: 53.407-000</small></p> 

                                        </div>
                                    </div>
                                    <div class="col">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.96842582823479!2d-34.89031589558887!3d-7.94770859427538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1643d37c9b13%3A0x6f412fcc8907019e!2sSenac%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1613478039868!5m2!1spt-BR!2sbr" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" >
                                        </iframe>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>


    </div>

</div>