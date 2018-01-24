<?php
require 'lib/Carbon.php';
require 'Turma.php';
require 'Aluno.php';
use Carbon\Carbon;

$turma = new Turma();
$turma->periodo = "Manha";
$turma->serie = 5;
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";

$aluno = new Aluno();
//$aluno->nome = "Consentino Rafael";
$aluno->dataDeNascimento = Carbon::createFromDate(1984, 10, 30);
$aluno->turma = $turma;

var_dump($aluno);

// $aluno->nome = "Consentino Rafael";
// $aluno->dataDeNascimento = Carbon::createFromDate(1984, 10, 30);
// $aluno->turma = $turma;


//if(!is_empty($aluno->nome)){

//}
// control + / comenta e retira // de comentario
// echo "Aluno: $aluno->nome" . PHP_EOL;
// echo "Data de nascimento: {$aluno->dataDeNascimento->format('d/m/Y')}" . PHP_EOL;
// echo "Ano de nascimento: " . $aluno->dataDeNascimento->year . PHP_EOL;
// echo "Periodo: {$aluno->turma->periodo}" . PHP_EOL;
