<?php
/**
 * Fonctions "fichiers_serv"
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
 * Utilité				Permet de récupérer les sous-dossiers et fichier d'un répertoire prédéfini.
 */ 
 
// variable contenant le chemin complet vers le dossier dont les éléments sont à afficher
$jt_fonc_files_url = $jt_fonc_files_in;

// variable contenant les options de restriction d'element à afficher
$jt_fonc_files_restriction = '';

/******************************************************************************************************************************/

// on crée une variable qui comptera le nbr d'extensions
$i = '0';

// Vérification si le dossier a examiner existe 
if($jt_dossier_extension = opendir( $jt_fonc_files_url ))
{
	// on crée une boucle pour ouvrir chaque extension
	while(false !== ($fichier = readdir($jt_dossier_extension)))
	{
		// condition qui ajoute les options de restriction
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != $jt_fonc_files_restriction)
		{
			// on ajoute les données à la variable sortie
			$jt_fonc_files_out['fichiers'][$i] = $fichier;
			
			// On incrémente le compteur du nombre d'élément de 1
			$i++; 
		} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
	} // On termine la boucle d'ouverture d'extension

	// on crée et incrémente une variavle sortie pour indiquer le nombre d'élément récupéré
	$jt_fonc_files_out['nbr_element'] = $i;

	closedir($jt_dossier_extension); // on referme le dossier 
}
else{
     echo 'Le dossier n\' a pas pu être ouvert';
}


?>