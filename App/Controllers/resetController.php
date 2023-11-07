<?php 

    include_once(__DIR__ . "/../Helpers/runner.php");
    class resetController extends Controller{
            
            public function run(){
                $_SESSION['runners'] = [];
                $_SESSION['number'] = '1';
               

                $birthdate = new DateTime("1980-03-07");
                $gender = "male";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "Hector",
                    "surname" => "Ortiz",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "Club Atletisme Campdevànol",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );

                $_SESSION['runners'][] = $runner;



                $birthdate = new DateTime("1999-02-17");
                $gender = "female";
                
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "Ana",
                    "surname" => "García",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "Club Atlètic Vic",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );

                $_SESSION['runners'][] = $runner;


                $birthdate = new DateTime("2010-04-28");
                $gender = "male";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "Carlos",
                    "surname" => "López",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "Club Atletisme Campdevànol",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );
                $_SESSION['runners'][] = $runner;


                $birthdate = new DateTime("1952-04-20");
                $gender = "female";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "María",
                    "surname" => "Martínez",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "Club Atletisme Girona",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );
                $_SESSION['runners'][] = $runner;


                $birthdate = new DateTime("1999-10-23");
                $gender = "male";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "David",
                    "surname" => "Sánchez",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "FC Barcelona",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );
                $_SESSION['runners'][] = $runner;


                $birthdate = new DateTime("1975-01-02");
                $gender = "female";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "Laura",
                    "surname" => "Ramírez",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "AE Manlleu",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );
                $_SESSION['runners'][] = $runner;


                $birthdate = new DateTime("2000-01-01");
                $gender = "male";
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => "Pedro",
                    "surname" => "Gómez",
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => "CE Torelló",
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender)
                );
                $_SESSION['runners'][] = $runner;

                
                // Puedes acceder a cada uno de los arrays $runner1, $runner2, etc., para obtener los datos de cada persona.
                



                header("Location: /runner/index");
            }

    }

?>