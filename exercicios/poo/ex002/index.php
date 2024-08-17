<?php

require_once "Controlador.php";

class Controle implements Controlador
{
    # Atributos
    private $volume = 0;
    private bool $ligado;
    private bool $tocando;

    # Construtor
    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    # Getter e Setters
    private function setVolume($tipo)
    {
        if ($tipo === "Aumentar") {
            $this->getVolume() + 1;
        } else if ($tipo === "Diminuir") {
            $this->getVolume() - 1;
        }
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setStatus($novoStatus)
    {
        if ($novoStatus === 'Ligado') {
            $this->ligado = true;
        } elseif ($novoStatus === 'Desligado') {
            $this->ligado = false;
        } else {
            echo "insira um valor válido!";
        }
    }

    private function getStatus()
    {
        $status = $this->ligado;
        if ($status === true) {
            return "Ligado.";
        } else {
            $status === false;
            return "Desligado.";
        }
    }


    private function settocando($novoTocando)
    {
        $this->tocando = $novoTocando;
    }

    private function gettocando()
    {
        $this->tocando;
    }


    # Métodos Da Interface
    function ligar()
    {
        $this->setStatus('Ligado');
        echo "O aparelho foi ligado.";
    }

    function desligar()
    {
        $this->setStatus('Desligado');
        echo "O aparelho foi desligado.";
    }

    function abrirMenu()
    {
        echo "<br>Está ligado?" . $this->getStatus();
    }
    function fecharMenu()
    {
    }

    function maisVolume()
    {
        $this->setVolume('Aumentar');
        echo "Volume: " . $this->getVolume();
    }

    function menosVolume()
    {
        $this->setVolume('Diminuir');
        echo "Volume: " . $this->getVolume();
    }

    function ligarMudo()
    {
        $this->setVolume("Mutar");
        echo "Volume: MUTADO";
    }

    function desligarMudo()
    {
        $valorVolume = $this->getVolume();
        $this->setVolume($valorVolume);
    }

    function play()
    {
    }
    function pause()
    {
    }
}