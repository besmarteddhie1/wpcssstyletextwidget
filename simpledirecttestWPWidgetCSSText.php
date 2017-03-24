<?php
ob_start();
error_reporting(0);
spl_autoload_register(function($class_name){
//	
//
	if (  class_exists( $class_name )){
		return 0;
	}
	
	if (file_exists("../../../wp-includes/widgets/class-$class_name.php")){
	include "../../../wp-includes/widgets/class-$class_name.php";
	return 0 ;
	}

$temp = str_replace("_", "-", $class_name);	
	if (file_exists("../../../wp-includes/widgets/class-$temp.php")){
	include "../../../wp-includes/widgets/class-$temp.php";
	return 0 ;
	}
	
	
	
//	
}
	);
	
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', "C:\\xampp\htdocs\PhpProject1" . '/' );
}

	define( 'WPINC', 'wp-includes' );

	//include '../../../wp-load.php';
//	include '../../../wp-settings.php';
include '../../../wp-includes/functions.php';
//include '../../../wp-includes/l10n.php';
include '../../../wp-includes/pomo/translations.php';
//
//
//		include '../../../wp-includes/widgets.php';
//				include '../../../wp-includes/class-wp-widget.php';	
//		include '../../../wp-includes/widgets/class-wp-widget-text.php';	
//
//		//$te = new WP_Widget_Text;
//		
//		//   include '../../../../../../../../../xampp/htdocs/PhpProject1/wp-includes/widgets.php';
//		

//			
//		$temop2 = new NOOP_Translations();   
//		
//		
		   require '../../../wp-includes/plugin.php';


// Load the L10n library.
	
require_once( ABSPATH . WPINC . '/l10n.php' );
require_once( ABSPATH . WPINC . '/class-wp-locale.php' );
require_once( ABSPATH . WPINC . '/class-wp-locale-switcher.php' );

// Run the installer if WordPress is not installed.
//wp_not_installed();

