<?php
Class Usuario{
    private $nome;
    private $cpf;
    private $id;


    public function __contruct($nome,$cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }
}