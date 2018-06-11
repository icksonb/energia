<!doctype html>
<html lang="pt-BR">
<head>
	<?php
    	require(ROOT.DS.'App'.DS.'Include'.DS.'header.php');
	?>
</head>

<body>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
	    	<div class="logo">
				<a href="#" class="simple-text logo-mini">
					GE
				</a>

				<a href="#" class="simple-text logo-normal">
					Minha Energia
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<?php
	            	$menu = 21;
	            	require(ROOT.DS.'App'.DS.'Include'.DS.'menu.php');
	            ?>
	            
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand" href="#Dashboard">
							Inicial
						</a>
	                </div>
	                <div class="collapse navbar-collapse">

						<?php
					    	require(ROOT.DS.'App'.DS.'Include'.DS.'notificacao.php');
						?>
	                </div>
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">

	            <div class="row">
	            	<div class="col-lg-4 col-md-5">
	                        <div class="card card-user">
	                            <div class="image">
	                                
	                            </div>
	                            <div class="card-content">
	                                <div class="author">
	                                  <img class="avatar border-white" src="<?php echo BASE_ASSETS?>/img/faces/empresa.png" alt="..."/>
	                                  <h4 class="card-title"><?= $empresa[0]->getNOME(); ?><br />
	                                     <small><?= $empresa[0]->getENDERECO(); ?></small><br>
	                                     <small><?= $empresa[0]->getTELEFONE(); ?></small>
	                                  </h4>
	                                </div>
	                                <p class="description text-center">
	                                   <?= $empresa[0]->getCOMENTARIOS(); ?>
	                                </p>
	                            </div>
	                            <hr>
	                            <div class="text-center">
	                                <div class="row">
	                                    <div class="col-md-3 col-md-offset-1">
	                                        <h5>12<br /><small>Dispositivos</small></h5>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h5>300h<br /><small>Monitoradas</small></h5>
	                                    </div>
	                                    <div class="col-md-3">
	                                        <h5><?= count($usuarios) ?><br /><small>Usuários</small></h5>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card">
	                            
	                        	<?php if(isset($mensagemUsuario)): ?>
	                            	<div class="alert alert-<?= $mensagemUsuario[0] ?>">
                                    	<button type="button" aria-hidden="true" class="close">×</button>
                                    	<span><?= $mensagemUsuario[1] ?></span>
                                	</div>
                                <?php endif; ?>

	                            <div class="card-header">
	                                <h4 class="card-title pull-left">Usuários</h4>
	                                
	                                <?php if($_SESSION['admin']): ?>
	                                <btn class="btn btn-sm btn-success btn-icon pull-right" onclick="adicionar()"><i class="fa fa-plus"></i></btn>
	                            	<?php endif; ?>
	                            </div>
	                            <br>

	                            <div class="card-content">
	                                <ul class="list-unstyled team-members">
                                    
                                    <?php foreach($usuarios as $usuario): ?> 

	                                    	<li>
	                                            <div class="row">
	                                                
	                                                <div class="col-xs-8">
	                                                    <?= $usuario[0]->getPrimeiroNome()." ".$usuario[0]->getSobrenome(); ?>
	                                                    <br />
	                                                    <span class="text-success"><small><?= $usuario[0]->getEmail();?> | <?= $usuario[0]->getUsuario(); ?> </small></span>
	                                                </div>
	                                                <div class="col-xs-4 text-right">
	                                                	<?php if($_SESSION['admin']): ?>
	                                                    <btn class="btn btn-sm btn-danger btn-icon" onclick="deleta( <?= $usuario[0]->getId();?> )"><i class="fa fa-close"></i></btn>
	                                                	<?php endif; ?>
	                                                </div>
	                                            </div>
	                                        </li>
	                                <?php endforeach; ?>    
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	            		<div class="col-lg-8 col-md-7">
		                    <div class="card">
		                    	<div class="card-content">
		                                <h4 class="card-title">Cadastro de estabelecimentos</h4>

		                            <?php if(isset($mensagem)): ?>
		                            	<div class="alert alert-<?= $mensagem[0] ?>">
	                                    	<button type="button" aria-hidden="true" class="close">×</button>
	                                    	<span><?= $mensagem[1] ?></span>
	                                	</div>
	                                <?php endif; ?>

		                            <form class="form-horizontal" action="" method="post">
	                                    
	                                    <div class="col-md-12">
	                                    	<div class="form-group">
	                                        	<label>
													Nome do estabelecimento
												</label>
	    	                                    <input class="form-control" type="text" name="NOME" required="required" value="<?= $empresa[0]->getNOME(); ?>" disabled="true"/>
	                                    	</div>
	                                    </div>

	                                    <div class="form-group">
	                                    	<div class="col-md-4">
	                                    		<label>
													Responsável
												</label>
	    	                                    <input class="form-control" id="responsavel" name="RESPONSAVEL" value="<?= $empresa[0]->getRESPONSAVEL(); ?>" type="text"/>
	                                    	</div>
	                                    

	                                    <div class="col-md-1">
	                                    </div>
	
		                                    <div class="col-md-3">
	                                        	<label>
													Telefone
												</label>
	    	                                    <input class="form-control" type="text" name="TELEFONE" required="required" value="<?= $empresa[0]->getTELEFONE(); ?>"/>
	                                    	</div>
	                                    

	                                    <div class="col-md-1">
	                                    </div>
	
		                                    <div class="col-md-3">
	                                        	<label>
													Área (m²)
												</label>
	    	                                    <input class="form-control" type="text" name="AREA" value="<?= $empresa[0]->getAREA(); ?>"/>
	                                    	</div>
	                                    </div>

	                                    <div class="form-group">
	                                    	<div class="col-md-12">
	                                    		<label>
													Endereço
												</label>
	    	                                    <input class="form-control" type="text" name="ENDERECO" required="required" value="<?= $empresa[0]->getENDERECO(); ?>"/>
	                                    	</div>
	                                    </div>

										<div class="form-group">                                    
	                                    	<div class="col-md-12">
	                                        	<label>
													CNPJ / CPF (somente números)
												</label>
	    	                                    <input class="form-control" type="text" name="CPF_CNPJ" required="required" value="<?= $empresa[0]->getCPF_CNPJ(); ?>"/>
	                                    	</div>
	                                    </div>

	                                    <div class="form-group">
	                                   		<div class="col-md-12">
	                                    		<label>
													Comentários
												</label>
	    	                                    <input class="form-control" type="text" name="COMENTARIOS" value="<?= $empresa[0]->getCOMENTARIOS(); ?>"/>
	                                    	</div>
	                                    </div>

	                                    <?php $faturas = array("B - Convencional", "B - Tarifa branca"); ?>

	                                    <div class="form-group">
	                                    	<div class="col-md-12">
			                                	<label>
													Tipo de faturamento no cadastro
												</label>
				                                    <select class="selectpicker" data-style="btn" title="Tipo de faturamento no cadastro" name="FATURAMENTO_CADASTRO" data-size="7" required>
				                                    	<?php 
				                                    		for($i=0; $i<count($faturas); $i++):
				                                    	?>
		                                                <option value="<?= $i; ?>"
		                                                	<?php 
		                                                		if($empresa[0]->getFATURAMENTO_CADASTRO() == $i)
		                                                		echo "selected"; 
		                                                	?>>
		                                                	<?= $faturas[$i]; ?></option>
		                                            	<?php endfor; ?>
		                                            </select>
		                                        
		                                    </div>
		                                </div>

		                                <div class="form-group">
	                                    	<div class="col-md-12">
		                                    	<label>
													Tipo de faturamento atual
												</label>
				                                    <select class="selectpicker" data-style="btn" title="Tipo de faturamento no cadastro" name="FATURAMENTO_ATUAL" data-size="7" required>
				                                    	<?php 
				                                    		for($i=0; $i<count($faturas); $i++):
				                                    	?>
		                                                <option value="<?= $i; ?>"
		                                                	<?php 
		                                                		if($empresa[0]->getFATURAMENTO_ATUAL() == $i)
		                                                		echo "selected"; 
		                                                	?>>
		                                                	<?= $faturas[$i]; ?></option>
		                                            	<?php endfor; ?>
		                                            </select>
		                                        
		                                    </div>
		                                </div>
	                            	


	                            		<div class="card-footer">
											<button type="submit" class="btn btn-info btn-fill pull-right">Cadastrar</button>
											<div class="clearfix"></div>
										</div>
	                            </form>
	                        </div>
	                      </div>
	            	</div>


	            	





				</div>

	        </div>
            

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> Gerenciamento - Energia</a>
                    </div>
                </div>
            </footer>
	    </div>
	</div>

    
