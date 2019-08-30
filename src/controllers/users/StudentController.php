<?php
namespace App\Controllers\Users;
use App\Models\Users\StudentModel as Students;
use App\Controllers\Controller;

class StudentController implements Controller
{

    public function index()
    {
        $students = new Students();
        return \json_encode($students->all(0, 10));
    }
}