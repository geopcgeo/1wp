<?php
// If uninstall not called from WordPress exit
if ( !defined('WP_UNINSTALL_PLUGIN') ) {
    exit();
}
    care_uninstall();

	function care_uninstall(){  //  DELETES EVERYTHING CAUSED BY THIS PLUGIN IN THE TABLES
	global $wpdb;	
	$query="DROP TABLE IF EXISTS wp_bp_activity_metausers" ;
	$wpdb->query($query);

	}

?>