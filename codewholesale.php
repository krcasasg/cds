<?php
/**
 * Plugin Name: codewholesale krcasasg
 * Plugin URI: https://www.desarrollode.com/
 * Description: Codewholesale plugin.
 * Version: 1.0
 * Author: Raúl Casas
 * Author URI: http://desarrollode.com/
 **/

require 'vendor/autoload.php';

add_action('admin_init', 'cdw_init');
function cdw_init(){
    echo 'codewholesale init';
}