<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewRedirect()
    {
        return view('admin.login.login');
    }
}
