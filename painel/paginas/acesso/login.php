        <br />
        <div class="login-box m-auto mt-5 mb-5">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h3"><b>Area</b> Administrativa</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Entre com seus dados de acesso</p>

                    <form action="painel.php?pg=dashboard" method="post">
                        <div class="input-group mb-3">
                            <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            </div>                            
                        </div>
                    </form>
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <a href="index.php?pg=inicio-site" class="btn btn-block bg-orange text-light">Voltar ao site</a>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
        <br />
