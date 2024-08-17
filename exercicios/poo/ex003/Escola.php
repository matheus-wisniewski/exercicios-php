<?php
require_once "Pessoa.php";
class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    public function cancelaMatricula() {}
}

class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function receberAumento() {}
}

class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho() {}
}