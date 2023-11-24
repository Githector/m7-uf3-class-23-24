<?php
class Orm {

    protected $model;
    protected $db;

    public function __construct($model) {

        $this->model = $model;
        $this->db = new Database();
        
    
        
    }

    public function getAll() {
        //return $_SESSION[$this->model];

        $sql = "SELECT * FROM " . $this->model;
        $params = [];
        $result = $this->db->queryDataBase($sql, $params);
        //echo "<pre>";
        //print_r($result->fetchAll());
        //echo "</pre>";
        return $result->fetchAll();
        //return null;
    }

    public function getById($id) {
        
        $sql = "SELECT * FROM $this->model WHERE id= :id";
        $params = [
            ":id" => $id
        ];
        $result = $this->db->queryDataBase($sql, $params);
        return $result->fetch();


    }


    public function updateById($data) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $data['id']) {
                $_SESSION[$this->model][$key] = $data;
            }
        }
    }

    public function store($item){

        if(isset($item['id'])){
            $values_sql_update = "";
            foreach($item as $key => $value){
                if($key!='id'){
                    $values_sql_update .= "$key = :$key, ";
                }
            }
            $values_sql_update = substr($values_sql_update,0,-2);

            $sql = "UPDATE $this->model SET $values_sql_update WHERE id=:id";

        }else{
            $r = array_keys($item);
            $column = implode(", ", $r);
            $values = ":" . implode(", :", $r);
    
            $db = new Database();
            $sql = "INSERT INTO `" . $this->model . "` ($column) VALUES ($values);";
    
        
        }

        foreach($item as $key => $value){
            $params[":$key"] = $value;
        }
        

        //update mps set mp_number=:mp_number,mp_name=:mp_name WHERE id = :id;
        

        $result = $this->db->queryDataBase($sql, $params);
        return $result;
    }

    public function destroy($id){
        $sql = "DELETE FROM $this->model WHERE id= :id";
        $params = [
            ":id" => $id
        ];

        $result = $this->db->queryDataBase($sql, $params);
        return $result;

    }

    // public function getItemsByForeignKey($key){
    //     $sql = "SELECT * 
    //             FROM $this->model WHERE :key= :id";
    //     $params = [
    //         ":id" => $id
    //     ];
    //     $result = $this->db->queryDataBase($sql, $params);
    //     return $result->fetch();
    // }


}
?>