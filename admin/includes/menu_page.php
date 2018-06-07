<?php
// on inclus la function global des extensions
include( JIM_TOOLS_FONCTIONS . 'fonc_global_extension_menu.php');


// var_dump($jt_global_extension_menu);

?>
 <ul id="jt_nav_ul">
  <li>
	<a href="admin.php?page=jim_tools_slug_menu">
	  Accueil
	  <img src="../wp-content/plugins/jim_tools/admin/extensions/20_dashicons/icons/fa/home.svg" />
	</a>
  </li>
  <?php
// on crée une boucle qui affichera chaque extension
foreach ($jt_global_extension_menu as  $jt_menu_extension){
	// si l'extension apparais dans un sous menu
	if($jt_menu_extension["type"] == "menu_parent"){
		echo '
		<li>
			<a href="#" class="sub" tabindex="1">
			  '.$jt_menu_extension["nom"].'
			  <img src="../wp-content/plugins/jim_tools/admin/extensions/20_dashicons/icons/'.$jt_menu_extension["icone"].'" />
			</a>
			<img src="../wp-content/plugins/jim_tools/admin/includes/images/up.svg" alt="" />
			<ul>';
			foreach ($jt_global_extension_menu_dashicons as $jt_dashicons_menu_extension){
				echo '
				  <li>
					<a href="admin.php?page='.$jt_dashicons_menu_extension["slug"].'">
					  <img src="../wp-content/plugins/jim_tools/admin/extensions/20_dashicons/icons/'.$jt_dashicons_menu_extension["icone"].'" />
					  '.$jt_dashicons_menu_extension["nom"].'
					</a>
				  </li>';
			}
		echo '</ul>
		  </li>
		';
	}
	else
	{
	  echo '<li>
		<a href="admin.php?page='.$jt_menu_extension["slug"].'" >
		  '.$jt_menu_extension["nom"].'
		  <img src="../wp-content/plugins/jim_tools/admin/extensions/20_dashicons/icons/'.$jt_menu_extension["icone"].'" />
		</a>
	  </li>';
	}
}
?>
</ul>