// Load most of WordPress.
require( ABSPATH . WPINC . '/class-wp-walker.php' );
require( ABSPATH . WPINC . '/class-wp-ajax-response.php' );
require( ABSPATH . WPINC . '/formatting.php' );
require( ABSPATH . WPINC . '/capabilities.php' );
require( ABSPATH . WPINC . '/class-wp-roles.php' );
require( ABSPATH . WPINC . '/class-wp-role.php' );
require( ABSPATH . WPINC . '/class-wp-user.php' );
require( ABSPATH . WPINC . '/class-wp-query.php' );
require( ABSPATH . WPINC . '/query.php' );
require( ABSPATH . WPINC . '/date.php' );
require( ABSPATH . WPINC . '/theme.php' );
require( ABSPATH . WPINC . '/class-wp-theme.php' );
require( ABSPATH . WPINC . '/template.php' );
require( ABSPATH . WPINC . '/user.php' );
require( ABSPATH . WPINC . '/class-wp-user-query.php' );
require( ABSPATH . WPINC . '/class-wp-session-tokens.php' );
require( ABSPATH . WPINC . '/class-wp-user-meta-session-tokens.php' );
require( ABSPATH . WPINC . '/meta.php' );
require( ABSPATH . WPINC . '/class-wp-meta-query.php' );
require( ABSPATH . WPINC . '/class-wp-metadata-lazyloader.php' );
require( ABSPATH . WPINC . '/general-template.php' );
require( ABSPATH . WPINC . '/link-template.php' );
require( ABSPATH . WPINC . '/author-template.php' );
require( ABSPATH . WPINC . '/post.php' );
require( ABSPATH . WPINC . '/class-walker-page.php' );
require( ABSPATH . WPINC . '/class-walker-page-dropdown.php' );
require( ABSPATH . WPINC . '/class-wp-post-type.php' );
require( ABSPATH . WPINC . '/class-wp-post.php' );
require( ABSPATH . WPINC . '/post-template.php' );
require( ABSPATH . WPINC . '/revision.php' );
require( ABSPATH . WPINC . '/post-formats.php' );
require( ABSPATH . WPINC . '/post-thumbnail-template.php' );
require( ABSPATH . WPINC . '/category.php' );
require( ABSPATH . WPINC . '/class-walker-category.php' );
require( ABSPATH . WPINC . '/class-walker-category-dropdown.php' );
require( ABSPATH . WPINC . '/category-template.php' );
require( ABSPATH . WPINC . '/comment.php' );
require( ABSPATH . WPINC . '/class-wp-comment.php' );
require( ABSPATH . WPINC . '/class-wp-comment-query.php' );
require( ABSPATH . WPINC . '/class-walker-comment.php' );
require( ABSPATH . WPINC . '/comment-template.php' );
require( ABSPATH . WPINC . '/rewrite.php' );
require( ABSPATH . WPINC . '/class-wp-rewrite.php' );
require( ABSPATH . WPINC . '/feed.php' );
require( ABSPATH . WPINC . '/bookmark.php' );
require( ABSPATH . WPINC . '/bookmark-template.php' );
require( ABSPATH . WPINC . '/kses.php' );
require( ABSPATH . WPINC . '/cron.php' );
require( ABSPATH . WPINC . '/deprecated.php' );
require( ABSPATH . WPINC . '/script-loader.php' );
require( ABSPATH . WPINC . '/taxonomy.php' );
require( ABSPATH . WPINC . '/class-wp-taxonomy.php' );
require( ABSPATH . WPINC . '/class-wp-term.php' );
require( ABSPATH . WPINC . '/class-wp-term-query.php' );
require( ABSPATH . WPINC . '/class-wp-tax-query.php' );
//require( ABSPATH . WPINC . '/update.php' );
require( ABSPATH . WPINC . '/canonical.php' );
require( ABSPATH . WPINC . '/shortcodes.php' );
require( ABSPATH . WPINC . '/embed.php' );
require( ABSPATH . WPINC . '/class-wp-embed.php' );
require( ABSPATH . WPINC . '/class-oembed.php' );
require( ABSPATH . WPINC . '/class-wp-oembed-controller.php' );
require( ABSPATH . WPINC . '/media.php' );
require( ABSPATH . WPINC . '/http.php' );
require( ABSPATH . WPINC . '/class-http.php' );
require( ABSPATH . WPINC . '/class-wp-http-streams.php' );
require( ABSPATH . WPINC . '/class-wp-http-curl.php' );
require( ABSPATH . WPINC . '/class-wp-http-proxy.php' );
require( ABSPATH . WPINC . '/class-wp-http-cookie.php' );
require( ABSPATH . WPINC . '/class-wp-http-encoding.php' );
require( ABSPATH . WPINC . '/class-wp-http-response.php' );
require( ABSPATH . WPINC . '/class-wp-http-requests-response.php' );
require( ABSPATH . WPINC . '/class-wp-http-requests-hooks.php' );
require( ABSPATH . WPINC . '/widgets.php' );
require( ABSPATH . WPINC . '/class-wp-widget.php' );
require( ABSPATH . WPINC . '/class-wp-widget-factory.php' );
require( ABSPATH . WPINC . '/nav-menu.php' );
require( ABSPATH . WPINC . '/nav-menu-template.php' );
require( ABSPATH . WPINC . '/admin-bar.php' );
require( ABSPATH . WPINC . '/rest-api.php' );
require( ABSPATH . WPINC . '/rest-api/class-wp-rest-server.php' );
require( ABSPATH . WPINC . '/rest-api/class-wp-rest-response.php' );
require( ABSPATH . WPINC . '/rest-api/class-wp-rest-request.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-posts-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-attachments-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-post-types-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-post-statuses-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-revisions-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-taxonomies-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-terms-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-users-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-comments-controller.php' );
require( ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-settings-controller.php' );
require( ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-meta-fields.php' );
require( ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-comment-meta-fields.php' );
require( ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-post-meta-fields.php' );
require( ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-term-meta-fields.php' );
require( ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-user-meta-fields.php' );
		   include '../emerlard1/WP_Widget_CSS_Text.php';		   
//include (ABSPATH.WPINC.'/plugin.php');


?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		


		   $thewidget = new WP_Widget_CSS_Text();
		   
		   $instance = Array(
			   
			   'title' => 'contoh title',
			   'text' => 'cpntph text',
			   
			   'CSSStyle' => 'color:red'
			   
			   
			   
		   );
		   
           $args = "";
		   $thewidget->widget( $args, $instance );
		   
		
		
		?>
    </body>
	<script type="text/javascript">
		var a = rand();
		</script>
</html>
<?php
ob_end_flush();
?>