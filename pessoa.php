<?php

class Pessoa{
    private $nome;
    private $endereco;
    private $idade;

    public function __construct($nome, $endereco, $idade)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->idade = $idade;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getDados(){
        return "Nome : " . $this->nome . "\tEndereço : " . $this->endereco . "\tIdade : " . $this->idade;
    }
}
?>