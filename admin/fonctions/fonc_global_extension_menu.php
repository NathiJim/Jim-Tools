<?php
/**
 * Fonctions "global extension"
 *
 * Plugin 				"Jim Tools"
 *
 * @link       
 * version plugin     	1.0.0
 * version extension	1.0.0
 *
 * @package    			Jim_Tools
 * @subpackage 			Jim_Tools/admin/fonctions
 *
 * @author    			TonyJim
 *
 * Utilité				crée une variable contenant toutes les informations des extensions installée
 *
 * Variable sortie	=>
 * 	- $jt_global_extension : info extension trié par ordre croissant hiérarchiquement
 *	- $jt_nbr_total_extensions : nombre d'extensions installée
 */ 
 
/**
 * on trie les extensions par ordre de hiérarchie
 * ajout des menus parents
 */
 
// on crée une variable qui numérotera les extensions dans la variable global
$jt_nbr_total_extensions = '0';
$a = '0';

/**
 * 2
 * on récupère les infos des extensions installée 
 * en tenant compte des menu-parents et sous menu
 */

// si le dossier "extensions" existe 
if($jim_tools_dossier_extension = opendir( __DIR__ .'/../extensions/' ))
{
	// on crée une boucle pour ouvrir l'info de chaque extension
	while(false !== ($fichier = readdir($jim_tools_dossier_extension)))
	{
		// on récupère le fichier info de chaque extension
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'jim_tools_ajout_extension.php' && $fichier != 'jim_tools_extensions.php')
		{
			// on vérifie que le fichier "info.php" est bien présent dans le répertoire de l'extension
			if (file_exists(JIM_TOOLS_EXTENSIONS_DIR .'/'. $fichier . '/info.php')){
				 // s'il existe bien,
				// on inclus chaque fichier info des extensions pour en récupérer la variable complète			
				include( JIM_TOOLS_EXTENSIONS_DIR .'/'. $fichier . '/info.php');
				
/*menu dashicons*/
				if($jt_info_extension['slug_menu_parent'] != '')
				{
					$jt_global_extension_menu_dashicons[$a] = $jt_info_extension;
					$a++;
				}
/*sans menu-parent*/
				elseif($jt_info_extension['slug_menu_parent'] == ''){
					$jt_global_extension_menu[$jt_nbr_total_extensions] = $jt_info_extension;
					$jt_nbr_total_extensions++; // On incrémente le compteur du nombre d'extensions de 1
				}
				
			}
			//var_dump($fichier);
		} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
			
	} // On termine la boucle

	closedir($jim_tools_dossier_extension); // on referme le dossier 
}
else{ echo 'Le dossier n\' a pas pu être ouvert'; }

/**
 * FIN on récupère les infos des extensions installée 
 */
 // si le dossier "extensions" existe 
if($jim_tools_dossier_extension_info = opendir( __DIR__ .'/../includes/info/' ))
{
	// on crée une boucle pour ouvrir tout les fichiers info
	while(false !== ($fichinfo = readdir($jim_tools_dossier_extension_info)))
	{
		// on récupère le fichier info de chaque extension
		if($fichinfo != '.' && $fichinfo != '..' && $fichinfo != 'index.php')
		{
			// on inclu les fichiers infos
			include( JIM_TOOLS_INFO_DIR .'/'. $fichinfo);
			
			/*menu dashicons*/
			if($jt_info_extension['slug_menu_parent'] != '')
			{
				$jt_global_extension_menu_dashicons[$a] = $jt_info_extension;
				$a++;
			}
		} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
			
	} // On termine la boucle

			//var_dump($fichinfo);
	closedir($jim_tools_dossier_extension_info); // on referme le dossier 
}
else{ echo 'Le dossier n\' a pas pu être ouvert'; }
// on ajoute les menus parent à la variable global
$jt_global_extension_menu[100]['type'] = 'menu_parent';
$jt_global_extension_menu[100]['nom'] = 'Dashicons';
$jt_global_extension_menu[100]['slug_menu_parent'] = 'dashicons';
$jt_global_extension_menu[100]['hierarchie'] = '01';
$jt_global_extension_menu[100]['icone'] = 'md/sentiment-satisfied.svg'; 


foreach ($jt_global_extension_menu as $key => $row) {
    $hierarchie[$key]  = $row['hierarchie'];
}
array_multisort($hierarchie, SORT_ASC, $jt_global_extension_menu);

?>