<?php
class Conta
{
    public $numConta;
    private $tipo;
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
                echo ("O tipo de conta é: $this->tipo");
                break;
            case 'dono':
                echo ("O dono da conta é: $this->dono");
                break;
            case 'saldo':
                echo ("O saldo da conta é: $this->saldo");
                break;
            case 'status':
                echo ("O status de conta é: $this->status");
                break;
            default:
                echo ("O número da conta é: $this->numConta");
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
                $this->saldo = $valor;
                break;
            case 'status':
                $this->status = $valor;
                break;
            case 'numConta':
                $this->numConta = $valor;
                break;
            default:
                echo ('Tipo não reconhecido. Tente novamente!');
        }
    }

    function abrirConta()
    {
        $this->status = 'A conta foi aberta';
    }

    function fecharConta()
    {
        $this->status = 'A conta foi fechada.';
    }

    function depositar($valorADepositar)
    {
        $this->saldo += $valorADepositar;
        echo "R$ $valorADepositar depositado na conta com sucesso! <br>";
    }

    function sacar($valorASacar)
    {
        $this->saldo -= $valorASacar;
        echo "R$ $valorASacar retirado da conta com sucesso! <br>";
    }

    function pagarMensal($valorAPagar)
    {
        $this->saldo -= $valorAPagar;
        echo ("Pagamento de R$ $valorAPagar realizado! <br>");
    }
}