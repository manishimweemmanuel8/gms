<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

use App\Corporate;
use Illuminate\Http\Request;
use DB;

class CorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $corporates=Corporate::all();
        return view('manager/corporate.index', compact('corporates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manager/corporate.create');
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
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $corporate = new Corporate();
  
        $corporate->names= $request->input('name');
        $corporate->email= $request->input('email');
        $corporate->save(); 
        return redirect()->route('corporate.index')->with('info','corporate Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function show(Corporate $corporate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$customer_id=null)
    {
        //
        $customers=null;
        if(!$customer_id){
            $customers=DB::table("customers")->where('corporate_id',$id)->get();
        }

        $corporate = Corporate::find($id);
        return view('manager/corporate.edit',['corporate'=> $corporate, 'customer_id'=>$customer_id,'customers'=>$customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corporate $corporate)
    {
        //
        $request->validate([
             'name'=>'required',
            'email'=>'required',
            'customer_id'=>'required',
        ]);

        $corporate = Corporate::find($request->input('id'));
        $corporate->names= $request->input('name');
        $corporate->email= $request->input('email');
        $corporate->representative= $request->input('customer_id');
        $corporate->update(); 
        return redirect()->route('corporate.index')->with('info','corporate Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $corporate = Corporate::find($id);
        //delete
        $corporate->delete();
        return redirect()->route('corporate.index');
    }
}
