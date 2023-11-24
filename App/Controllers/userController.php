<?php 

    include_once(__DIR__ . "/../Models/User.php");

    class userController extends Controller{
            
            public function store(){
                $username ="hector";
                $password = "1234";

                $salt = bin2hex(random_bytes(16));
                $pepper = "hola";

                $passwordWithPepperAndSalt = $pepper . $password . $salt;

                $hashedPassword = password_hash($passwordWithPepperAndSalt,PASSWORD_BCRYPT);

                $user = [
                    "username" => $username,
                    "password" => $hashedPassword,
                    "salt" => $salt
                ];

                $userModel = new User();


                $userModel->store($user);





                $this->render("test/test", [], "site");
            }


            public function login(){

                $username = "hector";
                $pass = "12345";

                $userModel = new User();
                $userModel->login($username,$pass);



                $this->render("test/test", [], "site");
            }

    }

?>