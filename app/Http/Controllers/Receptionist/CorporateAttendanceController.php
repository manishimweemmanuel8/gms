<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

use App\CorporateAttendance;
use Illuminate\Http\Request;
use Auth;
 
class CorporateAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = CorporateAttendance::where('receptionist_id',Auth::guard('receptionist')->user()->id)->get();
        return view('receptionist/company.index', compact('companies'));
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
     * @param  \App\CorporateAttendance  $corporateAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateAttendance $corporateAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CorporateAttendance  $corporateAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(CorporateAttendance $corporateAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CorporateAttendance  $corporateAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorporateAttendance $corporateAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CorporateAttendance  $corporateAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
         $company = CorporateAttendance::find($id);
        //delete
        $company->delete();
        return redirect()->route('company.index');
    }
}
