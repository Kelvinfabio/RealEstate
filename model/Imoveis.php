<?php
class Imoveis{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }

    public function getProprietyById($id){
        $id_proprietario = $id;

        $query = "SELECT * from imoveis WHERE id_proprietario = ?";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id_proprietario]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPropriety(){
        $stmt = $this->con->query("SELECT * from imoveis");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function InsertImovel($data){
        $id_proprietario = $data['id_proprietario'];
        $Titulo = $data['Titulo'];
        $AnoConstru = $data['AnoConstru'];
        $Preco = $data['Preco'];
        $AreaImovel =$data['AreaImovel'];
        $Localizacao =$data['Localizacao'];
        $Topologia =$data['Topologia']; 

        try {
            $this->con->beginTransaction();
    
            $query = "insert into imoveis(id_proprietario,Titulo,AnoConstru,Preco,AreaImovel,Localizacao,Topologia)VALUES(?,?,?,?,?,?,?)";
            $stmt = $this->con->prepare($query);
            $stmt->execute([$id_proprietario, $Titulo, $AnoConstru, $Preco, $AreaImovel, $Localizacao, $Topologia]);
    
            $lastInsertId = $this->con->lastInsertId();
    
            if (str_starts_with($Topologia, "a") || str_starts_with($Topologia, "A")|| str_starts_with($Topologia, "Ap")||str_starts_with($Topologia, "ap")) {
                $this->InsertApartamento(['id_imoveis' => $lastInsertId, 'Num_quarto' => $data['Num_quarto'], 'Num_sala' => $data['Num_sala'], 'Num_cozinha' => $data['Num_cozinha'], 'Num_WC' => $data['Num_WC']]);
            } elseif (str_starts_with($Topologia, "v") || str_starts_with($Topologia, "V")) {
                $this->InsertVivenda(['id_imoveis' => $lastInsertId, 'Num_quarto' => $data['Num_quarto'], 'Num_sala' => $data['Num_sala'], 'Num_cozinha' => $data['Num_cozinha'], 'Num_WC' => $data['Num_WC']]);
            } elseif (str_starts_with($Topologia, "T") || str_starts_with($Topologia, "t")) {
                $this->InsertTerreno(['id_imoveis' => $lastInsertId, 'Zona' => $data['Zona']]);
            }
    
            $this->con->commit();
        } catch (PDOException $e) {
            $this->con->rollBack();
            throw $e;
        }
    }
    public function InsertApartamento($data){
        $id_imoveis = $data['id_imoveis'];
        $Num_quarto= $data['Num_quarto'];
        $Num_sala = $data['Num_sala'];
        $Num_cozinha =$data['Num_cozinha'];
        $Num_WC =$data['Num_WC'];

        $query = "insert into apartamento(id_imoveis,Num_quarto,Num_sala,Num_cozinha,Num_WC)VALUES(?,?,?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id_imoveis,$Num_quarto,$Num_sala,$Num_cozinha,$Num_WC]);
    }
    public function InsertVivenda($data){
        $id_imoveis = $data['id_imoveis'];
        $Num_quarto= $data['Num_quarto'];
        $Num_sala = $data['Num_sala'];
        $Num_cozinha =$data['Num_cozinha'];
        $Num_WC =$data['Num_WC'];

        $query = "insert into vivenda(id_imoveis,Num_quarto,Num_sala,Num_cozinha,Num_WC)VALUES(?,?,?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id_imoveis,$Num_quarto,$Num_sala,$Num_cozinha,$Num_WC]);
    }
    public function InsertTerreno($data){
        $id_imoveis = $data['id_imoveis'];
        $Zona= $data['Zona'];

        $query = "insert into terreno(id_imoveis,Zona)VALUES(?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$id_imoveis,$Zona]);
    }
}