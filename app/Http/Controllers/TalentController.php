<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TalentController extends Controller
{

    public function __construct(){
        return $this->middleware('auth')->except('index');
    }
   
    public function index(Request $request)
    {
        //Find Talent / Search
        $searchQuery = $request->search;

        $talents = User::where(function ($query) use ($searchQuery) {

            if (!empty($searchQuery)) {
                $query->where('bio', 'like', '%'.$searchQuery.'%')
                    ->orWhereHas('skills', function ($query) use ($searchQuery) {
                        $query->where('name', 'like', '%'.$searchQuery.'%');
                    });
            }
        })->complete(50) // Use the `complete` query scope with a completeness threshold of 50%

        ->paginate(15);


        


       




    
        return view('talent.index',compact('talents'));
    }

   
    public function create()
    {
        //
    }

    // Display Talent
    public function show(User $talent)
    {
        //show profile
        return view('talent.show',compact('talent'));
    }
}
