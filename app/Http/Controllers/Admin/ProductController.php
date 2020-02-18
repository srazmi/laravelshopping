<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Categori::all();
        $kalas=Kala::with('Categori')->get();
        $Temp['category']=$category;
        $Temp['kala']=$kalas;
        return view('admin.product.index')->with('Temp',$Temp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $category=Categori::all();
        return view('admin\product\InsertProducts')->with('category',$category);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);die;
        $request->validate([
            'name'=>'required | string',
            'description'=>'required | string' ,
            'price'=>'required',
            'number'=>'required',
            
        ]);
        $form= new Kala();
        $form->name=$request->post('name');
        $form->description=$request->post('description');
        $form->categori_id=$request->post('category');
        $form->price=$request->post('price');
        $form->number=$request->post('number');
        //var_dump($form->name);die;
        $form->save();
        return redirect ('ShowProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $category=Categori::all();
        $kalas=Kala::with('Categori')->get();
        $Temp['category']=$category;
        $Temp['kala']=$kalas;
        return view('kala.showmobile')->with('Temp',$Temp);
    }
    public function showproduct()
    {
        $category=Categori::all();
        $kalas=Kala::with('Categori')->get();
        $Temp['category']=$category;
        $Temp['kala']=$kalas;
        return view('admin.product.ShowProducts')->with('Temp',$Temp);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Categori::all();
        $kala = Kala::find($id);
        
        $Temp['category']=$category;
        $Temp['kala']=$kala;
        // dd($Temp);die;
        return view('admin.product.edit')->with('Temp',$Temp);
    }

    public function Update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            
            'description'=>'required ',
            'category'=>'required',
            'price'=>'required'
            
            
        ]);
        //$id= $request->id;
        $form= Kala::find($id);
        $form->name=$request->post('name');    
        $form->description=$request->post('description');
        $form->categori_id=$request->post('category');
        $form->price=$request->post('price');
        $form->number=$request->post('number');


        $form->save();
        return redirect ('ShowProducts')->with('success','OK!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request,$id)
    // {
    //     // dd($request->post('name'));die;
    //     $request->validate([
    //         'name'=>'required | string',
    //         'description'=>'required | string' ,
    //         'price'=>'required',
    //         'number'=>'required',         
    //     ]);

    //     //$id= $request->id;
    //     $form= Kala::find($id);
    //         // dd($form);die;
    //     $form->name=$request->post('name');
    //     $form->description=$request->post('description');
    //     $form->categori_id=$request->post('category');
    //     $form->price=$request->post('price');
    //     $form->number=$request->post('number');
    //     // var_dump($form->name);die;
    //     $form->save();
    //     return view('admin.product.index')->with('kalas',Kala::all());
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $product=Kala::find($id);
        $product->delete();
        $products=Kala::all();
        return redirect('ShowProducts')->with('kalas',$products);
        
    }
    // public function destroy($id)
    // {
    //     $product=Kala::find($id);
    //     $product->delete();
    //     $products=Kala::all();
    //     return view('admin.product.index')->with('kalas',$products);
        
    // }
    
}
