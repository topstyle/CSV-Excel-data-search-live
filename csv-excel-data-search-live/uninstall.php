<?php
if (!defined('WP_UNINSTALL_PLUGIN')) exit;
global $wpdb;
$table = $wpdb->prefix . 'cedsl_records';
$wpdb->query("DROP TABLE IF EXISTS $table");
