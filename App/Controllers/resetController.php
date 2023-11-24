<?php 

    include_once(__DIR__ . "/../Models/Mp.php");
    include_once(__DIR__ . "/../Models/Uf.php");
    include_once(__DIR__ . "/../Models/User.php");
    class resetController extends Controller{
            
            public function run(){


                $sql = 'DROP TABLE IF EXISTS mps,ufs,users';
                
                $db = new Database();
                $db->queryDataBase($sql);
                
                Mp::createTable();
                Uf::createTable();
                User::createTable();

             
                $mpModel = new Mp();
                $mp1 = [
                    "mp_number" => 1,
                    "mp_name" => "Sistemes informàtics"
                ];

                $mpModel->store($mp1);
                $mpModel = new Mp();
                $mp2 = [
                    "mp_number" => 2,
                    "mp_name" => "Bases de dades"
                ];

                $mpModel->store($mp2);
                $mpModel = new Mp();
                $mp3 = [
                    "mp_number" => 3,
                    "mp_name" => "Programació"
                ];

                $mpModel->store($mp3);
                $mpModel = new Mp();
                $mp4 = [
                    "mp_number" => 4,
                    "mp_name" => "Llenguatges de marques i sistemes de gestió d'informació"
                ];

                $mpModel->store($mp4);
                $mpModel = new Mp();
                $mp5 = [
                    "mp_number" => 5,
                    "mp_name" => "Entorn client"
                ];

                $mpModel->store($mp5);
                $mpModel = new Mp();
                $mp6 = [
                    "mp_number" => 6,
                    "mp_name" => "Desenvolupament web en entorn servidor"
                ];

                $mpModel->store($mp6);
              
                $ufModel = new Uf();
                $uf1 = [
                    "uf_number" => 1,
                    "uf_name" => "Sistemes operatius en xarxa",
                    "uf_hours" => 33,
                    "mp_id" => 1
                ];

                $ufModel->store($uf1);

                $ufModel = new Uf();

                $uf2 = [
                    "uf_number" => 2,
                    "uf_name" => "Implantació de sistemes operatius",
                    "uf_hours" => 50,
                    "mp_id" => 1
                ];

                $ufModel->store($uf2);

                $ufModel = new Uf();

                $uf3 = [
                    "uf_number" => 3,
                    "uf_name" => "Administració de sistemes operatius",
                    "uf_hours" => 40,
                    "mp_id" => 1
                ];

                $ufModel->store($uf3);

                $ufModel = new Uf();

                $uf4 = [
                    "uf_number" => 4,
                    "uf_name" => "Servidors web d'aplicacions",
                    "uf_hours" => 73,
                    "mp_id" => 1
                ];  

                $ufModel->store($uf4);

                $ufModel = new Uf();

                $uf5 = [
                    "uf_number" => 1,
                    "uf_name" => "Implantació de bases de dades",
                    "uf_hours" => 34,
                    "mp_id" => 2
                ];

                $ufModel->store($uf5);

                $ufModel = new Uf();

                $uf6 = [
                    "uf_number" => 2,
                    "uf_name" => "Disseny de bases de dades",
                    "uf_hours" => 20,
                    "mp_id" => 2
                ];

                $ufModel->store($uf6);

                $ufModel = new Uf();

                $uf7 = [
                    "uf_number" => 3,
                    "uf_name" => "Desenvolupament de bases de dades",
                    "uf_hours" => 17,
                    "mp_id" => 2
                ];

                $ufModel->store($uf7);

                $ufModel = new Uf();


                $uf8 = [
                    "uf_number" => 4,
                    "uf_name" => "Administració de bases de dades",
                    "uf_hours" => 33,
                    "mp_id" => 2
                ];

                $ufModel->store($uf8);

                $ufModel = new Uf();

                $uf9 = [
                    "uf_number" => 1,
                    "uf_name" => "Programació de serveis i processos",
                    "uf_hours" => 20,
                    "mp_id" => 3
                ];

                $ufModel->store($uf9);

                $ufModel = new Uf();

                $uf10 = [
                    "uf_number" => 2,
                    "uf_name" => "Accés a dades",
                    "uf_hours" => 15,
                    "mp_id" => 3
                ];

                $ufModel->store($uf10);

                $ufModel = new Uf();

                $uf11 = [
                    "uf_number" => 3,
                    "uf_name" => "Desenvolupament de interfícies",
                    "uf_hours" => 12,
                    "mp_id" => 3
                ];

                $ufModel->store($uf11);

                $ufModel = new Uf();

                $uf12 = [
                    "uf_number" => 4,
                    "uf_name" => "Programació multimèdia i dispositius mòbils",
                    "uf_hours" => 45,
                    "mp_id" => 3
                ];

                $ufModel->store($uf12);

                $ufModel = new Uf();

                $uf13 = [
                    "uf_number" => 1,
                    "uf_name" => "Sistemes de gestió empresarial",
                    "uf_hours" => 43,
                    "mp_id" => 4
                ];

                $ufModel->store($uf13);

                $ufModel = new Uf();


                $uf14 = [
                    "uf_number" => 2,
                    "uf_name" => "Llenguatges de marques i sistemes de gestió d'informació",
                    "uf_hours" => 21,
                    "mp_id" => 4
                ];

                $ufModel->store($uf14);

                header("Location: /mp/index");
            }

    }

?>