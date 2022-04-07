<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../EmployeeRepository.php';
require_once __DIR__ . '/../Redirect.php';

/**
 * Criando o controlador que irá inserir os dados enviados no POST para o banco
 */

$name = $_POST['name'];
$email = $_POST['email'];
$office = $_POST['office'];

// Verificação
if ($name == null || $email == null || $office == null) {
    throw new InvalidArgumentException();
}

$employee = new EmployeeRepository($conn);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $employee->insert($name, $email, $office);
    redirect('../../index.php');
}
