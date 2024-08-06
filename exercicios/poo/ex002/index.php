<?php

require_once "Controlador.php";

class Controle implements Controlador
{
    # Atributos
    private $volume;
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
    private function setVolume($novoVolume)
    {
        if ($this->getStatus() !== true) {
            echo "Impossível definir o volume, ligue o controle primeiro.";
        };

        if ($novoVolume < 0) {
            echo "O novo volume não pode ser menor que 0.";
        };

        $this->setVolume($novoVolume);
        echo "Volume: " . $this->getVolume();
    }

    private function getVolume()
    {
        if ($this->getStatus() !== true) {
            echo "Impossível exibir o volume, ligue o controle primeiro.";
        }

        echo "Volume: " . $this->getVolume();
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
            echo "Ligado.";
        } else {
            $status === false;
            echo "Desligado.";
        }
    }


    private function settocando($novoTocando)
    {
        if ($this->getStatus() !== "Ligado.") {
            echo "O rádio está desligado. Ligue antes de tocar.";
        }

        $this->tocando = $novoTocando;
    }

    private function gettocando()
    {
        if ($this->getStatus() !== "Ligado.") {
            echo "O rádio está desligado. Ligue antes de tocar.";
        }
        $this->tocando;
    }

    # Métodos Da Interface
    function ligar()
    {
        $this->setStatus(true);
    }
    function desligar()
    {
        $this->setStatus(false);
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
    }
    function menosVolume()
    {
    }
    function ligarMudo()
    {
    }
    function desligarMud()
    {
    }
    function play()
    {
    }
    function pause()
    {
    }
}