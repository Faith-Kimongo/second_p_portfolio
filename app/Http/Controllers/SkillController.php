<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
  
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a skill form

        return view('profile.create-skill',[
            'skills'=>Skill::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request)
    {
        //store
        // $skill=new Skill();
        // $skill->name=$request->name;
        // $skill->category_id=1;
        // $skill->user_id=Auth::id();
        // $skill->save();
        // return back()->with('success','Skill Added Successfully');

        $existingSkills = Auth::user()->skills()->pluck('name')->toArray();

// Split the input skill names by comma and trim any whitespace
$inputSkills = array_map('trim', explode(',', $request->name));

// Remove any duplicates and skills that already exist for the user
$newSkills = array_diff(array_unique($inputSkills), $existingSkills);

// Add the new skills for the user
foreach ($newSkills as $newSkill) {
    $skill = new Skill();
    $skill->name = $newSkill;
    $skill->category_id = 1;
    $skill->user_id = Auth::id();
    $skill->save();
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
