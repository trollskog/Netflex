<?php
    /**
    * Bootstrapping, setting up and loading the core.
    *
    * @package Netflex core.
    */

    /**
    * Enable auto-load of class declarations.
    */
    function autoload($aClassName) {
      $classFile = "/src/{$aClassName}/{$aClassName}.php";
       $file1 = NETFLEX_INSTALL_PATH . $classFile;
       $file2 = NETFLEX_SITE_PATH . $classFile;
       if(is_file($file1)) {
          require_once($file1);
       } elseif(is_file($file2)) {
          require_once($file2);
       }
    }
    spl_autoload_register('autoload');
