<?php

try{
    echo "Executando" . PHP_EOL;
    throw new Exception('Erro aqui');
}catch (Throwable){
    echo "Caindo no catch" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}


