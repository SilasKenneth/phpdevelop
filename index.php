<?php
declare(strict_types=1);
require_once "autoload.php";

$students = new App\Controllers\Users\StudentController();

print_r($students->index());
