<?php


    class Mp extends Orm {

        public function __construct() {
            parent::__construct('mps');
        }



        public static function createMpsTable(){
            $db = new Database();
            $sql = "CREATE TABLE `ins`.`mps` (`mp_id` INT NOT NULL AUTO_INCREMENT , `mp_number` INT NOT NULL , `mp_name` VARCHAR(100) NOT NULL , PRIMARY KEY (`mp_id`)) ENGINE = InnoDB;";
            $params = [];
            $result = $db->queryDataBase($sql, $params);
            return $result;
        }

        public function add($item){
            $db = new Database();
            $sql = "INSERT INTO `" . $this->model . "` (`mp_id`, `mp_number`, `mp_name`) VALUES (NULL, :mp_number, :mp_name);";
            $params = [
                ":mp_number" => $item['mp_number'],
                ":mp_name" => $item['mp_name']
            ];
            $result = $db->queryDataBase($sql, $params);
            return $result;
        }

    }

    



?>