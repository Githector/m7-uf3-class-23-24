<?php


    class Arrival extends Orm {

        public function __construct() {
            parent::__construct('arrivals');
            
            if(!isset($_SESSION["id_arrival"])) {
                $_SESSION["id_arrival"] = '1';
            }
           
        }

    }

?>