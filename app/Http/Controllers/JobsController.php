<?php

namespace App\Http\Controllers;

use App\Models\Jobs;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('jobs', compact('jobs'));
    }

    public function show(int $id)
    {
        $job = Jobs::find($id);

  
        if (!$job) {
            abort(404);
        }
       
        return view('show', compact('job', 'id'));
        
 
    }
    
}