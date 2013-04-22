<?php
    /**
    * Standard controller layout.
    *
    * @package Netflex core.
    */
    class CCIndex implements IController {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() {   
          global $net;
          $net->data['title'] = "The Index Controller";
       }

    } 
