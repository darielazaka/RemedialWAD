<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    // $data['companies'] = Company::orderBy('id','desc')->paginate(5);
    // return view('companies.index', $data);
    return view('Users.index');
    }

    
}
