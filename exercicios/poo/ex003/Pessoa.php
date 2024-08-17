<?php
class Pessoa
{
    private $nome, $idade, $sexo;

    public function __construct($no, $id, $se)
    {
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $se;
    }

    public function fazerAniver()
    {
        $this->idade++;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome() {}
}