<?php

use function PHPSTORM_META\elementType;

class Cuenta
{
    public  string $cliente;
    public string $cuenta;
    public float $interes;
    public float $saldo;

    function __construct($cliente, $cuenta, $interes, $saldo)
    {
        $this->cliente = $cliente;
        $this->cuenta = $cuenta;
        $this->interes = $interes;
        $this->saldo = $saldo;
    }
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $valor)
    {
        $this->$name = $valor;
    }
    function ingreso($valor)
    {
        if ($valor >= 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "El numero es negativo";
        }
    }

    function reintegro($valor)
    {
        if ($valor >= 0) {
            if ($this->saldo > $valor) {
                $this->saldo = $this->saldo - $valor;
            } else {
                echo "Hay menos saldo del dinero que se quiere retirar";
            }
        } else {
            echo "El valor es negativo";
        }
    }
    function transferencia($num, Cuenta $cuenta)
    {
        $dinero = $this->saldo;
        $this->reintegro($num);
        if ($this->saldo != $dinero) {
            $this->ingreso($num);
        }
    }
}
