<?php
require_once('Controller/UsuarioController.php');
require_once('Config/Config.php');



$controller = new UsuarioController($conn);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'];
    include('View/Formulario.php');

    switch ($acao) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $controller->cadastrarUsuario($nome, $cpf);
            break;
        case 'listar':
            $controller->listarTodosUsuarios();
            break;
        case 'deletar':
            $cpf = $_POST['cpf'];
            $controller->deletarUsuario($cpf);
            break;
        default:
            echo "Ação inválida.";
    }
} else {
    
}