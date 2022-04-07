<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../EmployeeRepository.php';
require_once __DIR__ . '/../Redirect.php';

/**
 *  Criando o controlador que irá exibir os dados dentro do banco
 */

$funcionario = new EmployeeRepository($conn);
$funcionarios = $funcionario->listAll();
