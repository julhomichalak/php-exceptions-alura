<?php

class MinhaExcecao extends DomainException
{
    public function exibeJulho()
    {
        echo "Julho";
    }
}

try{
    throw new MinhaExcecao;
}catch (MinhaExcecao $e){
    $e->exibeJulho();
}