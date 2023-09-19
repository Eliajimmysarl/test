<!-- Active menu dans les entites -->
<?php  require_once('active_menu.php'); ?>

<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="?home">
						<img src="assets/images/logo_m.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>      
			<ul id="main-menu" class="main-menu">
			
			<li >
					<a href="?home">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>

				
			
											
				<li class="has-sub">
					<a href="forms-main.html">
					<i class="fa fa-users"></i>
						<span class="title">Agent</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_agent">
								<span class="title">Ajouter</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Gerer</span>
							</a>
						</li>

						<li>
							<a  href="?page=importer_agents">
								<span class="title">Importer</span>
							</a>
						</li>
						
					</ul>
				</li>


				
											
				<li class="has-sub">
					<a href="forms-main.html">
					<i class="fa fa-users"></i>
						<span class="title">Modele</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter">
								<span class="title">Ajouter</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_">
								<span class="title">Recuperes tout</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Recupere un</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Supprimer un</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Modifier un</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_agents">
								<span class="title">importer Photo</span>
							</a>
						</li>
						<li>
							<a href="?page=recuperer_agents">
								<span class="title">Convertir PDF</span>
							</a>
						</li>

						<li>
							<a  href="?page=importer_agents">
								<span class="title">Importer_excel</span>
							</a>
						</li>
						
					</ul>
				</li>

									
				<li>
						<a href="/smaas/kill.php">
						<i class="entypo-logout right"></i>	Log Out 
						</a>
					</li>
					



			</ul>
	</div>

	</div>
