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

define('IN_INDEX', null);

use \Nevada\Mvc\_Nevada;

require 'app/boot.php';

/**
* Boot the application..
*/

new _Nevada();

_Nevada::$core->testFunction();