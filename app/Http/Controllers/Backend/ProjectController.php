<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    //project view

    public function ProjectView(){

        $projects = Project::all();
        return view ('backend.project.project_view',compact('projects'));
    }

    //project store

        public function ProjectStore(Request $request){
   
            $request->validate(

                [
                    'icon' => 'required|image|mimes:jpeg,png,jpg',
                    'title' => 'required',
                    'description' => 'required'
                ],
            );
    
            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $extension = $image->extension();
                $name = time() . '.' . $extension;
                $image->move(public_path('/upload/project_img'), $name);
                $save_url = '/upload/project_img/'.$name;
            }
    
            Project::insert([

                
                'title'        => $request->title,
                'description'  => $request->description,
                'icon'         => $save_url,
            ]);
    
    
            $notification = array(
                'message' => 'Project Image Create sucessfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('project.view')->with($notification);
        } // end method


        //project edit
        public function ProjectEdit($id){

            $projects = Project::findOrFail($id);
            return view ('backend.project.project_edit',compact('projects'));
        }//end method

        //project update
        public function ProjectUpdate(Request $request, $id){

            $project = Project::find($id);

            if ($request->file('icon')) {

                $destination = public_path($project->icon);

                if (file_exists($destination)) {
                    unlink($destination);
                }
                $image = $request->file('icon');
                $extension = $image->extension();
                $name = time() . '.' . $extension;
                $image->move(public_path('/upload/project_img/'), $name);
                $path = 'upload/project_img/' .$name;

                $project->icon =  $path;
            }

            $project->title = $request->title;
            $project->description = $request->description;

            $project->save();

            $notification = array(
                'message' =>  'project Update Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('project.view')->with($notification);
        }//end method


    public function ProjectDelete($id)
    {

        $projects = Project::findOrFail($id);
        Project::findOrFail($id)->delete();

        $notification = array(
            'message' =>  'Project Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } 

    }

