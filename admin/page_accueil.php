<?php
/**
 * Page accueil plugin Jim Tools
 *
 * Extension du plugin "Jim Tools"
 *
 * @link       
 * version plugin     	1.0.0
 * version extension	1.0.0
 *
 * @package    Jim_Tools
 * @subpackage Jim_Tools
 *
 * @author     TonyJim
 */ 
?>
<div class="wrap">
	
	<div id="jt_page_admin">
		<?php $page_en_cours = "accueil"; ?>
		<div id=jt_nav>
			<a><h1>Jim Tools</h1><img id=logo src="../wp-content/plugins/jim_tools/admin/images/logo_page.png"></a>
			
			<?php include "../wp-content/plugins/jim_tools/admin/includes/menu_page.php"; ?>
			<!--
			<ul>
				<li><a href="#menu_admin">Menu Admin</a></li>
				<li><a href="#fonctions">Fonctions</a></li>
				<li><a href="#dashicons">Dashicons</a></li>
				<li><a href="#style_dashboard">Style Dashboard</a></li>
				<li><a href="#customizer">Customizer</a></li>
				<li><a href="#bloc_notes">Bloc Notes</a></li>
				<li><a href="#about">About</a></li>
			</ul>
			-->
		</div>


		<article>

			<section id=description class=first><br>
				<h2><b><u>Jim Tools</u></b> - La boite à Outils Pour Administrateur WordPress</h2>
				<p>
					Bienvenue dans Jim_Tools <b>la Boite à outils Wordpress réalisée par TonyJim.</b><br><br>
					Plugin <a href='https://wordpress.org/' target='_blank'>Wordpress</a> incorporant plusieurs outils d'administration.<br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools</b><br>
				</p>
			<br></section>


			<section id=menu_admin><br>
				<h2><b><u>Menu Admin</u></b></h2>
				<p>
					Gérer le menu Admin en masquant ou affichant les Menus souhaités.<br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/gestion_menu_admin</b><br><br>
					<h2><b>Aperçu :</b></h2><br>
					<img src='../wp-content/plugins/jim_tools/admin/images/demo_menu_admin.jpg'>
				</p>
			<br></section>

			<section id=fonctions><br>
				<h2><b><u>Fonctions</u></b></h2>
				<p>
					Outils permetant d'ajouter des fonctions directement à partir panneaux admin.<br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/fonctions</b><br>
					Extension construite sur base du Code Open Source : <a href="http://codemirror.net/">CodeMirror</a><br><br>
					<h2><b>Aperçu :</b></h2><br>
					<img src='../wp-content/plugins/jim_tools/admin/images/demo_functions.jpg'>
				</p>
			<br></section>

			<section id=dashicons><br>
				<h2><b><u>Dashicons</u></b></h2>
				<p>
					Wordpress et ses Dashicons, cet extension permet de connaitre la "class" correspondant pour chaque <b>Dashicons</b><br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/dashicons</b><br>
					Extension construite sur base du Code Open Source : <a href="https://github.com/WordPress/dashicons/">Dashicons</a><br><br>
					<h2><b>Aperçu :</b></h2><br>
					<img src='../wp-content/plugins/jim_tools/admin/images/demo_dashicons.jpg'>
				</p>

			<br></section>
			
			<section id=style_dashboard><br>
				<h2><b><u>Style DashBoard</u></b></h2>
				<p>
					Modifier le style du panneau Administrateur de WordPress à l'aide de cet extension.<br>
					Style par défaut installé mais propose également la possibilité de coder son propre style.<br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/style_dashboard</b><br>
					Base du style par défaut du DashBoard instalée : <a href='https://github.com/lineshjose/Blue-Admin' target='_blank'>Blue-Admin</a><br>
					Base du style par défaut de l'Admin Bar : <a href='https://github.com/wp-plugins/ibar/' target='_blank'>IBar</a><br><br>
					<h2><b>Aperçu :</b></h2><br>
					<img src='../wp-content/plugins/jim_tools/admin/images/demo_style_dashboard.jpg'>
				</p>

			<br></section>
			
			<section id=customizer><br>
				<h2><b><u>Customizer</u></b></h2>
				<p>
					Amélioration des options de personnalisation d'apparence du thème proposée par WordPress.<br>
					Cet extension installera un onglet "Demo" dans le menu "Personnaliser" de Wordpress.<br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/customizer</b><br>
					<h2><b>Aperçu :</b></h2><br>
					<img src='../wp-content/plugins/jim_tools/admin/images/demo_customizer.jpg'>
				</p>

			<br></section>
			
			<section id=bloc_notes><br>
				<h2><b><u>Bloc Notes</u></b></h2>
				<p>
					L'extension "Bloc Notes" est un "pense-bête" générale.<br>
					Tutoriels et plugins WordPress interessant y sont stocké, repertorié et affiché!<br><br>
					Version instalée : <b>1.0.0</b><br>
					Package : <b>Jim_Tools/admin/extensions/bloc_notes</b><br>
				</p>

			<br></section>
			
			<section id=about><br>
				<h2><b><u>About</u></b></h2>
				<p>
					Plugin réalisé par Tonyjim<br>
					Basé sur le code Open Source : <a href='https://github.com/DevinVinson/WordPress-Plugin-Boilerplate/' target='_blank'><b>WordPress-Plugin-Boilerplate</b></a><br>
					Mise en page réalisée à partir du code Open Source : <a href='https://github.com/codemirror/CodeMirror/' target='_blank'>CodeMirror</a><br><br>
					
					<b>Inclus</b><br>
					
				</p>

			<br></section>

		</article>
	</div>
</div>