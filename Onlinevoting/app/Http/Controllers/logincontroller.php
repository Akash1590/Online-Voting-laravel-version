<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }
    public function verify(Request $request)
    {
    	$user=DB::table('person')
    	->where ('NID',$request->NID)
    	->where ('password',$request->Password)
    	->first();
    	
    	if($user != null)
    	{
            if($user->persontypeid=='1')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.admin')
                ->with('user',$user);
            }
            else if($user->persontypeid=='2')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.voter')
                ->with('user',$user);
            }
            else if($user->persontypeid=='3')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.candidate')
                ->with('user',$user);
            }
    			
    		
    	}
    	else
    	{
    		$request->session()->flash('NID', $request->NID);
    		$request->session()->flash('message', 'Invalid username or password');
    		return redirect()->route('login.index');
    	}
    }
    public function home(Request $request)
    {
        $user = $request->session()->get('loggedUser');
            if($user->persontypeid=='1')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.admin')
                ->with('user',$user);
            }
            else if($user->persontypeid=='2')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.voter')
                ->with('user',$user);
            }
            else if($user->persontypeid=='3')
            {
                $request->session()->put('loggedUser', $user);
                return view('Person.candidate')
                ->with('user',$user);
            }
    }
    }

