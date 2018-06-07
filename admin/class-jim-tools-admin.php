<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Jim_Tools
 * @subpackage Jim_Tools/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jim_Tools
 * @subpackage Jim_Tools/admin
 * @author     TonyJim
 */
class Jim_Tools_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $jim_tools    The ID of this plugin.
	 */
	private $jim_tools;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $jim_tools       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $jim_tools, $version ) {

		$this->jim_tools = $jim_tools;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->jim_tools, plugin_dir_url( __FILE__ ) . 'css/jim-tools-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->jim_tools, plugin_dir_url( __FILE__ ) . 'js/jim-tools-admin.js', array( 'jquery' ), $this->version, false );

	}

}

// on ajoute le css général pour le plugin "Jim Tools"
wp_enqueue_style('jim_tools_css_page', plugins_url('css/jim_tools_page.css', __FILE__));
// boutton submit
wp_enqueue_style('jim_tools_css_bouton', plugins_url('css/jim_tools_button.css', __FILE__));
// input style="CheckBox"
wp_enqueue_style('jim_tools_css_checkbox', plugins_url('css/jim_tools_style_checkbox.css', __FILE__));

// on ajoute le css pour CodeMirror du plugin "Jim Tools"
wp_enqueue_style('jim_tools_codemirror_codemirror', plugins_url('includes/codemirror/lib/codemirror.css', __FILE__));
// wp_enqueue_style('jim_tools_codemirror_fullscreen', plugins_url('includes/codemirror/addon/display/fullscreen.css', __FILE__));
wp_enqueue_style('jim_tools_codemirror_night', plugins_url('includes/codemirror/theme/night.css', __FILE__));
wp_enqueue_style('jim_tools_codemirror_show-hint', plugins_url('includes/codemirror/addon/hint/show-hint.css', __FILE__));

// on ajoute le css pour SyntaxHighlighte du plugin "Jim Tools"
wp_enqueue_style('jim_tools_syntaxhighlighte_shCore', plugins_url('includes/SyntaxHighlighte/styles/shCore.css', __FILE__));
wp_enqueue_style('jim_tools_syntaxhighlighte_shThemeDefault', plugins_url('includes/SyntaxHighlighte/styles/shThemeDefault.css', __FILE__));
	
/**
 * Enqueue your script:
 *
 * wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer);
 *
 *   $handle is the name for the script.
 *   $src defines where the script is located.
 *   $deps is an array that can handle any script that your new script depends on, such as jQuery.
 *   $ver lets you list a version number.
 *   $in_footer is a boolean parameter (true/false) that allows you to place your scripts in the footer of your HTML document rather then in the header, so *	that it does not delay the loading of the DOM tree.
 *
 *	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 */
 
// on ajoute le js général pour le plugin "Jim Tools"
wp_enqueue_script( 'jim_tools_page_activebookmark', plugins_url('js/jim_tools_page_activebookmark.js', __FILE__), '', '', false);

// on ajoute le js pour CodeMirror du plugin "Jim Tools"
// wp_enqueue_script( 'jim_tools_js_codemirror_fullscreen', plugins_url('includes/codemirror/addon/display/fullscreen.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_codemirror', plugins_url('includes/codemirror/lib/codemirror.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_matchbrackets', plugins_url('includes/codemirror/addon/edit/matchbrackets.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_show-hint', plugins_url('includes/codemirror/addon/hint/show-hint.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_clike', plugins_url('includes/codemirror/mode/clike/clike.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_php', plugins_url('includes/codemirror/mode/php/php.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_codemirror_css', plugins_url('includes/codemirror/mode/css/css.js', __FILE__), '', '', false);

// on ajoute le js pour SyntaxHighlighte du plugin "Jim Tools"
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shCore', plugins_url('includes/SyntaxHighlighte/src/shCore.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushCss', plugins_url('includes/SyntaxHighlighte/scripts/shBrushCss.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushJava', plugins_url('includes/SyntaxHighlighte/scripts/shBrushJava.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushJScript', plugins_url('includes/SyntaxHighlighte/scripts/shBrushJScript.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushPhp', plugins_url('includes/SyntaxHighlighte/scripts/shBrushPhp.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushSql', plugins_url('includes/SyntaxHighlighte/scripts/shBrushSql.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_shBrushXml', plugins_url('includes/SyntaxHighlighte/scripts/shBrushXml.js', __FILE__), '', '', false);
wp_enqueue_script( 'jim_tools_js_syntaxhighlighte_clipboard', plugins_url('includes/SyntaxHighlighte/scripts/clipboard.js', __FILE__), '', '', false);

 /**
 * Création du Menu Jim Tools
 */
add_action( 'admin_menu', 'jim_tools_add_menu_admin');
function jim_tools_add_menu_admin()
{
    add_menu_page(
        __( "Jim Tools - Accueil", "JimTools" ), // Title of the page
        __( "Jim Tools", "JimTools" ), // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
		'jim_tools_slug_menu', // Slug
		'jim_tools_page_accueil', // fonction de rappel pour créer la page
		'dashicons-smiley', // dashicons du menu
		70 // emplacement menu
    );
}

/**
 * Création de la page d'accueil
 */
add_action( 'admin_menu', 'jim_tools_add_sousmenu_admin_accueil');
function jim_tools_add_sousmenu_admin_accueil()
{
	add_submenu_page( 
		"jim_tools_slug_menu",  // slug du menu parent
		__( "Jim Tools - Accueil", "JimTools" ),  // texte de la balise <title>
		__( "Accueil", "JimTools" ),  // titre de l'option de sous-menu
		"manage_options",  // droits requis pour voir l'option de menu
		"jim_tools_slug_menu", // slug
		"jim_tools_page_accueil"  // fonction de rappel pour créer la page
	);
}
function jim_tools_page_accueil() {
	include( plugin_dir_path( __FILE__ ) . 'page_accueil.php');
}


// on va chercher le fichier qui regroupe les extensions automatiquement
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/extensions/jim_tools_extensions.php';