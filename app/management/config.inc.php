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

$_config['mysql']['driver'] = 'mysqli'; // mysqli or pdo
$_config['mysql']['hostname'] = 'localhost'; // 127.0.0.1 or localhost
$_config['mysql']['username'] = 'root'; // usually root
$_config['mysql']['password'] = ''; // your mysql password
$_config['mysql']['database'] = 'phoenix'; // database name (eg:holo)

$_config['site']['path'] = 'http://localhost/Nevada'; // directory of CMS
$_config['site']['cloudflare'] = true; // cloudflare api enabled? 

$_config['client']['port'] = '30000'; // emulator port
$_config['client']['vars'] = '/variables.txt'; // external variables
$_config['client']['texts'] = '/texts.txt'; // external texts
$_config['client']['swf'] = '/Habbo.swf'; // your swf
$_config['client']['base'] = '/swfs/'; // the base of your base

$_config['system']['admin'] = 'Jayden'; // the head admin for managment
$_config['system']['emulator'] = 'Butterfly'; // butterfly / phoenix / sierra

$_config['template']['skin'] = 'Habbo'; // the skin you want to use

$_config['security']['sso'] = 'enabled' // enabled or disable sso tickets
$_config['security']['hash'] = sha1($password . md5($string)); // security hash

$_config['housekeeping']['enable'] = true; // housekeeping on? true / false
$_config['housekeeping']['pincode'] = '1234'; // the 4 digit pin for housekeeping
$_config['housekeeping']['permission'] = ''; // will do later

$_config['links']['footerlinks'] = 'Community','Forum','Staff','Safety','Support';
$_config['links']['footerlinks'] = 'community.php','forum.php','staff.php','safety.php','support.php';

$_config['footer']['text'] = "This hotel is powered by NevadaCMS & " . $this->['system']['Emulator'];

// Please keep some credit & enjoy!

?>
