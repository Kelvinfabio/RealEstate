<?php
class Utilizador{
    private $con;
    public function __construct($conn){
        $this->con = $conn;
    }
    public function getUtilizador(){
        $stmt = $this->con->query("select * from cliente");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getVivenda(){
        $stmt = $this->con->query("SELECT id_vivenda,Num_quarto,Num_WC,Num_Sala,Num_cozinha,Titulo,AnoConstru,Preco,AreaImovel,Localizacao,Topologia
                                    FROM vivenda JOIN imoveis on imoveis.id_imoveis = vivenda.id_imoveis;");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function add($user){
        $nome = $user["Nome"];
        $Email = $user['Email'];
        $pass = $user["Password"];


        $query = "insert into cliente(Nome,Email,Password)values(?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$nome,$Email,$pass]);
    }
    public function addProprietario($user){
        $nome = $user["Nome"];
        $Sobrenome = $user["Sobrenome"];
        $Email = $user['Email'];
        $pass = $user["Password"];


        $query = "insert into proprietario(Nome,Sobrenome,Email,Password)values(?,?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$nome,$Sobrenome,$Email,$pass]);
    }
    public function LoginProprietario($user){
        $Email = $user['Email'];
        $pass = $user["Password"];

        $query = "SELECT * from proprietario WHERE email = ? AND Password= ? ";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$Email,$pass]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getUserById($id){
        $query = "select * from cliente where id_cliente = ?";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }
    public function delete($id){
        $query = "delete from usuario where id_user = ?";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject();
        return $result;
    }
    public function update($id,$user){
        $query = "update usuario set user_mail = ? ,pass = ? where id_user = ?";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$user["user_mail"],$user["pass"],$id]);
    }
}