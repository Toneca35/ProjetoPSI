<?php


/* ==================================================================== 
        CLASS PRICE
====================================================================*/
    
       require("Bridge.php");
    
       class Price extends Bridge{
        
        private $iIdPrice;
        private $dPrice;
        
        

        public function __construct(){
            parent::__construct("tb_Price");
        }

    }
