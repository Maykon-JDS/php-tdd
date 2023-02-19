<?php 

use App\Class\Mutiplica;

//Preparação
$multiplica = new Mutiplica();

//Execução
$multiplica->pegar_numeros(10, 2);
$multiplica->multiplicar();
$resultado_teste_1 = $multiplica->retornar_resultado();

$multiplica->pegar_numeros(0, 0);
$multiplica->multiplicar();
$resultado_teste_2 = $multiplica->retornar_resultado();

$multiplica->pegar_numeros(0, 1);
$multiplica->multiplicar();
$resultado_teste_3 = $multiplica->retornar_resultado();

$multiplica->pegar_numeros(1, 0);
$multiplica->multiplicar();
$resultado_teste_4 = $multiplica->retornar_resultado();

$multiplica->pegar_numeros(3.33, 1.11);
$multiplica->multiplicar();
$resultado_teste_5 = $multiplica->retornar_resultado();

//Testes
if($resultado_teste_1 == 20.00){
    echo "1º Teste Multiplica: Passou ✔️\n";
}else{
    echo "1ª Teste Multiplica: Falhou ❌\n";
}

if($resultado_teste_2 == 0.0){
    echo "2º Teste Multiplica: Passou ✔️\n";
}else{
    echo "2ª Teste Multiplica: Falhou ❌\n";
}

if($resultado_teste_3 == 0.0){
    echo "3º Teste Multiplica: Passou ✔️\n";
}else{
    echo "3ª Teste Multiplica: Falhou ❌\n";
}

if($resultado_teste_4 == 0.0){
    echo "4º Teste Multiplica: Passou ✔️\n";
}else{
    echo "4ª Teste Multiplica: Falhou ❌\n";
}

if(round($resultado_teste_5, 4) == 3.6963){
    echo "5º Teste Multiplica: Passou ✔️\n";
}else{
    echo "5ª Teste Multiplica: Falhou ❌\n" . var_dump($resultado_teste_5);
}