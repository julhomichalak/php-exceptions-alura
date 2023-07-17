<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\ValidaNomeException;

require_once 'autoload.php';


$contaCorrente = new ContaCorrente(
    new Titular(new CPF('056.945.649-52'),
        'Julho',
        new Endereco(
            'Guarapuava',
            'Santana',
            'Rotary',
            '713'
        )
    )
);
try{
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'),
            'Diasaa',
            new Endereco ('Cidade', 'bairro', 'rua', 'numero')
        )
    );
    try{
        $contaCorrente->deposita(100);
    }catch (InvalidArgumentException $exception){
        echo "Valor a depositar precisa ser positivo!". PHP_EOL;
    }
} catch (InvalidArgumentException| ValidaNomeException $exception){
    echo "Adicionar argumento valido!". PHP_EOL;
    echo $exception->getMessage(). PHP_EOL;

}