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

        public static function createRunnersTable(){
            $db = new Database();
            $connection = $db->getConnection();
            $sql = "CREATE TABLE `running`.`runners` (`id_runner` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `surname` INT NOT NULL , `birthdate` DATETIME NOT NULL , `gender` VARCHAR(100) NOT NULL , `club` VARCHAR(100) NOT NULL , PRIMARY KEY (`id_runner`)) ENGINE = InnoDB;";
            $db->queryDataBase($sql);
        }
    }

?>
