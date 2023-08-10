<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('company.jobs.jobs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $job=Job ::find($id);
        return view('company.jobs.applicants',['job'=>$job]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    // Application functions
    public function applicant($id)
    {
        
    }

    public function applicants($id)
    {

        $job=Job ::find($id);
        return view('company.jobs.applicants',['job'=>$job]);
        
    }

    public function shortlist(Request $request){

        $applicaton=Application::find($request->application_id);        
        $applicaton->update(['short_listed'=>'1','short_listed_on'=>today()->format('Y-m-d')]);
        return back()->with('success','Applicant  successfully shortlisted.');
    }



    public function reject(Request $request){

        $applicaton=Application::find($request->application_id);        
        $applicaton->update(['short_listed'=>'1','short_listed_on'=>today()->format('Y-m-d')]);
        return back()->with('error','Application rejected.');
    }
}
