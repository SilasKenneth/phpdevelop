<?php
namespace App\Controller;
use App\Models\Admin;
class AdminController implements Controller
{
    public function index()
    {
        $admin = new Admin();
        return $admin->all(0, 10);
    }
}