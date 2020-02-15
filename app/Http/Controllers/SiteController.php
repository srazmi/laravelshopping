<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Categori;
use App\Models\Kala;



class SiteController extends Controller
{
    public function getall()
    {
        $allusers = Users::with('Gender')->get();
        // dd($allusers);die;
        return view('users/showusers')->with('all',$allusers);
    }
    public function validateusers(Request $request)
    {
        // dd($request);die;
        $request->validate([
            'name'=>'required',
            'username'=>'required | string' ,
            'email'=>'required | email',
            'pass'=>'required',
            'gender_id'=>'required',
            
        ]);
        $form= new Users();
        $form->name=$request->post('name');
        $form->username=$request->post('username');
        $form->mail=$request->post('email');
        $form->password=$request->post('pass');
        $form->gender_id=$request->post('gender_id');
        $form->mobile=$request->post('mobile');
        $form->registerdate=time();
        $form->logindate=time();
        //var_dump($form->name);die;
        $form->save();
        return redirect ('showusers')->with('success','OK!');
    }

    public function updateusers(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required | string' ,
            'email'=>'required | email',
            
            
        ]);
        $id= $request->id;
        $form= Users::find($id);
        $form->name=$request->post('name');
        $form->username=$request->post('username');
        $form->mail=$request->post('email');
        // $form->password=$request->post('pass');
        $form->gender_id=$request->post('gender_id');
        //$form->registerdate=time();
        //$form->logindate=time();
        //var_dump($form->name);die;
        $form->save();
        return redirect ('showusers')->with('success','OK!');
    }

    public function update($id)
    {
        $user= Users::find($id);
        return view('users/update')->with('user',$user);
    }

    public function delete($id)
    {
        $user=Users::find($id);
        $user->delete();
        return redirect ('showusers')->with('success','OK!');
    }

    public function showproduct()
    {
        $category=Categori::all();
        $kalas=Kala::with('Categori')->get();
        $Temp['category']=$category;
        $Temp['kala']=$kalas;
        return view('welcome')->with('Temp',$Temp);
    }


}
