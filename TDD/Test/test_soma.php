<?php
use App\Class\Soma;


//Preparação
$soma = new Soma();

//Execução
$soma->pegar_numeros(10, 2);
$soma->somar();
$resultado_teste_1 = $soma->retornar_resultado();

$soma->pegar_numeros(0, 0);
$soma->somar();
$resultado_teste_2 = $soma->retornar_resultado();

$soma->pegar_numeros(0, 1);
$soma->somar();
$resultado_teste_3 = $soma->retornar_resultado();

$soma->pegar_numeros(1, 0);
$soma->somar();
$resultado_teste_4 = $soma->retornar_resultado();

$soma->pegar_numeros(900.25, 150.98);
$soma->somar();
$resultado_teste_5 = $soma->retornar_resultado();

//Testes
if($resultado_teste_1 == 12.0){
    echo "1º Teste Soma: Passou ✔️\n";
}else{
    echo "1ª Teste Soma: Falhou ❌\n";
}

if($resultado_teste_2 == 0){
    echo "2º Teste Soma: Passou ✔️\n";
}else{
    echo "2ª Teste Soma: Falhou ❌\n";
}

if($resultado_teste_3 == 1.0){
    echo "3º Teste Soma: Passou ✔️\n";
}else{
    echo "3ª Teste Soma: Falhou ❌\n";
}

if($resultado_teste_4 == 1.0){
    echo "4º Teste Soma: Passou ✔️\n";
}else{
    echo "4ª Teste Soma: Falhou ❌\n";
}

if($resultado_teste_5 == 1051.23){
    echo "5º Teste Soma: Passou ✔️\n";
}else{
    echo "5ª Teste Soma: Falhou ❌\n";
}
