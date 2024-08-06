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
        if ($this->getLigar() !== true) {
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
        if ($this->getLigar() !== true) {
            echo "Impossível exibir o volume, ligue o controle primeiro.";
        }

        echo "Volume: " . $this->getVolume();
    }

    private function setLigar($novoLigar)
    {
        $this->ligado = $novoLigar;
    }
    private function getLigar()
    {
        $this->ligado;
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
        $this->setLigar(true);
    }
    function desligar()
    {
        $this->setLigar(false);
    }
    function abrirMenu()
    {
        echo "<br>Está ligado?" . $this->getLigar();
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