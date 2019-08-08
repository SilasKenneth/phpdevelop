<?php
require_once "autoload.php";

$students = new App\Controller\StudentController();

print_r($students->index());
