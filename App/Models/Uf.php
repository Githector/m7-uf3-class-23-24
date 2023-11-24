<?php


    class Uf extends Orm {

        public function __construct() {
            parent::__construct('ufs');
        }




        public static function createTable(){
            $db = new Database();
            $connection = $db->getConnection();
            $sql = "CREATE TABLE IF NOT EXISTS `ins`.`ufs` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `uf_number` INT NOT NULL,
                `uf_name` VARCHAR(100) NOT NULL,
                `uf_hours` INT NOT NULL,
                `mp_id` INT NOT NULL,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`mp_id`) REFERENCES `ins`.`mps`(`id`) ON DELETE CASCADE
            ) ENGINE=InnoDB;";
            $db->queryDataBase($sql);
        }

        public function getUfsByMpId($id){
            $db = new Database();
            $sql = "SELECT * FROM ufs WHERE mp_id = :mp_id";
            $params = [
                ":mp_id" => $id
            ];

            $result = $db->queryDataBase($sql, $params);
            return $result->fetchAll();

        }


    }

    



?>