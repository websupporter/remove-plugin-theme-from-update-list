<?php
	/**
	 * Plugin Name: Prevent Update
	 * Plugin Author: David Remer
	 * Description: Remove plugins and themes from the update list. Just alter the $slug to the plugin/theme slug, you do not want to update.
	 **/

	add_filter( 'pre_set_site_transient_update_plugins', 'pu_transient' );

	//This removes plugins from the update list
	function pu_transient( $transient ){
		$slug = 'akismet/akismet.php';
		if( isset( $transient->response[ $slug ] ) )
			unset( $transient->response[ $slug ] );

		return $transient;
	}

	//This removes themes from the update list
	add_filter( 'pre_set_site_transient_update_themes', 'pu_theme_transient' );
	function pu_theme_transient( $transient ){
		$slug = 'twentyfifteen';
		if( isset( $transient->response[ $slug ] ) )
			unset( $transient->response[ $slug ] );

		return $transient;
	}
?>
