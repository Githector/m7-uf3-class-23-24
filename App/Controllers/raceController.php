<?php 

    class raceController extends Controller{
            
            public function index(){
                $params = [];
                $this->render("race/index", $params, "site");
            }

            public function start(){
                
                $raceModel = new Race();
                
                
                $params['race'] = array(
                    "id_race" => $_SESSION['id_race']++,
                    "name_race" => $_POST['name_race'],
                    "init_race" => new DateTime("now",new DateTimeZone("Europe/Madrid")),
                    "finish_race" => null,

                 );

                $raceModel->insert($params['race']);
                
                
                $this->render("race/index", $params, "site");
            }

            public function end(){
                $raceModel = new Race();
                $race = $raceModel->getById($_GET['id_race']);
                $race['finish_race'] = new DateTime("now",new DateTimeZone("Europe/Madrid"));
                
            }

    }

?>