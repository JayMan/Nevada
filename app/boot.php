<?php
/*
    .   .                   .      
    |\  |                   |      
    | \ | .-..    ._.-.  .-.| .-.  
    |  \|(.-' \  / (   )(   |(   )   Content Management System
    '   ' `--' `'   `-'`-`-'`-`-'`-  version 1.0 beta
    -----------------------------------------------
    Copyrights (c) 2013 Project Nevada
    This project is developed to imitate Habbo Hotel. All rights
    reserved to the developers of Nevada CMS 
    
    This project is licensed under the MIT license. This means that you may
    redistribute and edit with leaving the copyrights to the developers.
    
    Developers: 
    - Merijn K
    - Jayden C    
*/

((defined('IN_INDEX')) ?: die('Security protection. You cannot access this file.'));

/**
* Start the ob_gzhandler
*/                
if(strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    ob_start('ob_gzhandler');    
}

/**
* Define the site path
*/

define('DS', DIRECTORY_SEPARATOR);
define('BASE', str_replace('\\', DS, realpath(__DIR__)));

/**
* Load the application, and exit the boot!
*/

require BASE . '/Nevada.php';

?>