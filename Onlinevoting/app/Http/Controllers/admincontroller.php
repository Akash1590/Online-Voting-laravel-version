<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\person;
use App\persontype;
use App\vote;
use App\candidate;
use App\approval;
use App\votestatus;
use App\Http\Requests\personrequest;
use App\Http\Requests\voterequest;
use App\Http\Requests\votenowrequest;
use Illuminate\Support\Facades\DB;


class admincontroller extends Controller
{
    public function showallvoter(Request $request)
    {
    	$user=DB::table('person')
        ->where ('persontypeid','2')
    	->get();
    	return view('adminpanel.voter')
    	->with('users',$user);
    }
    public function showallparticipant(Request $request)
    {
        $user=DB::table('person')
        ->where ('persontypeid','3')
        ->get();
        return view('adminpanel.parcipant')
        ->with('users',$user);
        
    }
    public function showalladmin(Request $request)
    {
        $user=DB::table('person')
        ->where ('persontypeid','1')
        ->get();
        
        return view('adminpanel.parcipant')
        ->with('users',$user);
        
    }
    public function showallvote(Request $request)
    {
        $vote=DB::table('vote')
        ->get();

        return view('adminpanel.votepanel')
        ->with('vote',$vote);
    }
    public function showallcandidate($id)
    {
        $candidate = DB::table('candidate')
            ->join('person', 'candidate.NID', '=', 'person.NID')
            ->where('voteid',$id)
            ->get();
            if($candidate != null)
            {

            return view('votepanel.showallcandidate')
            ->with('candidate',$candidate);
            }
            else
            {
                return view('votepanel.nocandidate');
            }
    }
    public function showallapproval(Request $request)
    {
        $approval=DB::table('approval')
        ->get();
        if($approval != null)
        {
            return view('adminpanel.showapproval')
            ->with('vote',$approval);

        }
        else
        {
            return view('votepanel.noapproval');
            
        }
    }
    public function generateresult($id)
    {
        $candidate=DB::table('candidate')
        ->where('voteid',$id)
        ->get();
        $result=array();
        $vote=DB::table('vote')
        ->where('Voteid',$id)
        ->first();
        if($candidate != null)
        {
            $counter=0;
            foreach ($candidate as $value) 
            {
                $result[$counter]=$value->totalvote;
                $counter++;
            }
            rsort($result);
            $totalvote=$result[0];

            $candidates = DB::table('candidate')
            ->join('person', 'candidate.NID', '=', 'person.NID')
            ->join('vote', 'candidate.voteid', '=', 'vote.Voteid')
            ->where('totalvote',$totalvote)
            ->where('votetopic',$vote->votetopic)
            ->get();
            return view('votepanel.result')
            ->with('candidate',$candidates);

        }
        else
        {
            echo "No candidate registered";
        }
    }
    public function votenowcreate(Request $request,$id)
    {
            $user = $request->session()->get('loggedUser');
            $nid= $user->NID;
            $status=DB::table('votestatus')
            ->where('voteidV',$id)
            ->where('NIDv',$nid)
            ->first();
            if($status==null)
            {
                $candidates = DB::table('candidate')
            ->join('person', 'candidate.NID', '=', 'person.NID')
            //->join('vote', 'candidate.voteid', '=', 'vote.Voteid')
            ->where('voteid',$id)
            ->get();
            $votes=DB::table('vote')
            ->where('Voteid',$id)
            ->first();
            return view('adminpanel.votenow')
            ->with('candidate',$candidates)
            ->with('vote',$votes);

            }
            else
            {
                return view('votepanel.denyvote');
            }
            
    }
    public function deletevoter($id)
    {
        person::destroy($id);
        
        return redirect()->route('admin.showallvoter');
    }
    public function showdetails($id)
    {
    	$user = DB::table('person')
    		->where('NID', $id)
    		->first();
        $persontype=DB::table('persontype')
            ->where ('persontypeid',$user->persontypeid)
            ->first();

    	return view('adminpanel.voterdetails')
    		->with('user', $user)
            ->with('persontype',$persontype);
    }
    public function addasadmin($id)
    {
    	$admin = person::find($id);
    	$admin->persontypeid = '1';
    	$admin->save();
    	return redirect()->route('admin.showallvoter');
    }
    public function startvote($id)
    {
        $vote=vote::find($id);
        $vote->votestatus='start';
        $vote->save();
        return redirect()->route('admin.voterpanel');

    }
    public function endvote($id)
    {
        $vote=vote::find($id);
        $vote->votestatus='not started';
        $vote->save();
        return redirect()->route('admin.generateresult',$id);

    }
    public function addasvoter($id)
    {
        $admin = person::find($id);
        $admin->persontypeid = '2';
        $admin->save();
        return redirect()->route('admin.showallvoter');
    }
    public function removefromcandidate($id)
    {
        $admin = person::find($id);
        $admin->persontypeid = '2';
        $admin->save();
        $can=candidate::find($id);
        $can->delete();
        return redirect()->route('admin.showallvoter');
    }
    public function createvoteui(Request $request)
    {
        return view('adminpanel.createvote');
    }
    public function createvotestore(voterequest $request)
    {
        $vote=new vote();
        $vote->Voteid=$request->voterid;
        $vote->votetopic=$request->title;
        $vote->votestatus='not started';
        $vote->totalvotes=0;
        $vote->save();
        return redirect()->route('admin.voterpanel');
    }
    public function votenowstore(votenowrequest $request,$id)
    {
        $nid=$request->candidate;
        $user = $request->session()->get('loggedUser');
        $status=new votestatus();
        $status->NIDv=$user->NID;
        $status->voteidV=$id;
        $status->save();
        $candidate=DB::table('candidate')
        ->where('NID',$nid)
        ->where('voteid',$id)
        ->first();
        $vote=DB::table('vote')
        ->where('Voteid',$id)
        ->first();
        $candidatevote=$candidate->totalvote;
        $votetotal=$vote->totalvotes;
        $candidatevote++;
        $votetotal++;
        $candi=candidate::where('NID',$nid)
        ->where('voteid',$id)
        ->update(['totalvote'=>$candidatevote]);
        /*$candi=candidate::find($id,$nid);
        $candi->totalvote=$candidatevote;
        $candi->save();*/
        $voteup=vote::find($id);
        $voteup->totalvotes=$votetotal;
        $voteup->save();

        return redirect()->route('admin.generateresult',$id);


    }
    public function acceptapproval($NID,$voteid)
    {
        $candidate=new candidate();
        $candidate->NID=$NID;
        $candidate->voteid=$voteid;
        $candidate->totalvote=0;
        $candidate->save();
        $admin = person::find($NID);
        $admin->persontypeid = '3';
        $admin->save();
        $app=approval::where('Approved_nid', $NID)
        ->where('Approved_voteid', $voteid)
        ->delete();
        return redirect()->route('admin.showallapproval');
    }
    public function rejectapproval($NID,$voteid)
    {
        
        $app=approval::where('Approved_nid', $NID)
        ->where('Approved_voteid', $voteid)
        ->delete();
        return redirect()->route('admin.showallapproval');
    }


}
