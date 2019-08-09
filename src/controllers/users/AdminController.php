<?php
namespace App\Controllers\Users;
use App\Models\Users\Admin;
use App\Controllers\Controller;

class AdminController implements Controller
{
    public function index()
    {
        $admin = new Admin();
        return $admin->all(0, 10);
    }
}