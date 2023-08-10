<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyhustleRequest;
use App\Http\Requests\UpdateMyhustleRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\Myhustle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyhustleController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
   
    public function index(Request $request)
    {

        // Recent Job
        $jobs=Job::latest()->take(5)->get();

        if($request->category_id){
            $myhustles=Category::find($request->category_id)->myhustles;
        }elseif($request->popular){
$myhustles=Myhustle::popular()->get();
        } elseif($request->trending){
            $myhustles=Myhustle::trending()->get();

        }
    
        else {
            $myhustles=Myhustle::all();
        }
    

        return view('myhustle.index',[
            'myhustles'=>$myhustles,
            'jobs'=>$jobs,
            'categories'=>Category::all()
        ]);
    }

  
    public function create()
    {
        //create
        return view('myhustle.create',
    [
        'categories'=>Category::all()
    ]);
    }

   
    public function store(StoreMyhustleRequest $request)
    {

        // Image
        $image = $request->file('image');

        $imageName = time().'.'.$image->extension();  
    
        $image->move(public_path('myhustleImages'), $imageName);
        //store

        $hustle=new Myhustle();
        $hustle->user_id=Auth::id();
        $hustle->title=$request->title;
        $hustle->location=$request->location;
        $hustle->category_id=$request->category_id;
        $hustle->image = $imageName;
        $hustle->desc=$request->desc;
        $hustle->price=$request->price;
        $hustle->save();

        return back()->with('success','Hustle posted successfully');
    }

  
    public function show(Myhustle $myhustle)
    {
        //show myhustle
        $jobs=Job::latest()->take(5)->get();

        // Increment views
        $myhustle->increment('views',1);

        return view('myhustle.show',[
            'categories'=>Category::all(),
            'hustle'=>$myhustle,
            'jobs'=>$jobs

        ]);
    }

   
    public function edit(Myhustle $myhustle)
    {
        //
    }

   
    public function update(UpdateMyhustleRequest $request, Myhustle $myhustle)
    {
        //
    }


    //Like

    public function like(Request $request,Myhustle $myhustle){
        // if (!$myhustle->likedBy($request->user())) {
        //     $like = $myhustle->likes()->create([
        //         'user_id' => $request->user()->id,
        //     ]);
        // }
    
        // return response()->json([
        //     'message' => 'Post liked.',
        // ]);
    }

   
    public function destroy(Myhustle $myhustle)
    {
        //delete
        $myhustle->delete();
        return back()->with('success','Myhustle Deleted Successfully!');
    }


}
