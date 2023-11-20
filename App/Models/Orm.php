<?php
class Orm {

    protected $model;

    public function __construct($model) {
        if(!isset($_SESSION[$model])) {
            $_SESSION[$model] = [];
        }
        $this->model = $model;
        
    
        
    }

    public function getAll() {
        //return $_SESSION[$this->model];
        $db = new Database();
        $sql = "SELECT * FROM " . $this->model;
        $params = [];
        $result = $db->queryDataBase($sql, $params);
        //echo "<pre>";
        //print_r($result->fetchAll());
        //echo "</pre>";
        return $result->fetchAll();
        //return null;
    }

    public function getById($id) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $id) {
                return $value;
            }
        }
    }


    public function updateById($data) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $data['id']) {
                $_SESSION[$this->model][$key] = $data;
            }
        }
    }


}
?>