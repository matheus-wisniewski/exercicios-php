<?php
interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear($novaPagina);
    public function avancarPag();
    public function voltarPag();
}