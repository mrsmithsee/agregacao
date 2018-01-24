<?php
declare(strict_types = 1);
class Aluno
{
  public $nome;
  public $dataDeNascimento;
  public $rg;
  public $turma;

  // construtor: chamado quando criamos o objeto e impoe as restricoes
  function __construct(string $nomeparm, Carbon $dataDeNascimentoparm)
  {
    echo "Aluno criado" . PHP_EOL;
    $this->nome = $nomeparm;
    $this->dataDeNascimento = $dataDeNascimentoparm;
  }
}

// toda vez que cria um objeto um construtor e chamdo
