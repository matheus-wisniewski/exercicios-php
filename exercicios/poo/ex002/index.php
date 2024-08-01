<?php

require_once "Controlador.php";

class Controle implements Controlador
{
    # Atributos
    private $volume;
    private $ligado;
    private $tocando;

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
        $this->volume = $novoVolume;
    }
    private function getVolume()
    {
        $this->volume;
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