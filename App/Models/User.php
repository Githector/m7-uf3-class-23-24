<?php


    class User extends Orm {

        public function __construct() {
            parent::__construct('users');
        }

        public static function createTable(){
            $db = new Database();
     
            $sql = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                salt VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            );";
            $db->queryDataBase($sql);
        }

        public function login($username,$pass){
            $pepper = "hola";
            $db = new Database();
            $sql = "SELECT * FROM users WHERE username = :username";
            $params = [
                ":username" => $username
            ];

            $result = $db->queryDataBase($sql,$params);

            $userDB = $result->fetch();
            $saltDB = $userDB['salt'];
            $passDB = $userDB['password'];

            $passwordToCheck = $pepper . $pass . $saltDB;

            if(password_verify($passwordToCheck,$passDB)){
                echo "Login ok";
            }else{
                echo "login failed";
            }




        }

    }