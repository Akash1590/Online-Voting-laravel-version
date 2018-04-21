<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
use App\vote;
use App\candidate;
use App\persontype;
use App\Http\Requests\personupdaterequest;
use Illuminate\Support\Facades\DB;

class candidatecontroller extends Controller
{
    public function edit($id)
    {
    	$user = DB::table('person')
    		->where('NID', $id)
    		->first();

    	return view('candidatepanel.update')
    		->with('user', $user);
    }
    public function update(personupdaterequest $request)
    {
    	$NID=$request->NID;
    	$person=Person::find($NID);
    	$person->Address=$request->Address;
    	$person->Phoneno=$request->phnNo;
    	$person->email=$request->Email;
    	$person->password=$request->Password;
    	$person->save();
    	return redirect()->route('login.home');

    }
    public function showallvote(Request $request)
    {
        $vote=DB::table('vote')
        ->get();

        return view('candidatepanel.voterpanel')
        ->with('vote',$vote);
    }
}
