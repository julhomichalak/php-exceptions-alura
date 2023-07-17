<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    }catch(RuntimeException | DivisionByZeroError $problema){
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
        throw new RuntimeException(
            'Execeção foi tratada, mas pega aí'
        );
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    throw new RuntimeException();

   /*    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }*/
    //print_r(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
