<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../EmployeeRepository.php';
require_once __DIR__ . '/../Redirect.php';

$funcionario = new EmployeeRepository($conn);
$func = $funcionario->findByID($_GET['id']);
