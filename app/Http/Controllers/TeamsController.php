<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Department;
use App\Team;
use App\User;
use App\TeamMember;
use App\Rateable;

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

    public function viewMembers(){

    }
    public function rate(Request $request)

    {

        request()->validate(['rate' => 'required']);

        $task = Team::find($request->id);



        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;



        $team->rating()->save($rating);



        return redirect()->route("teams");

    }
}
