<?php

namespace Alura\Banco\Modelo;

class ValidaNomeException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "Inserir um nome válido. ". PHP_EOL;
        parent::__construct($mensagem);
    }
}