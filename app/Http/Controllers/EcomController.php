<?php

namespace App\Http\Controllers;

use App\Models\App\Ecom;
use Illuminate\Http\Request;

class EcomController extends Controller
{
  
    public function index(Request $request)
    {
      $data["data"]=Ecom::all();
        return view('base',$data); 
          // return dd($data);
    }
          
   
          
         public function detail(Request $request){
         $id = $request->id;
          $data = Ecom::where('id', $id)->first();
         return view('detail')->with(compact('data', $data));
        // return print_r($data);
      }
      
   
      public function create(Request $request)
    {
        return view('add');
    }

   
    public function store(Request $request){
       $request->validate([
         'Product_Name'=>'required',
        'product_details'=>'required',
         'rs'=>'required',
         'logo'=>'required',
         'quentity'=>'required',
         'Rating'=>'required',
         'image'=>'required|mimes:jpg,png',
      ]);
       $filename = time(). '.' .$request->image->extension();
       $request->image->move(public_path('images'),$filename);

       $filename = time(). '.' .$request->logo->extension();
       $request->logo->move(public_path('images'),$filename);
         
      
     Ecom::create([
           'Product_Name'=>$request->Product_Name,
           'product_details'=>$request->product_details,
           'quentity'=>$request->quentity,
            'rs'=>$request->rs,
            'logo'=>$request->logo,
           'Rating'=>$request->Rating,
           'image'=>$filename,

       ]);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecom  $ecom
     * @return \Illuminate\Http\Response
     */
    public function show(Ecom $ecom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecom  $ecom
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecom $ecom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Ecom  $ecom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecom $ecom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecom  $ecom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecom $ecom)
    {
        //
    }
}
