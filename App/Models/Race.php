<?php


    class Race extends Orm {

        public function __construct() {
            parent::__construct('races');
            
            if(!isset($_SESSION["id_race"])) {
                $_SESSION["id_race"] = '1';
            }
           
        }

    }

?>