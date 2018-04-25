<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_ASSETS; ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_ASSETS; ?>/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Gerenciamento - Energia</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!-- Bootstrap core CSS     -->
    <link href="<?php echo BASE_ASSETS; ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo BASE_ASSETS; ?>/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo BASE_ASSETS; ?>/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo BASE_ASSETS; ?>/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Login</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="cadastro">
                            Registrar
                        </a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="<?php echo BASE_ASSETS; ?>/img/background/background-2.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form id="login" method="POST">
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Entrar</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Usuário</label>
                                            <input type="usuario" placeholder="Usuário" name="usuario" id="usuario" class="form-control input-no-border" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" placeholder="******" name="senha" id="senha" class="form-control input-no-border" required="required">
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-fill btn-wd ">Entrar</button>
                                        <div class="forgot">
                                            <a href="esqueceu.php">Esqueceu sua senha?</a>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                    	<div class="alert <?= $tipoMensagem ?>">
                                           	<span><?= $mensagem ?></span>
                                    	</div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script> Gerenciamento - Energia
                    </div>
                </div>
            </footer>
        </div>
    </div>

        	
    
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="<?php echo BASE_ASSETS; ?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_ASSETS; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_ASSETS; ?>/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_ASSETS; ?>/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="<?php echo BASE_ASSETS; ?>/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?php echo BASE_ASSETS; ?>/js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="<?php echo BASE_ASSETS; ?>/js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="<?php echo BASE_ASSETS; ?>/js/bootstrap-selectpicker.js"></script>

    <!-- Wizard Plugin    -->
    <script src="<?php echo BASE_ASSETS; ?>/js/jquery.bootstrap.wizard.min.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="<?php echo BASE_ASSETS; ?>/js/sweetalert2.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="<?php echo BASE_ASSETS; ?>/js/paper-dashboard.js?v=1.2.1"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="<?php echo BASE_ASSETS; ?>/js/demo.js"></script>

	<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();
            demo.login();
        });
	</script>

</html>