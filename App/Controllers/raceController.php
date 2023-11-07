<?php 
    include_once(__DIR__."/../Models/Race.php");
    include_once(__DIR__."/../Models/Runner.php");
    include_once(__DIR__."/../Models/Arrival.php");
    class raceController extends Controller{
            
            public function index(){
                $raceModel = new Race();
                $r = $raceModel->getRace();
                if(!is_null($r)){
                    $params['race'] = $r;
                    $params['arrivals'] = (new Arrival())->getAll();

                }else{
                    $params = [];
                }
                $this->render("race/index", $params, "site");
            }

            public function start(){
                
                $raceModel = new Race();
                
                
                $params['race'] = array(
                    "id_race" => $_SESSION['id_race']++,
                    "name_race" => $_POST['race_name'],
                    "init_race" => new DateTime("now",new DateTimeZone("Europe/Madrid")),
                    "finish_race" => null,

                 );

                $raceModel->setRace($params['race']);
                              
                $this->render("race/index", $params, "site");
            }

            public function arrival(){
                $runnerModel = new Runner();
                $raceModel = new Race();
                $arrivalModel = new Arrival();
                
                $r = $runnerModel->getRunnerByNumber($_POST['number']);
                $dt = new DateTime("now",new DateTimeZone("Europe/Madrid"));
                
                $params['race'] = $raceModel->getRace();
                $int = $params['race']['init_race']->diff($dt);
                $time_string = $int->h . "h " . $int->i . "min " . $int->s . "s";

                $arrival = array(
                    'runner' => $r,
                    'time' => $time_string
                );

                            
                $arrivalModel->insert($arrival);

                $params['arrivals'] = $arrivalModel->getAll();
                

                $this->render("race/index", $params, "site");
            }

            public function finish(){
                
                $raceModel = new Race();
                $raceModel->unsetRace();
                $arrivalsModel = new Arrival();
                $arrivalsModel->truncate();

                header("Location: /race/index");

                
            }

    }

?>