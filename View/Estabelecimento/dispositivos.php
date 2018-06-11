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
	            	$menu = 26;
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

	            	<div class="row" id="tabelaDispositivos">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header">
	                                <h3 class="card-title">Dispositivos cadastrados 
	                                <?php if($_SESSION['admin']): ?>
	                                	<div class="pull-right">
	                                		<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-plus"></i></btn>
	                                		<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-calendar"></i></btn>
	                                	</div> 
	                                <?php endif; ?>
	                                </h3>

	                            </div>
	                            <div class="card-content">
	    	                       	<div class="toolbar">
	                                    <!--Here you can write extra buttons/actions for the toolbar-->
									</div>

	                            	<div class="fresh-datatables">
										<table id="bootstrap-table" class="table">
											<thead>
												<tr>
													<th data-field="local" data-sortable="true">Dispositivo</th>
													<th data-field="equipamentos" data-sortable="true">Local</th>
													<th data-field="quantidade" data-sortable="true">Descrição</th>
													<th data-field="funcionamento">Mede consumo</th>
													<?php if($_SESSION['admin']): ?>
														<th data-field="acoes" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Ações</th>
													<?php endif; ?>
												</tr>
											</thead>
											<tbody>

											<?php foreach ($dispositivos as $dispositivo): ?>
												<tr>
													<td><?= $dispositivo->getID(); ?></td>
													<td><?= $dispositivo->getLOCAL(); ?></td>
													<td><?= $dispositivo->getDESCRICAO(); ?></td>
													<td><?= $dispositivo->estadoCONSUMO(); ?></td>
												</tr>
											<?php endforeach; ?>

											</tbody>

										</table>

									</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	            <?php if($_SESSION['admin']): ?>
	            	<div class="row">
						<div class="col-md-12">
		                    <div class="card">

		                    	<div class="card-content">
		                    		<form id="allInputsFormValidation1" class="form-horizontal" action="" method="post" novalidate="">
		                            
		                                <h3 class="card-title">Cadastro de dispositivos
	                                		<div class="pull-right">
	                                			<btn class="btn btn-sm btn-success btn-info" onclick="teste('ajuda-tabela')"><i class="fa fa-question"></i></btn>
	                                		</div> 
	                                	</h3>
	                                	<br>
		                                <div class="form-group">
		                                	<div class="col-md-10">
		                                		<div>
	        	                                    <select class="selectpicker" data-style="btn" title="Dispositivos" 	data-size="7">
	                                                	<option value="01">DIS0309AB</option>
	                                                	<option value="02">DIS0405BA</option>
	                                            	</select>
	                                        	</div>
	                                        </div>

	                                        
	                                        <div class="col-md-2">
	                                        	<div class="checkbox">
												    <input id="checkbox1" type="checkbox">
												    <label for="checkbox1">
														Mede consumo
													</label>
												</div>
	                                        </div>

	                                    </div>


	                                    <div class="form-group">
	                                    	<div class="col-sm-6">
		                                    	<label>
													Local de instalação
												</label>
		                                        
		                                            <input class="form-control" type="text" name="nome" number="true" required="required"/>
	                                        </div>

	                                        <div class="col-sm-6">
		                                        <label>
													Descrição
												</label>
		                                        
		                                            <input class="form-control" type="text" name="nome" number="true" required="required"/>
	                                        </div>
	                                        
	                                    </div>

	                                    <div class="row">
		                                    <div class="card-footer">
		                            			<div class="text-center">
													<button type="submit" class="btn btn-info btn-fill btn-wd">Cadastrar
													</button>
												</div>

												<div class="clearfix"></div>
											</div>
										</div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
						<div class="col-md-12">
		                    <div class="card">

		                    	<div class="card-content">
		                    		<form id="allInputsFormValidation" class="form-horizontal" action="" method="post" novalidate="">
		                            
		                                <h3 class="card-title">Dispositivos de medições por dia
	                                		<div class="pull-right">
	                                			<btn class="btn btn-sm btn-success btn-info" onclick="teste('ajuda-tabela')"><i class="fa fa-question"></i></btn>
	                                		</div> 
	                                	</h3>
	                                	<br>

	                                <br> 
	                                <?php
	                                	$dias = ["Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira",
	                                	"Sexta-feira", "Sábado", "Domingo"];
	                                ?>

	                                	<?php
											foreach($dias as $dia)
											{
										?>
	                                	<div class="form-group">
		                                	<label class="col-sm-2 control-label">
												<?php echo $dia; ?>
											</label>
			                                <div class="col-sm-4">
	                                            <input type="text" class="form-control datepicker" placeholder="Data de medição"/>
	                                        </div>
	                                        <div class="col-sm-2">
	                                            <select class="selectpicker" data-style="btn" title="Dispositivo 1" 	data-size="7">
	                                                	<option value="01">DIS0309AB</option>
	                                                	<option value="02">DIS0405BA</option>
	                                            </select>
	                                        </div>

	                                        <div class="col-sm-2">
	                                            <select class="selectpicker" data-style="btn" title="Dispositivo 2" 	data-size="7">
	                                                	<option value="01">DIS0309AB</option>
	                                                	<option value="02">DIS0405BA</option>
	                                            </select>
	                                        </div>

	                                        <div class="col-sm-2">
	                                            <select class="selectpicker" data-style="btn" title="Dispositivo 3" 	data-size="7">
	                                                	<option value="01">DIS0309AB</option>
	                                                	<option value="02">DIS0405BA</option>
	                                            </select>
	                                        </div>

	                                        

	                                    </div>
	                                    <?php }//Fim dia ?>
	                            	
	                            		<div class="card-footer">
	                            			<div class="text-center">
												<button type="submit" class="btn btn-info btn-fill btn-wd">Cadastrar
												</button>
											</div>

											<div class="clearfix"></div>
										</div>
	                            </form>
	                        </div>
	                      </div>
						</div>
	            	</div>
	           	<?php endif; ?>


	            	


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
	    
	    	var $table = $('#bootstrap-table');

	        function operateFormatter(value, row, index) {
	            return [
					'<div class="table-icons">',
		                '<a rel="tooltip" title="Remover" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
		                    '<i class="ti-close"></i>',
		                '</a>',
					'</div>',
	            ].join('');
	        }

	        $().ready(function(){
	            window.operateEvents = {
	                'click .view': function (e, value, row, index) {
	                    info = JSON.stringify(row);

	                    swal('You click view icon, row: ', info);
	                    console.log(info);
	                },
	                'click .remove': function (e, value, row, index) {
	                    console.log(row);
	                    $table.bootstrapTable('remove', {
	                        field: 'id',
	                        values: [row.id]
	                    });
	                }
	            };

	            $table.bootstrapTable({
	                toolbar: ".toolbar",
	                clickToSelect: true,
	                showRefresh: false,
	                search: true,
	                showToggle: true,
	                showColumns: true,
	                pagination: true,
	                searchAlign: 'right',
	                pageSize: 8,
	                clickToSelect: false,
	                pageList: [8,15,25],

	                formatShowingRows: function(pageFrom, pageTo, totalRows){
	                    //do nothing here, we don't want to show the text "showing x of y from..."
	                },
	                formatRecordsPerPage: function(pageNumber){
	                    return pageNumber + " linhas";
	                },
	                icons: {
	                    teste: 'fa fa-plus',
	                    toggle: 'fa fa-th-list',
	                    columns: 'fa fa-columns',
	                    detailOpen: 'fa fa-plus-circle',
	                    detailClose: 'ti-close'
	                }
	            });

	            //activate the tooltips after the data table is initialized
	            $('[rel="tooltip"]').tooltip();

	            $(window).resize(function () {
	                $table.bootstrapTable('resetView');
	            });
			});

	</script>

	<script type="text/javascript">
        $().ready(function(){
        	demo.initFormExtendedDatetimepickers();
    		$('.selectpicker').selectpicker();
			$('#allInputsFormValidation').validate();
        });
    </script>	

</html>
