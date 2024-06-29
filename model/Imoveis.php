<?php
class Imoveis{
    private $conn;
    public function __construct($con){
        $this->conn = $con;
    }

    public function getProprietyById($id){
        $query = "SELECT * from imoveis WHERE id_proprietario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }
}