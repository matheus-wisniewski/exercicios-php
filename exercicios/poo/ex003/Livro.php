<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }
    public function detalhes()
    {
        echo "Livro: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Quantidade de Páginas: $this->totPaginas <br>";
        echo "Quem está lendo: $this->leitor <br>";
    }

    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function avancarPag()
    {
        $this->pagAtual++;
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }
    public function folhear($novaPagina)
    {
        if ($novaPagina > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $novaPagina;
        }
    }
}