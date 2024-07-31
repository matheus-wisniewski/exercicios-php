<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;

    public function __construct($m, $c, $p, $t)
    {
        $this->modelo = $m;
        $this->cor = $c;
        $this->setPonta($p);
        $this->tampada = $t;
    }

    public function rabiscar()
    {
        if ($this->tampada === 'não') {
            echo "<p>Estou rabiscando!</p>";
        } else {
            echo "<p>Destampe sua caneta antes de tentar rabiscar.</p>";
        }
    }

    private function tampar()
    {
        $this->tampada = true;
    }

    private function destampar()
    {
        $this->tampada = false;
    }

    function recebendoDados(array $infoDaCaneta)
    {
        $this->modelo = $infoDaCaneta["modelo"];
        $this->cor = $infoDaCaneta["cor"];
        $this->ponta = $infoDaCaneta["ponta"];
        $this->tampada = $infoDaCaneta["tampada"];
    }

    function getPonta()
    {
        echo "O valor do atributo privado é: $this->ponta <br>";
    }

    function setPonta($valor)
    {
        echo "O novo valor do atributo privado é: " . $this->ponta = $valor;
    }
}