<?php
/*
Plugin Name: Beaver Builder Faster Filesystem
Version: 0.0.1
*/

add_action( 'plugins_loaded', function() {
		include 'filesystem.php';
		add_filter( 'fl_filesystem_instance', function() {
			return new Over_FL_Filesystem;
			}
		);
	}
);
