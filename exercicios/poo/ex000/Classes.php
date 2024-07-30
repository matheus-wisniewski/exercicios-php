<?php
class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $tampada;

    function rabiscar()
    {
        if (!!$this->tampada) {
            echo "<p>Destampe sua caneta antes de tentar rabiscar.</p>";
        } else {
            echo "<p>Estou rabiscando!</p>";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }

    function recebendoDados(array $infoDaCaneta)
    {
        $this->modelo = $infoDaCaneta["modelo"];
        $this->cor = $infoDaCaneta["cor"];
        $this->ponta = $infoDaCaneta["cor"];
        $this->tampada = $infoDaCaneta["cor"];
    }
}