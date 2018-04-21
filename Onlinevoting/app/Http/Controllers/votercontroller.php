<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
use App\persontype;
use App\vote;
use App\candidate;
use App\approval;
use App\Http\Requests\personrequest;
use App\Http\Requests\voterequest;
use Illuminate\Support\Facades\DB;

class votercontroller extends Controller
{
    public function showallvote(Request $request)
    {
        $vote=DB::table('vote')
        ->get();

        return view('voterpanel.voterpanelforvoter')
        ->with('vote',$vote);
    }
    public function store($id,Request $request)
    {
    	$user = $request->session()->get('loggedUser');
    	$candidate=new approval();
    	$candidate->Approved_nid=$user->NID;
    	$candidate->Approved_voteid=$id;
    	$candidate->save();
    	return view('voterpanel.approve');



    }
}
