<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\user;
// use App\Models\Users;

use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alluserdatatabels()
    {
        $users= User::all();
        // dd($users);die;
        return DataTables()->of($users)->make(true);
    }

    public function index()
    {
        // echo "hh";
        $users = User::all();
        // dd($users);die;
        return view('admin.users.UserManagement')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.layout.Edit')->with('user',$user);
    }
    public function updateusers(Request $request)
    {
        $request->validate([
            'name'=>'required',
            
            'email'=>'required | email',
            
            
        ]);
        $id= $request->id;
        $form= User::find($id);
        $form->name=$request->post('name');
        
        $form->email=$request->post('email');
        // $form->password=$request->post('pass');
        
        //$form->registerdate=time();
        //$form->logindate=time();
        //var_dump($form->name);die;
        $form->save();
        return redirect ('users/all')->with('success','OK!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  dd($request->id);die;
        $id= $request->id;
        $form= User::find($id);
        $form->name=$request->post('name');
        $form->email=$request->post('email');
        $form->save();
        return redirect ('admin/users')->with('users',User::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        //$id1=User::finde(auth()->id())->get();
        $CurrentUser=User::find(auth()->id());
      
        if(($user->id)==($CurrentUser->id))
        {
            return redirect ('ShowUsers')->with('success','OK!');        }
        else
        {
            $user->delete();
            $users=User::all();
            return redirect ('ShowUsers')->with('success','OK!');        }
       
    }
}

