<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {

        $projects = \App\Project::all();
        // return dd($projects);
        return view('projects.index',compact('projects')); //$ почему?
    }
    public function create(){
        return view('projects.create');
    }
    public function store(){
        // return request()->all();

        $project=new Project;
        $project->title=request('title');
        $project->description=request('description');
        $project->save();

        return redirect('/projects');
    }
    public function edit($id){
        // $project=Project::find($id);
        $project=Project::findOrFail($id);

        return view('projects/edit',compact('project'));
    }
    public function update($id){
    //  return dd(request()->all());

        // $project= Project::find($id);
        $project= Project::findOrFail($id);

        $project->title=request('title');
        $project->description=request('description');
        $project->save();

        return redirect('/projects');
    }
    public function destroy($id){
        Project::find($id)->delete();
        return redirect('/projects');

    }
    public function show($id)
    {
        $project= Project::findOrFail($id);
        return view('projects.show',compact('project'));

    }

}
