<?php

function funcao1(){
    echo "Entrei na função 1";
    funcao2();
    echo "Saindo da função 1";
}

function funcao2(){

    echo "Entrei na função 2";
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo "Saindo da função 2";
}

echo "Iniciando sistema";
funcao1();
echo "Saindo do sistema;";