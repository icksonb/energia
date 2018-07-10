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
                <a class="navbar-brand" href="">Registro</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="login">
                            Entrar
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
                        <div class="col-md-8 col-md-offset-2">
                            <div class="card card-wizard" id="wizardCard">
                                <form id="wizardForm" method="POST" onsubmit="return false;">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Cadastro - Gerenciamento de Energia</h4>
                                        <p class="category">Cadastro simples e rápido</p>
                                        <div class="alert <?= $tipoMensagem ?>">
                                            <span><?= $mensagem ?></span>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <ul class="nav">
                                            <li><a href="#tab1" data-toggle="tab">Dados pessoais</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Dados do sistema</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                                <h5 class="text-center">Preencha as informações sobre você.</h5>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Primeiro nome<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="primeiro"
                                                                   placeholder="ex: Fulano"
                                                                   required="required" 
                                                                   value="<?= $cadastro['primeiro'];?>"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Sobrenome<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="sobrenome"
                                                                   required="true"
                                                                   placeholder="ex: da Silva"
                                                                   value="<?= $cadastro['sobrenome'];?>"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Email<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="email"
                                                                   email="true"
                                                                   placeholder="ex: email@energia.com"
                                                                   value="<?= $cadastro['email'];?>"
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Telefone<star>*</star>
                                                            </label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   number="number"
                                                                   name="telefone"
                                                                   placeholder="84999999999"
                                                                   value="<?= $cadastro['telefone'];?>"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="tab-pane" id="tab2">
                                                <h5 class="text-center">Preencha informações para nosso sistema</h5>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">Usuário (sem espaços)<star>*</star></label>
                                                            <input class="form-control"
                                                                   type="text"
                                                                   name="usuario"
                                                                   placeholder="fulano"
                                                                   value="<?= $cadastro['usuario'];?>"
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 ">
                                                        <div class="form-group">
                                                            <label class="control-label">
                                                                Seu gênero<star>*</star>
                                                            </label>
                                                            <select name="genero" class="form-control">
                                                                <option value="M" 
                                                                    <?php if($cadastro['genero'] == 'M') echo "selected";?>
                                                                    >Masculino</option>
                                                                <option value="F"
                                                                    <?php if($cadastro['genero'] == 'F') echo "selected";?>
                                                                    >Feminino</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <div class="form-group">
                                                            <label class="control-label">Senha<star>*</star></label>
                                                            <input class="form-control"
                                                                   type="password"
                                                                   name="senha"
                                                                   id="senha"
                                                                   placeholder="********"
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="control-label">Repetir senha<star>*</star></label>
                                                            <input class="form-control"
                                                                   type="password"
                                                                   name="senha2"
                                                                   equalto="#senha"
                                                                   placeholder="********"
                                                            />
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Voltar</button>
                                        <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Próximo</button>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd btn-finish pull-right" onclick="cadastraDados()">Finalizar</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    <script src="<?php echo BASE_ASSETS; ?>/js/app/cadastro.js"></script>

	<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();
            demo.initWizard();
        });
	</script>

</html>
