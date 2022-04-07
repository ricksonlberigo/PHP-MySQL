<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../EmployeeRepository.php';
require_once __DIR__ . '/../Redirect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$office = $_POST['office'];

$employee = new EmployeeRepository($conn);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $employee->update($id, $name, $email, $office);
    redirect('../../index.php');
}
