<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Request;
use Illuminate\Foundation\Auth\Controller;

class LoginController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
}
