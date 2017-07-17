<?php
require('./../../../wp-load.php');
global $wpdb;
$wpdb->show_errors();
$wp_reg_table = $table_prefix . "registration";
$signup_url = "http://signup.guestonline.fr";
$guestonline_url = "http://pro.guestonline.fr";
$module_url = "http://pro.guestonline.fr/instabook/bookings/";
$plugin_dir = basename(dirname(__FILE__));
load_plugin_textdomain( 'guestonline', false, $plugin_dir );
?>
