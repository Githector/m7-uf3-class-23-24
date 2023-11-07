<?php


    class Race{

        public function __construct() {
            if(!isset($_SESSION['id_race'])){
                $_SESSION['id_race'] = '1';
            }        
           
        }

        public function setRace($race){
            $_SESSION['race'] = $race;
        }

        public function getRace(){
            if (isset($_SESSION['race'])){
                return $_SESSION['race'];
            }else{
                return null;
            }
            
        }

        public function unsetRace(){
            unset($_SESSION['race']);
        }

    }

?>