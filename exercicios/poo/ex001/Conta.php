<?php
class Conta
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($numConta, $tipo, $dono, $saldo, $status)
    {
        $this->numConta = $numConta;
        $this->setInfo('tipo', $tipo);
        $this->setInfo('dono', $dono);
        $this->setInfo('saldo', $saldo);
        $this->setInfo('status', $status);
    }

    function getInfo($info)
    {
        switch ($info) {
            case 'tipo':
                echo "O tipo de conta é: $this->tipo";
                break;
            case 'dono':
                echo "O dono da conta é: $this->dono";
                break;
            case 'saldo':
                echo "O saldo da conta é: $this->saldo";
                break;
            case 'status':
                echo "O status de conta é: $this->status";
                break;
            default:
                echo "O número da conta é: $this->numConta";
                break;
        }
    }

    function setInfo($info, $valor)
    {
        switch ($info) {
            case 'tipo':
                $this->tipo = $valor;
                break;
            case 'dono':
                $this->dono = $valor;
                break;
            case 'saldo':
                $this->saldo += $valor;
                break;
            case 'status':
                $this->status = $valor;
                break;
            case 'numConta':
                $this->numConta = $valor;
                break;
            default:
                echo 'Tipo não reconhecido. Tente novamente!';
        }
    }

    function abrirConta($tipo)
    {
        $this->status = 'Aberta';
        switch ($tipo) {
            case 'Corrente':
                $this->saldo = 50;
                break;
            case 'Poupança':
                $this->saldo = 150;
                break;
            default:
                echo 'Tipo não reconhecido. Tente novamente!';
                break;
        }
    }

    function fecharConta()
    {
        if ($this->getInfo('saldo') > 0) {
            echo "Conta ainda com valor. Impossível encerrar.";
        } elseif ($this->getInfo('saldo') < 0) {
            echo "Conta está em débito. Impossível encerrar";
        } else {
            $this->setInfo('status', 'Fechada');
        }
    }

    function depositar($valorADepositar)
    {
        if ($this->getInfo('status') == 'Aberta') {
            $this->setInfo('saldo', $valorADepositar);
        }
        echo "R$ $valorADepositar depositado na conta com sucesso! <br>";
    }

    function sacar($valorASacar)
    {
        if ($this->getInfo('status') === 'Aberta') {
            $this->saldo -= $valorASacar;
            echo "R$ $valorASacar retirado da conta com sucesso! <br>";
        }
    }

    function pagarMensal($valorAPagar)
    {
        if ($this->getInfo('tipo') === 'Corrente') {
            $this->saldo -= 12;
            echo "Pagamento de R$ $valorAPagar realizado! <br>";
        } elseif ($this->getInfo('tipo') === "Poupança") {
            $this->saldo -= 20;
            echo "Pagamento de R$ $valorAPagar realizado! <br>";
        }
    }
}