</body>

	<?php
    	require(ROOT.DS.'App'.DS.'Include'.DS.'footer.php');
	?>
	
<script type="text/javascript">
	function deleta(id)
	{
		swal({
            title: 'Você tem certeza que deseja deletar esse usuário?',
            text: "Este processo não pode ser alterado!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success btn-fill',
            cancelButtonClass: 'btn btn-danger btn-fill',
            confirmButtonText: 'Sim, delete!',
            cancelButtonText: 'Não, cancele!',
            buttonsStyling: false
        }).then(function() {
          sendPost('',{tipo:2, userid: id});
        });
	}
</script>

<?php if($_SESSION['admin']): ?>
<script type="text/javascript">
	
function adicionar()
{
	swal({
                    title: 'Adicionar usuário',
                    html: '<div class="form-group">' +
                              '<input id="input-field" type="text" class="form-control" placeholder="Nome de usuário" required/>' +
                          '</div>',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success btn-fill',
                    confirmButtonText: 'Adicionar',
                    cancelButtonText: 'Cancelar',
                    cancelButtonClass: 'btn btn-danger btn-fill',
                    buttonsStyling: false,

                }).then(function(result) {
                	sendPost('',{tipo:1, id: $('#input-field').val()});
                });
}

</script>

<script type="text/javascript">
	if(!window.sendPost){
            window.sendPost = function(url, obj){
                //Define o formulário
                var myForm = document.createElement("form");
                myForm.action = url;
                myForm.method = "post";
 
	        for(var key in obj) {
		     var input = document.createElement("input");
		     input.type = "text";
		     input.value = obj[key];
		     input.name = key;
		     myForm.appendChild(input);			
	        }
                //Adiciona o form ao corpo do documento
                document.body.appendChild(myForm);
                //Envia o formulário
                myForm.submit();
            }    
        }
</script>
<?php endif; ?>
</html>
