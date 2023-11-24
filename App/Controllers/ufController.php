<?php 

    include_once(__DIR__ . "/../Models/Uf.php");
    include_once(__DIR__ . "/../Models/Mp.php");

    class ufController extends Controller{
            
            public function index($id){
                $mpModel = new Mp();
                $params['mp'] = $mpModel->getById($id);
                $ufModel = new Uf();
                $params['ufs'] = $ufModel->getUfsByMpId($id);

                $this->render("uf/index", $params, "site");
            }

            public function store($param){

                $id_mp = $_POST['mp_id'];
                $uf = [
                    "uf_number" => $_POST['uf_number'],
                    "uf_name" => $_POST['uf_name'],
                    "uf_hours" => $_POST['uf_hours'],
                    "mp_id" => $id_mp
                ];

                $ufModel = new Uf();
                $ufModel->store($uf);
                header("Location: /uf/index/$id_mp");
            }

            public function edit($id){

                $ufModel = new Uf();
                $params['uf'] = $ufModel->getById($id);


                $this->render("uf/edit", $params, "site");
            }

            public function update($id){

                $id_mp = $_POST['mp_id'];
                $uf = [
                    "id" => $id,
                    "uf_number" => $_POST['uf_number'],
                    "uf_name" => $_POST['uf_name'],
                    "uf_hours" => $_POST['uf_hours'],
                    "mp_id" => $id_mp
                ];

                $ufModel = new Uf();
                $uf = $ufModel->store($uf);

                header("Location: /uf/index/$id_mp");

            }

            public function destroy($id){

                $mp_id = $_GET['mp_id'];
                $ufModel = new Uf();
               
                $uf = $ufModel->destroy($id);

                //header("Location: /uf/index/$mp_id");
                header("Location: " . $_SERVER['HTTP_REFERER']);

            }

    }

?>