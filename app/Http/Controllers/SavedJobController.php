<?php

namespace App\Http\Controllers;

use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedJobController extends Controller
{
    //index
    public function index(){

        // dd(Auth::user()->savedjobs);
        return view('jobs.saved',[
            'jobs'=>Auth::user()->savedjobs
        ]);
    }


    // Store
    public function store(Request $request){
        $job=new SavedJob();
        $job->user_id=Auth::id();
        $job->job_id=$request->job_id;
        $job->save();

        return back()->with('success','job saved');
    }
   

}
