				<div class="user">
	                <div class="info">
						<div class="photo">
		                    <!--img src="../assets/img/faces/face-2.jpg" /-->
		                </div>

	                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								<?= strtoupper($_SESSION['primeiroNome']); ?>
		                        <b class="caret"></b>
							</span>
	                    </a>
						<div class="clearfix"></div>

	                    <div class="collapse" id="collapseExample">
	                        <ul class="nav">
	                            <li>
									<a href="#edit">
										<span class="sidebar-mini">EP</span>
										<span class="sidebar-normal">Editar perfil</span>
									</a>
								</li>
	                            <li>
									<a href="<?= BASE_SITE_MENU?>logout">
										<span class="sidebar-mini">S</span>
										<span class="sidebar-normal">Sair</span>
									</a>
								</li>
	                        </ul>
	                    </div>
	                </div>
	            </div>


<ul class="nav">


	<li <?php if($menu == 1) echo "class='active'";?> >
	    <a href="<?php echo BASE_SITE_MENU?>inicial">
	        <i class="ti-panel"></i>
	        <p>Inicial</p>
	    </a>
	</li>


	<li>
	    <a data-toggle="collapse" href="#dashboardEstabelecimento" aria-expanded="<?php if($menu > 20 && $menu < 29) echo "true"; else echo "false";?>">
	        <i class="ti-home"></i>
	        <p>Estabelecimentos
	            <b class="caret"></b>
	        </p>
	    </a>
		<div class="collapse<?php if($menu > 20 && $menu < 29) echo "-out";?>" id="dashboardEstabelecimento">
			<ul class="nav">
				<li <?php if($menu == 21) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/cadastro">
						<span class="sidebar-mini">CA</span>
						<span class="sidebar-normal">Cadastro</span>
					</a>
				</li>
				<li <?php if($menu == 22) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/faturas">
						<span class="sidebar-mini">FA</span>
						<span class="sidebar-normal">Faturas</span>
					</a>
				</li>
				<li <?php if($menu == 23) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/equipamentos">
						<span class="sidebar-mini">EQ</span>
						<span class="sidebar-normal">Equipamentos</span>
					</a>
				</li>
				<li <?php if($menu == 24) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/diarias">
						<span class="sidebar-mini">ED</span>
						<span class="sidebar-normal">Estatísticas Diárias</span>
					</a>
				</li>
				<li <?php if($menu == 25) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/mensais">
						<span class="sidebar-mini">EM</span>
						<span class="sidebar-normal">Estatísticas Mensais</span>
					</a>
				</li>
				<li <?php if($menu == 26) echo "class='active'";?>>
					<a href="<?php echo BASE_SITE_MENU?>estabelecimento/dispositivos">
						<span class="sidebar-mini">D</span>
						<span class="sidebar-normal">Dispositivos</span>
					</a>
				</li>
			</ul>
		</div>
	</li>


	<li>
	    <a data-toggle="collapse" href="#dashboardGraficos" aria-expanded="false">
	        <i class="ti-bar-chart"></i>
	        <p>Gráficos
	            <b class="caret"></b>
	        </p>
	    </a>
		<div class="collapse" id="dashboardGraficos">
			<ul class="nav">
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">D</span>
						<span class="sidebar-normal">Diário</span>
					</a>
				</li>
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">Q</span>
						<span class="sidebar-normal">Quinzenal</span>
					</a>
				</li>
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">M</span>
						<span class="sidebar-normal">Mensal</span>
					</a>
				</li>
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">T</span>
						<span class="sidebar-normal">Trimestral</span>
					</a>
				</li>
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">S</span>
						<span class="sidebar-normal">Semestral</span>
					</a>
				</li>
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">A</span>
						<span class="sidebar-normal">Anual</span>
					</a>
				</li>
			</ul>
		</div>
	</li>



	<li>
	    <a data-toggle="collapse" href="#dashboardRelatorios" aria-expanded="false">
	        <i class="ti-files"></i>
	        <p>Relatórios
	            <b class="caret"></b>
	        </p>
	    </a>
		<div class="collapse" id="dashboardRelatorios">
			<ul class="nav">
				<li>
					<a href="../dashboard/overview.html">
						<span class="sidebar-mini">P</span>
						<span class="sidebar-normal">Preliminar</span>
					</a>
				</li>
			</ul>
		</div>
	</li>

</ul>