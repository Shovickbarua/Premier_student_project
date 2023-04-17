<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Prac extends Controller
{
    public function index()
    {
        return view('groups.add_group');
    }
    public function group_list()
    {
        $groups = Group::all();
        return view('groups.group_list',compact('groups'));
    }

    public function multi(Request $request)
    {
        $request->validate(
            [
                'stu_id'   => 'required|unique:groups'
            ],
            [
                'stu_id.required|unique:groups' => 'Id already taken',
            ]
        );
        
    for($i=0; $i<count($request->stu_id); $i++){
        $group = new Group();
        $group->stuName =$request->stuName[$i];
        $group->stu_id =$request->stu_id[$i];
        $group->group_name =$request->group_name[$i];
        $group->save();
    } 
  /*  
    $stu_id         = $request->stu_id;
    $stuName        = $request->stuName;
    $group_name     = $request->group_name;
 
    foreach($stu_id as $key=>$insert){
        $datasave=[
            'stu_id'          => $stu_id[$key],
            'stuName'         => $stuName[$key],
            'group_name'      => $group_name
        ];
        DB::table('groups')->insert($datasave);
    } */
    return redirect(route('list'));
}

    
}

