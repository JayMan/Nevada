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

class Response 
{
    public $_route = array();
    public $sessionStorage = array();
    
    public function __construct()
    {
        /**
        * We need to create a session storage
        * before you can actually use sessions.
        * Lets do it!
        */
        
        try {
            /**
            * Start the session interpreter.
            */
            
            session_start();
			
        }catch(Exception $e)
        {
            trigger_error('Sessions could not start. ' . $e->getMessage());
        }
    }
    
    public function session($key, $value = null)
    {                                           
        if($value == null) {
            $this->sessionStorage = $_SESSION[$key];
            
            /**
            * Check if the session really exists.. If it does
            * exists, we can kill it.
            */
            
            if(isset($this->sessionStorage))
            {
                unset($this->sessionStorage);
            }
        } else
        {
            /**
            * The session does not exists, so we want
            * to create it. Alright, lets do it.
            * 
            * @var Response
            */
           $this->sessionStorage = $_SESSION[$key] = $value; 
        }
        
        return $this->sessionStorage;
        
        
    }
    
    public function init(Closure $route=null)
    {
        $this->_route = $route;
        
        if(is_callable($this->_route))
        {
            $this->_route();
        }
        
    }
}
?>
