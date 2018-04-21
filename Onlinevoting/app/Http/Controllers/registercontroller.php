<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
use App\Http\Requests\personrequest;

class registercontroller extends Controller
{
    public function index(Request $req)
    {
    	return view('login.register');
    }
    public function store(personrequest $request)
    {
        /*'name'=>'required|string',
            'NID'=>'required|unique:persons,NID|numeric',
            'date'=>'required',
            'Address'=>'required',
            'phoneno'=>'required|numeric',
            'email'=>'required|email',
            'Password'=>'required'*/
    	$person=new person();
        $person->Name=$request->name;
        $person->NID=$request->NID;
        $person->Dateofbirth=$request->date;
        $person->Address=$request->Address;
        $person->Phoneno=$request->phoneno;
        $person->persontypeid='2';
        $person->email=$request->email;
        $person->password=$request->Password;
        $person->save();
        return redirect()->route('login.index');

        
    }
 }
