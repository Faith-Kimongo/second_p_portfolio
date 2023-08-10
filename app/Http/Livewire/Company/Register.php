<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use App\Models\Companyrep;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Livewire\Component;

class Register extends Component
{
    public $show_rep=true,$show_details=false;
    public $first_name,$last_name,$rep_email,$position,$rep_phone,$company_email,$company_name,$company_size,$company_country,$company_website,$source,$password,$password_confirmation,$company_bio;
    
    public function mount()
    {
        if(Auth::user()){
        $this->company_name=Auth::user()->company->company_name;
        $this->company_email=Auth::user()->company->company_email;
         $this->company_size=Auth::user()->company->company_size;
        $this->company_country=Auth::user()->company->company_country;
        $this->company_website=Auth::user()->company->company_website;
        $this->company_bio=Auth::user()->company->company_bio;
        $this->source=Auth::user()->company->company_source;
        $this->first_name=Auth::user()->company->representative->first_name;
        $this->last_name=Auth::user()->company->representative->last_name;
        $this->rep_email=Auth::user()->company->representative->rep_email;
        $this->position=Auth::user()->company->representative->position;
        $this->rep_phone=Auth::user()->company->representative->rep_phone;
        }

    }
    
    
    
    public function render()
    {
    //    dd(Auth::user());
        return view('livewire.company.register');
    }

    public function rep()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name'=>'string|required',
            'rep_email'=>'string|required',
            'position'=>'string|required',
            'rep_phone'=>'string|required',
            
          ]);
        $this->show_rep=false;
        $this->show_details=true;

    }
    public function register()
    {

        $this->validate([
            'company_name' => 'required|string',
            'company_size'=>'numeric|required',
            'company_email'=>'email|required|unique:users,email',
            'company_country'=>'string|required',
            'company_website'=>'string|required',
            'source'=>'string|nullable',
            'password'=>'required|confirmed',
            
          ]);


          $user = User::Create([
            'email' => $this->company_email,
            'password' => Hash::make($this->password),
            'first_name'=>$this->company_name,
            'last_name'=> $this->company_name,
            

        ]);

        $company = Company::updateOrCreate([
            'company_name'=>$this->company_name,
            'company_email' => $this->company_email,
            'company_size' => $this->company_size,
            'company_country'=>$this->company_country,
            'company_website'=>$this->company_website,
            'company_bio'=>$this->company_bio,
            'source'=> $this->source,
            'user_id'=>$user->id,

            

        ]);

        $rep = Companyrep::updateOrCreate([
            'company_id' =>$company->id ,
            'first_name' => $this->first_name,
            'last_name'=>$this->last_name,
            'rep_email'=> $this->rep_email,
            'position'=>$this->position,
            'rep_phone'=>$this->rep_phone,
        ]);



        Auth::login($user);

        return redirect('companies')->with('success','You have successfully registered!!!');;


        $this->resetInput();
 
        //   dd($this->level_id,$this->amount,$this->frequency);
        session()->flash('message', 'You have successfully registered');

    }



    public function resetInput()
    {
        $this->start_date=NULL;
        $this->end_date=NULL;
        $this->site_id=NULL;
        $this->guard_id=NULL;
        $this->guard_number=NULL;
        $this->name=NULL;
        $this->email=NULL;
        $this->phone_number=NULL;
        $this->dob=NULL;
        $this->employee_code=NULL;
        $this->employment_date=NULL;
        $this->name=NULL;
        $this->type=NULL;
        $this->user_id=NULL;
        $this->frequency=Null;
        $this->amount=NULL;
        $this->level_id=NULL;
        $this->amount=NULL;
        $this->frequency=NULL;
        $this->level_id=NULL;


    }


}
