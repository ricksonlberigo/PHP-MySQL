<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../EmployeeRepository.php';
require_once __DIR__ . '/../Redirect.php';

$id = $_POST['id'];

$employee = new EmployeeRepository($conn);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $employee->delete($id);
    redirect('../../index.php');
}
