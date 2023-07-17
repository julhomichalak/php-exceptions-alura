<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    }catch(Throwable $problema){
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }/*catch(Error $erro){
        echo $erro->getMessage() . PHP_EOL;
        echo $erro->getLine() . PHP_EOL;
        echo $erro->getTraceAsString() . PHP_EOL;
    }*/

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    intdiv(5, 0);
    throw new BadMethodCallException('Essa é uma mensagem de exceção');

   /*    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }*/
    //print_r(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
