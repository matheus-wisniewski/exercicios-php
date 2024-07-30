<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<p>Destampe sua caneta antes de tentar rabiscar.</p>";
        } else {
            echo "<p>Estou rabiscando!</p>";
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
}