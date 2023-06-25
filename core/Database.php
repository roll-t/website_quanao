<?php
class Database {
    private $__conn;
    // kết nối database
    use QueryBuilder;
    public function __construct() {
        global $db_configs;
        $this->__conn = Connection::getInstance($db_configs);
    }
    public function insert($table, $data) {
        if (!empty($data)) {
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fieldStr .= $key . ',';
                $valueStr .= "'" . $value . "',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');
            
            $sql = "INSERT INTO $table ($fieldStr) VALUES ($valueStr)";
            $status = $this->query($sql);
            
            if ($status) {
                return true;
            }
        }
        
        return false;
    }
    
    public function update($table, $data, $condition = '') {
        if (!empty($data)) {
            $updateStr = '';
            
            foreach ($data as $key => $value) {
                $updateStr .= $key . "='" . $value . "',";
            }
            
            $updateStr = rtrim($updateStr, ',');
            
            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            } else {
                $sql = "UPDATE $table SET $updateStr";
            }
            
            $status = $this->query($sql);
            
            if ($status) {
                return true;
            }
        }
        
        return false;
    }
    
    public function delete($table, $condition = '') {
        if (!empty($condition)) {
            $sql = "DELETE FROM $table WHERE $condition";
        } else {
            $sql = "DELETE FROM $table";
        }
        
        $status = $this->query($sql);
        
        if ($status) {
            return true;
        }
        
        return false;
    }
    
    public function query($sql) {
        try{
            $statement = $this->__conn->prepare($sql);
            $statement->execute();
            return $statement;
        }catch(Exception $exception){
            $mess=$exception->getMessage();
            $data['mess']=$mess;
            App::$app->loadError('database',$data);
            die();
        }
    }
    
    public function lastInsertId() {
        return $this->__conn->lastInsertId();
    }
}
