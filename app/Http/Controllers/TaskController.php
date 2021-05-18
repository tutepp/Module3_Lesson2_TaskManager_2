<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('modules.customer.index');
    }
    public function creat()
    {
        return view('modules.customer.creat');
    }
    public function edit()
    {
        return view('modules.customer.edit');
    }
}
