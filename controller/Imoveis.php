<?php
require_once '../conexao/conexao.php';
require_once '../model/utilizador.php';
require_once '../model/Imoveis.php';


$user = new Utilizador($con);
$imovel = new Imoveis($con);
header('Content-Type:application/json');
$endpoint = $_SERVER['PATH_INFO'];
$method = $_SERVER['REQUEST_METHOD'];
$r;
switch ($method) {
    case 'GET':
        if ($endpoint === '/imoveis') {
            $r = $user->getUtilizador();
            echo json_encode($r);
        } else if (preg_match('/^\/imoveis\/(\d+)$/', $endpoint, $matches)) {
            $id = $matches[1];
            $r = $user->getUserById($id);
            echo json_encode([$r]);
        } 
        break;
    case 'POST':
        if ($endpoint === '/imoveis') {
            $data = json_decode(file_get_contents('php://input'), true);
            $imovel->InsertImovel($data);
            echo json_encode(['Imovel inserido com sucesso']);
        } else if ($endpoint === '/imoveis/apartamento') {
            $data = json_decode(file_get_contents('php://input'), true);
            $imovel->InsertApartamento($data);
            echo json_encode(['Apartamento inserido com sucesso']);
        }
        else if ($endpoint === '/imoveis/vivenda') {
            $data = json_decode(file_get_contents('php://input'), true);
            $imovel->InsertVivenda($data);
            echo json_encode(['Vivenda inserido com sucesso']);
        }
        else if ($endpoint === '/imoveis/vivenda') {
            $data = json_decode(file_get_contents('php://input'), true);
            $imovel->InsertVivenda($data);
            echo json_encode(['Vivenda inserido com sucesso']);
        }else if ($endpoint === '/imoveis/Terreno') {
            $data = json_decode(file_get_contents('php://input'), true);
            $imovel->InsertTerreno($data);
            echo json_encode(['Terreno inserido com sucesso']);
        }
        break;
    case 'DELETE':
        if (preg_match('/^\/user\/(\d+)$/', $endpoint, $matches)) {
            $id = $matches[1];
            $r = $user->delete($id);
            echo json_encode(['msg' => $r]);
        }
        break;
    case 'PUT':
        if (preg_match('/^\/user\/(\d+)$/', $endpoint, $matches)) {
            $id = $matches[1];
            $data = json_decode(file_get_contents('php://input'), true);
            $user->update($id, $data);
            echo json_encode('user Actualizado com sucesso');
        }
        break;
}
