<?php 
    include_once(__DIR__ . "/../Models/Runner.php");
    include_once(__DIR__ . "/../Helpers/runner.php");
    class runnerController extends Controller{
            
            public function index(){

                $runnerModel = new Runner();
                $params['runners'] = $runnerModel->getAll();
                if(isset($_SESSION['flash'])){
                    $params['flash'] = $_SESSION['flash'];
                    unset($_SESSION['flash']);
                }
                $this->render("runner/index", $params, "site");
            }

            public function store(){

                $name = $_POST["name"] ?? null;
                $surname = $_POST["surname"] ?? null;
                $birthdate_string = $_POST["birthdate"] ?? null;
                $gender = $_POST['gender'] ?? null;
                $club = $_POST['club'] ?? null;
                $birthdate = DateTime::createFromFormat('Y-m-d', $birthdate_string);
                $runnerModel = new Runner();
                $runner = array(
                    "number" => $_SESSION["number"]++,
                    "name" => $name,
                    "surname" => $surname,
                    "birthdate" => $birthdate,
                    "gender" => $gender,
                    "club" => $club,
                    "age" => getEdat($birthdate),
                    "category" => getCategory($birthdate, $gender),
                );
                $runnerModel->insert($runner);
                $_SESSION['flash'] = "Runner created successfully";

                header("Location: /runner/index");
            }

    }

?>