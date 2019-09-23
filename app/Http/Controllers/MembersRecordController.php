<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Team;
use App\User;
use App\TeamMember;
use App\MemberRecord;

class MembersRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::select()->where('team_id',$team_id)->get();
        $team_members=TeamMember::select()->where('team_id',$team_id)->get();
        $users=array();
        foreach($team_members as $team_member){
            array_push($users,User::find($team_member->uid));
        }
        $users=User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('department.team.add_rating')->with('users',$users)->with('dept_id',$dept_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $id=Auth::id();
        $user_name=$request->input('name');
            $user_email=$request->input('email');
            $user=new User;
            $user->name=$user_name;
            $user->role = $request->input('role');
            $user->email = $user_email;
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
