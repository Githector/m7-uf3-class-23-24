<?php


    class Mp extends Orm {

        public function __construct() {
            parent::__construct('mps');
        }



        public static function createTable(){
            $db = new Database();
            $connection = $db->getConnection();
            $sql = "CREATE TABLE IF NOT EXISTS `ins`.`mps` (`id` INT NOT NULL AUTO_INCREMENT , `mp_number` INT NOT NULL , `mp_name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
            $db->queryDataBase($sql);
        }



    }

    



?>