<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function users()
    {
        return view('user-management.users');
    }
    
    public function permissions()
    {
        return view('user-management.permissions');
    }
    public function roles()
    {
        return view('user-management.roles');
    }
}
