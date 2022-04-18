<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Backend\Core;
use App\Models\Backend\Feature;
use App\Models\Backend\Galary;
use App\Models\Backend\Project;
use App\Models\Backend\Header;
use App\Models\Backend\Slider;
use App\Models\Backend\Service;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function details($id){

            $project = Project::with('header','core','feature','galary','service','slider')->find($id);
            

            return view('frontend.index', compact('project'));
        }
}
