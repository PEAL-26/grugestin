<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="utf-8" />

        <title><?=$title?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="Gerencie sua Clínica Veterinária com CRM prático e muito elegante." name="description" />

        <meta content="Coderthemes, microdir" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->

        <link rel="shortcut icon" href="<?=base_url("assets")?>/images/favicon.ico">



		<!-- App css -->

		<link href="<?=base_url("assets")?>/css/corporate/bootstrap-corporate.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

		<link href="<?=base_url("assets")?>/css/corporate/app-corporate.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />



		<link href="<?=base_url("assets")?>/css/corporate/bootstrap-corporate-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />

		<link href="<?=base_url("assets")?>/css/corporate/app-corporate-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />



		<!-- icons -->

		<link href="<?=base_url("assets")?>/css/icons.min.css" rel="stylesheet" type="text/css" />



    </head>



    <body class="loading auth-fluid-pages pb-0">



        <div class="auth-fluid">

            <!-- Auth fluid right content -->

            <div class="auth-fluid-right">

                <div class="auth-user-testimonial">

                    <h3 class="mb-3 text-white">Elegante e Atual!</h3>

                    <p class="lead fw-normal"><i class="mdi mdi-format-quote-open"></i> Seria uma idéia interessante obter comentários positivos de clientes usuários e sempre que alguém entrar no sistema, aparece uma mensagem aleatória aqui. <i class="mdi mdi-format-quote-close"></i>

                    </p>

                    <h5 class="text-white">

                        - Michel

                    </h5>

                </div> <!-- end auth-user-testimonial-->

            </div>

            <!-- end Auth fluid right content -->



            <!--Auth fluid left content -->

            <div class="auth-fluid-form-box">

                <div class="align-items-center d-flex h-100">

                    <div class="card-body">



                        <!-- Logo -->

                        <div class="auth-brand text-center text-lg-start">

                            <div class="auth-logo">

                                <a href="index.html" class="logo logo-dark text-center">

                                    <span class="logo-lg">

                                        <img src="<?=base_url("assets")?>/images/logo-dark.png" alt="" height="22">

                                    </span>

                                </a>

            

                                <a href="index.html" class="logo logo-light text-center">

                                    <span class="logo-lg">

                                        <img src="<?=base_url("assets")?>/images/logo-light.png" alt="" height="22">

                                    </span>

                                </a>

                            </div>

                        </div>



                        <!-- title-->

                        <h4 class="mt-0">Autenticação</h4>

                        <p class="text-muted mb-4">Entre com seu e-mail e senha para obter acesso ao painel.</p>



                        <!-- form -->

                        <form action="" method="post"> 
                        <form>

                            <div class="mb-2">

                                <label for="emailaddress" class="form-label">E-mail</label>

                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Entre com seu e-mail" name="usuario">

                            </div>

                            <div class="mb-2">

                                <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Esqueceu sua senha?</small></a>

                                <label for="password" class="form-label">Senha</label>

                                <div class="input-group input-group-merge">

                                    <input type="password" id="password" class="form-control" placeholder="Entre com sua senha" name="senha">

                                    <div class="input-group-text" data-password="false">

                                        <span class="password-eye"></span>

                                    </div>

                                </div>

                            </div>

                            

                            <div class="mb-3">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" id="checkbox-signin">

                                    <label class="form-check-label" for="checkbox-signin">

                                        Lembre-me

                                    </label>

                                </div>

                            </div>

                            <div class="d-grid text-center">

                                <button class="btn btn-primary" type="submit">Entrar </button>

                            </div>

                            <!-- social-->

                            <!-- <div class="text-center mt-4">

                                <h5 class="mt-0 text-muted">Sign in with</h5>

                                <ul class="social-list list-inline mt-3 mb-0">

                                    <li class="list-inline-item">

                                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="mdi mdi-facebook"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>

                                    </li>

                                </ul>

                            </div> -->

                        </form>

                        <!-- end form-->



                        <!-- Footer-->

                        <footer class="footer footer-alt">

                            <p class="text-muted">Não tem uma conta ainda? <a href="auth-register-2.html" class="text-primary fw-medium ms-1">Cadastre-se</a></p>

                        </footer>



                    </div> <!-- end .card-body -->

                </div> <!-- end .align-items-center.d-flex.h-100-->

            </div>

            <!-- end auth-fluid-form-box-->

        </div>

        <!-- end auth-fluid-->



        <!-- Vendor js -->

        <script src="<?=base_url("assets")?>/js/vendor.min.js"></script>



        <!-- App js -->

        <script src="<?=base_url("assets")?>/js/app.min.js"></script> 

    </body>

</html>