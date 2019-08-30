<?php
declare(strict_types=1);
require_once "autoload.php";

$students = new App\Controllers\Users\StudentController();
header('Content-Type: application/json');
print_r($students->index());
