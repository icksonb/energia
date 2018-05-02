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
				<a href="http://www.creative-tim.com" class="simple-text logo-mini">
					GE
				</a>

				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					Minha Energia
				</a>
			</div>
	    	<div class="sidebar-wrapper">
				<?php
	            	$menu = 1;
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
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-plug"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Consumo</p>
	                                            400/190
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										mensal (kWh) - Fora / Ponta
									</div>
								</div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-success text-center">
	                                            <i class="ti-money"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Fatura</p>
	                                            1000,00
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										 em R$ - aproximadamente
									</div>
								</div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-info text-center">
	                                            <i class="ti-stats-down"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Economia</p>
	                                            500,00
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										em R$ - aproximadamente
									</div>
								</div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-danger text-center">
	                                            <i class="ti-bolt-alt"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>Medição</p>
	                                            300
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										consumo atual (kW)
									</div>
								</div>
	                        </div>
	                    </div>

	                </div>

	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Consumo (em kW) de hoje</h4>
	                                <p class="category">Dia 01/03/2018</p>
	                            </div>
	                            <div class="card-content">
	                                <div id="chartPerformance"></div>
	                            </div>
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
		
	</script>



	<script type="text/javascript">

		function grafico_dia()
		{
	        /*  **************** 24 Hours Performance - single line ******************** */

	        var dados = {
	          labels: ['0h', '2h','4h', '6h', '8h', '10h', '12h', '14h', '16h', '18h', '20h', '22h'],
	          series: [
	            [1, 6, 8, 7, 4, 7, 8, 9, 12, 14, 17, 10, 1]
	          ]
	        };

	        var opcoes_dia = {
	          showPoint: true,
	          lineSmooth: true,
	          height: "200px",
	          axisX: {
	            showGrid: true,
	            showLabel: true
	          },
	          axisY: {
	            offset: 40,

	          },
	          low: 0,
	          high: 17,
	          height: "250px"
	        }
	    	Chartist.Line('#chartPerformance', dados, opcoes_dia);
    	};

    	$(document).ready(function(){
			demo.initOverviewDashboard();
			demo.initCirclePercentage();
			//demo.initChartsPage();
			grafico_dia();
    	});
	</script>

</html>
