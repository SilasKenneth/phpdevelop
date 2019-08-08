<?php
namespace App\Controller;
use App\Models\StudentModel as Students;

class StudentController implements Controller
{

    public function index()
    {
        $students = new Students();
        return $students->all(1, 10);
    }
}