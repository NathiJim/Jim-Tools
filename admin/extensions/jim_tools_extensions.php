<?php

/**
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       
 * @since      1.0.0
 *
 * @package    Jim_Tools
 * @subpackage Jim_Tools/admin/extensions
 * @author     TonyJim
 */
 
// Function raccourcis vers le repertoire actuel => "admin/extensions" du plugins
define( 'JIM_TOOLS_EXTENSIONS', __FILE__ ); 
//var_dump(JIM_TOOLS_EXTENSIONS_DIR);

/****************************************************************************************************************************/

include( JIM_TOOLS_FONCTIONS . 'fonc_global_extension.php');

//var_dump($jt_global_extension);

foreach ($jt_global_extension as  $jt_aff_extension){
	// on inclus chaque extensions via le fichier "jim_tools_ajout_extension.php"			
	require( plugin_dir_path( __FILE__ ) . $jt_aff_extension['nom_dossier'] . '/jim_tools_ajout_extension.php');
}

/****************************************************************************************************************************/
/*
// on crée une variable qui comptera le nbr d'extensions
$jim_tools_nb_extensions = '0';

// si le dossier existe 
if($jim_tools_dossier_extension = opendir( __DIR__ ))
{
	// on crée une boucle pour ouvrir chaque extension
	while(false !== ($fichier = readdir($jim_tools_dossier_extension)))
	{
		// condition pour prendre uniquement les repertoires des extensions
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'jim_tools_extensions.php')
		{
			$jim_tools_nb_extensions++; // On incrémente le compteur du nombre d'extensions de 1
			
			// on inclus chaque extensions via le fichier "jim_tools_ajout_extension.php"			
			require( plugin_dir_path( __FILE__ ) . $fichier . '/jim_tools_ajout_extension.php');

		} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
	} // On termine la boucle

	closedir($jim_tools_dossier_extension); // on referme le dossier 
}
else
     echo 'Le dossier n\' a pas pu être ouvert';
 
 */