<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $projects = Project::where('user_id', $user_id)->get();
        
        return Inertia::render('Project/ProjectIndex', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'target_amount' => 'required|numeric|min:0',
        
        ]);
        $user_id = Auth::user()->id;
        Project::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'target_amount' => $request->target_amount,
            'current_amount' => 0,
            'status' => 'active'
        ]); 

        return redirect()-> route('donation.index');
    }

    public function create (){
        return Inertia::render('Project/ProjectCreate');
    }
}
