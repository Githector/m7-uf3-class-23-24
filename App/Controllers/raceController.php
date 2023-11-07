<?php 

    class raceController extends Controller{
            
            public function index(){

                $params['started'] = false;
                $this->render("race/index", $params, "site");
            }

            public function start(){
                $params['started'] = true;
                $this->render("race/index", $params, "site");
            }

    }

?>