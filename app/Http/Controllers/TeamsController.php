<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Department;
use App\Team;
use App\User;
use App\TeamMember;
use App\MemberRecord;

class TeamsController extends Controller
{
    public function index($dept_id){
        $teams=Team::select()->where('dept_id',$dept_id)->get();
        $team_heads=array();
        foreach($teams as $team){
            array_push($team_heads,User::find($team->team_head_id));
        }
        return view('department.team.index')->with('teams',$teams)->with('dept_id',$dept_id)->with('team_heads',$team_heads);
    }


    public function create($dept_id){
        return view('department.team.create')->with('dept_id',$dept_id);
    }

    public function store(Request $request,$dept_id){
        // return $dept_id;
        $this->validate($request,[
            'team_name'=>'required',
            'head_email'=>'required'
        ]);
        $member=User::select()->where('email',$request->input('head_email'))->get();
        // dd($request->input('head_mail'));
        // dd($member[0]);
        if(count($member)<1){
            return redirect("/departments/$dept_id/teams/create");
        }
        else{
            $team_name=$request->input('team_name');
            $team_mail=$request->input('head_email');
            $team=new Team;
            $team->team_name=$team_name;
            $team->team_head_id=$member[0]->id;
            $team->dept_id= $dept_id;
            $team->save();
            // return $team->team_id;
            $team_member=new TeamMember;
            $team_member->uid=$member[0]->id;
            $team_member->team_id=$team->team_id;
            $team_member->save();
            return redirect("/departments/$dept_id/teams/");
        }
    }

    public function viewMembers($dept_id,$team_id){
        // return $dept_id;
        $teams=Team::select()->where('team_id',$team_id)->get();
        $team_members=TeamMember::select()->where('team_id',$team_id)->get();
        $users=array();
        foreach($team_members as $team_member){
            array_push($users,User::find($team_member->uid));
        }
        return view('department.team.view_member')->with('users',$users)->with('team_members',$team_members)->with('dept_id',$dept_id)->with('team_id',$team_id);
    }

    public function addMembers($dept_id,$team_id){
        return view('department.team.add_member')->with('dept_id',$dept_id)->with('team_id',$team_id);
    }

    public function storeMember(Request $request,$dept_id,$team_id){
        $this->validate($request,[
            'email'=>'required'
        ]);
        $user=User::select()->where('email',$request->input('email'))->get();
        if(count($user)<0){
            return redirect()->back();
        }
        // return $user;
        $team_member=new TeamMember;
        $team_member->team_id=$team_id;
        $team_member->uid=$user[0]->id;
        $team_member->save();
        return redirect()->back();
    }

    public function memberDetails($dept_id,$team_id,$user_id){
        $user=User::find($user_id);
        $records=MemberRecord::select()->where('uid',$user_id)->get();
        return view('department.team.show')->with('dept_id',$dept_id)->with('team_id',$team_id)->with('user',$user)->with('records',$records);
        return $user_id;
    }

    public function createRating($dept_id,$team_id,$user_id){
        return view('department.team.create_rating')->with('dept_id',$dept_id)->with('team_id',$team_id)->with('user_id',$user_id);
    }

    public function storeRating(Request $request,$dept_id,$team_id,$user_id){
        $member_record=new MemberRecord;
        $member_record->uid=$user_id;
        $member_record->team_head_id=Auth::user()->id;
        $member_record->task=$request->input('task');
        $member_record->comment=$request->input('comment');
        $member_record->rating=$request->input('rating');
        $member_record->team_id=$team_id;
        $member_record->save();
        return redirect()->back();
    }
    
}
