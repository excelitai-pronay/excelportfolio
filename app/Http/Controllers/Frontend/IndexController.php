<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $projects = Project::latest()->get();
        return view('homepage.index_home',compact('projects'));
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }
}
