<?php 

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit; 


$donut_includes = array(
	'setup',
	'enqueue',
	'menu',
	'cpt',
);

foreach ( $donut_includes as $file ) {
	require_once get_template_directory() . "/includes/$file.php";
}

?>