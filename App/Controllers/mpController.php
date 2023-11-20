<?php 

    include_once(__DIR__ . "/../Models/Mp.php");

    class mpController extends Controller{
            
            public function index(){

                $mpModel = new Mp();
                $params['mps'] = $mpModel->getAll();

                $this->render("mp/index", $params, "site");
            }

            public function store(){
                $mpModel = new Mp();
                $mp = $mpModel->add($_POST);
                header("Location: /mp/index");
            }

    }

?>