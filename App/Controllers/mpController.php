<?php 

    include_once(__DIR__ . "/../Models/Mp.php");

    class mpController extends Controller{
            
            public function index(){

                $mpModel = new Mp();
                $params['mps'] = $mpModel->getAll();

                $this->render("mp/index", $params, "site");
            }

            public function store($param = null){
                $mpModel = new Mp();
                $mp = [
                    "mp_number" => $_POST['mp_number'],
                    "mp_name" => $_POST['mp_name']
                ];  
                $mp = $mpModel->store($mp);
                header("Location: /mp/index");
            }

            public function edit($param){
                $mpModel = new Mp();
                $params['mp'] = $mpModel->getById($param);
                

                $this->render("mp/edit", $params, "site");
            }

            public function update($param){
                $mp = [
                    "id" => $param,
                    "mp_number" => $_POST['mp_number'],
                    "mp_name" => $_POST['mp_name']
                ];
                $mpModel = new Mp();
                $mp = $mpModel->store($mp);

                header("Location: /mp/index");
            }

            public function destroy($id){
                $mpModel = new Mp();
                $mpModel->destroy($id);

                header("Location: /mp/index");
            }

    }

?>