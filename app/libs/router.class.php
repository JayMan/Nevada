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

namespace Nevada\Mvc;

class Router 
{
    public $pageParam;
    
    public function __construct()
    {
        /**
        * Navigates the webpage. First, we need to
        * explode the page render url and then we are going
        * to navigate each web page.
        */
        
       $this->pageParam = $_GET['url'];
       
       /**
       * If no page requested, just go to the index.
       * Nothing better todo, right?
       */
       
       if(!isset($this->pageParam))
       {
           echo 'Welkom op de index';
       } 
  
       /**
       * If the page that you requested don't exists,
       * give it a 404 Error 
       */
       
       ((file_exists(BASE . '/controller/' . $this->pageParam . '.php')) ?: die('404 error.'));
  
    }
}
?>
