<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Family_status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang=app()->getLocale();
        $nationalities=DB::table('nationalities')->select('id', 'name'.$lang.' as name')->get();
        $genders=DB::table('genders')->select('id', 'name'.$lang.' as name')->get();
        $сitizenships=DB::table('сitizenships')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        return view('employee.create',compact('nationalities', 'genders','сitizenships', 'identity_documents', 'sel_identity_documents'));
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
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function get_by_gender(Request $request){
        $lang=app()->getLocale();
        $gender_id=$request->post('gender_id');
        if($gender_id==1){
            $f_statuses=DB::table('family_statuses')->whereIn('id', ['3','4'])->select('id', 'name'.$lang.' as name')->get();

            //dd($specializations);

            $html='<option value="">Выберите</option>';
            foreach ($f_statuses as $f_status){
                $html.='<option value="'.$f_status->id.'">'.$f_status->name.'</option>';
            }
            echo $html;

        }
        elseif ($gender_id==2){
            $f_statuses=DB::table('family_statuses')->whereIn('id', ['1','2'])->select('id', 'name'.$lang.' as name')->get();

            //dd($specializations);

            $html='<option value="">Выберите</option>';
            foreach ($f_statuses as $f_status){
                $html.='<option value="'.$f_status->id.'">'.$f_status->name.'</option>';
            }
            echo $html;

        }
    }
}
