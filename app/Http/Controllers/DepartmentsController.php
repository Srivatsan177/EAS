<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Department;
use App\User;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts=Department::all();
        // return ($depts);
        $dept_head=array();
        foreach($depts as $dept){
            array_push($dept_head,User::find($dept->dept_head_id));
        }
        // return $dept_head;
        return view('department.index')->with('depts',$depts)->with('dept_head',$dept_head);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'hello';
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'dept_name'=>'required',
            'head_mail'=>'required'
        ]);
        $member=User::select()->where('email',$request->input('head_mail'))->get();
        // dd($request->input('head_mail'));
        // dd($member[0]);
        if(count($member)<1){
            return redirect('/departments/create');
        }
        else{
            $dept_name=$request->input('dept_name');
            $head_mail=$request->input('head_mail');
            $dept=new Department;
            $dept->dept_name=$dept_name;
            $dept->dept_head_id=$member[0]->id;
            $dept->save();
            return redirect('/departments');
        }
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
