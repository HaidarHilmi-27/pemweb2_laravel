<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\AdminController;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
