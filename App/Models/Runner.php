<?php


    class Runner extends Orm {

        public function __construct() {
            parent::__construct('runners');
            
            if(!isset($_SESSION["number"])) {
                $_SESSION["number"] = '1';
            }
           
        }


        public function getRunnerByNumber($number){
           foreach ($_SESSION['runners'] as $runner) {
               if($runner['number'] == $number){
                   return $runner;
               }
           }
        }
    }

?>
