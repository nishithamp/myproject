<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class FrondEndController extends Controller
{
    public function homePage()
    {
        
//$users=User::all();
//$users=User::find(43); 
                       //select*from users
//$user=User::where('id',43)->first();
//$user=User::where('email','streich.karen@example.org')->first();
//$users=User::whereIn('id',[43,23])->get();
$users=User::active()->oldest()->limit(10)->get();
//return $user;

        return view ('welcome',compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function save()
    {
        $name=request('name');
        $email=request('email');
        $dob=request('dob');
        $status=request('status');


       User ::create(['name'=>$name,
       'email'=>$email,
       'dob'=>$dob,
       'status'=>$status]);
      // return $users;
      User::firstOrCreate(['email'=>request('email')],['name'=>request('name'),
    'dob'=>request('dob'),'status'=>request('status')]);
return redirect()->route('home')->with('message','User created successfully');

    }
    public function edit()
    {
        return'editpage';
    }
    public function aboutus()
    {
        return view('about_us');
    }
    public function contactus()
    {
        return view('contact_us');
    }
}
