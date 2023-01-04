<?php

namespace App\Http\Controllers;
use App\Models\ShowroomModels;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    // $data['companies'] = Company::orderBy('id','desc')->paginate(5);
    // return view('companies.index', $data);
    return view('showroom.index');
    }

    public function Home()
    {
    $posts = ShowroomModels::latest()->paginate(5);
    return view('showroom.Home', compact('posts'));
    // return view('showroom.Home');
    }
    
}
