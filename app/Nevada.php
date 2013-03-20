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

class _Nevada
{             
    static $getLibs;
    
    /**
    * Here we gonna define the class names into
    * a variable 
    * 
    */
    
    static $core, $router, $request, $response;
         
    public function __construct($checkInstaller = true)
    {
       if($checkInstaller === true)
       {
           if(file_exists(BASE . '/install/installer.php'))
           {
               header('Location: '. BASE .'/install/installer.php');
               exit;
           }
       }
       
       /**
       * We need libraries to load, before we can do anything..
       * So we gonna load libs.
       */
       
       self::$getLibs = array('management', 'libs');
      
       foreach(self::$getLibs as $row)
       {    
           /**
           * Does every directory exists? If it doesnt
           * just give a die to the system.
           */
           
           ((is_dir(BASE . '/' . $row)) ?: die('The directory <b> ' . $row . ' </b> does not exists.'));
           
           foreach(glob(BASE . '/'.$row.'/*.php') as $includedFile)
           {
               require $includedFile;
           }
            
       }
       
      /**
      * Require the necessery classes.
      */
      
      self::$core = new Core();
      self::$router = new Router();

    }

}
?>
