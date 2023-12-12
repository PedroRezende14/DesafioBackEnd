<?php
require_once('./Model/Usuario.php');

class UsuarioController{

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function cadastrarUsuario($nome, $cpf) {
        $usuario = new Usuario($nome, $cpf);
        $stmt = $this->conn->prepare("INSERT INTO usuario (nome, cpf) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome, $cpf);
        $nome = $usuario->getNome();
        $cpf = $usuario->getcpf();
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso.<br>";
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error . "<br>";
        }

        $stmt->close();
    }

    public function listarTodosUsuarios() {
        $result = $this->conn->query("SELECT * FROM usuario");
        if ($result->num_rows > 0) {
            echo "<h2>Lista de Todos os Usuários</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "Nome: " . $row['nome'] . "<br>";
                echo "cpf: " . $row['cpf'] . "<br>";
                echo "<hr>";



            }
        } 
    }

    public function deletarUsuario($cpf) {
        $stmt = $this->conn->prepare("DELETE FROM usuario WHERE cpf = ?");
        $stmt->bind_param("s", $cpf);

        if ($stmt->execute()) {
            echo "Usuário com o cpf '$cpf' foi excluído.<br>";
        } else {
            echo "Erro ao excluir usuário: " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
}

