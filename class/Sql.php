<?php
class Sql extends PDO{
    private $conecta;
    
    public function __construct(){
        $this->conecta = new PDO("mysql:host=localhost;dbname=biblio", "brenda", "biblio");
    }
    private function setParams($statement, $parameters = array()){
        foreach ($params as $key => $value){
            $this->setParam($key, $value);
        }
    }
    private function setParam($statement, $key, $value){
        $statement->bindParam($statement, $key, $value);
    }
    
    public function query($rawQuery, $params = array()) {
   
        $stmt = $this->conecta->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }
    public function select($rawQuery, $params = array()):array{
   
        $stmt = $this->query($rawQuery, $params);
        $stmt->fetchAll();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}  