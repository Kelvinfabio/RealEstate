<?php
if (!isset($_SESSION)) {
    session_start();
}
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
        if ($endpoint === '/user') {
            $r = $user->getUtilizador();
            echo json_encode($r);
        } else if (preg_match('/^\/user\/(\d+)$/', $endpoint, $matches)) {
            $id = $matches[1];
            $r = $user->getUserById($id);
            echo json_encode([$r]);
        }
        break;
    case 'POST':
        if ($endpoint === '/user') {
            $data = json_decode(file_get_contents('php://input'), true);
            $user->add($data);
            echo json_encode(['user inserido com sucesso']);
        } else if ($endpoint === '/user/proprietario') {
            $data = json_decode(file_get_contents('php://input'), true);
            $user->addProprietario($data);
            echo json_encode(['user inserido com sucesso']);
        } else if ($endpoint === '/user/loginproprietario') {
            $data = json_decode(file_get_contents('php://input'), true);
            $r = $user->LoginProprietario($data);
            $id = $r[0]["id_proprietario"];
            $item = $imovel->getProprietyById($id);

            $_SESSION['user'] = $r;
            $_SESSION['item'] = $item;
            session_write_close();
            if ($r) {
                    echo json_encode(['msg' => 'Login bem-sucedido']);
                } else {
                    echo json_encode(['msg' => 'Credenciais inválidas']);  
        }
    }
    else if ($endpoint === '/user/login') {
        $data = json_decode(file_get_contents('php://input'), true);
        $r = $user->Login($data);

        if ($r) {
                echo json_encode(['msg' => 'Login bem-sucedido', 'user' => $r]);
            } else {
                echo json_encode(['msg' => 'Credenciais inválidas']);  
            }
            $_SESSION['user'] = $r;
            session_write_close();
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
