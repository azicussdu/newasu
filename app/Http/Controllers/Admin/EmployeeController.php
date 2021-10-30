<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\All_region;
use App\Models\Employee;
use App\Models\Family_status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employee.index', compact('employees'));
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
        $citizenships=DB::table('citizenships')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $kkson_sections=DB::table('kkson_sections')->select('id', 'nameru as name')->get();
        $scientificdegrees=DB::table('scientificdegrees')->select('id', 'name'.$lang.' as name')->get();
        $academicstatuses=DB::table('academicstatuses')->select('id', 'name'.$lang.' as name')->get();
        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
        return view('employee.create',compact('nationalities', 'genders','citizenships','identity_documents', 'sel_identity_documents', 'kkson_sections','scientificdegrees','academicstatuses','all_regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $this->validate($request, [
            'lastname'=>'required',
            'firstname'=>'required',
            'iin'=>'required|unique:employees',
            'birthdate'=>'required',
            'gender_id'=>'required|not_in:0',
            'family_status_id'=>'required|not_in:0',
            'nationality_id'=>'required|not_in:0',
            'citizenship_id'=>'required|not_in:0'
        ]);
        $user=User::create([
            'login' => $request->iin,
            'password' => Hash::make('123456789'),
        ]);
        if($user){
            $data=$request->all();
            $data['user_id']=$user->id;
            Employee::create($data);
            return redirect()->route('employee.index')->with('info', 'Добавлено успешно!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $lang=app()->getLocale();
        $nationalities=DB::table('nationalities')->select('id', 'name'.$lang.' as name')->get();
        $genders=DB::table('genders')->select('id', 'name'.$lang.' as name')->get();
        $citizenships=DB::table('citizenships')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $kkson_sections=DB::table('kkson_sections')->select('id', 'nameru as name')->get();
        $scientificdegrees=DB::table('scientificdegrees')->select('id', 'name'.$lang.' as name')->get();
        $academicstatuses=DB::table('academicstatuses')->select('id', 'name'.$lang.' as name')->get();
        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
        return view('employee.edit',compact('employee','nationalities', 'genders','citizenships','identity_documents', 'sel_identity_documents', 'kkson_sections','scientificdegrees','academicstatuses','all_regions'));

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
        $this->validate($request, [
            'lastname'=>'required',
            'firstname'=>'required',
        ]);
        //dd($request->all());
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('info', 'Редактировано успешно!');
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
                $html.="<option value=".$f_status->id." {{ old('f_status')==$f_status->id ? 'selected':'' }}>".$f_status->name."</option>";
                //$html.='<option value="'.$f_status->id.'">'.$f_status->name.'</option>';
            }
            echo $html;

        }
        elseif ($gender_id==2){
            $f_statuses=DB::table('family_statuses')->whereIn('id', ['1','2'])->select('id', 'name'.$lang.' as name')->get();

            //dd($specializations);

            $html='<option value="">Выберите</option>';
            foreach ($f_statuses as $f_status){
                $html.="<option value=".$f_status->id." {{ old('f_status')==$f_status->id ? 'selected':'' }}>".$f_status->name."</option>";
            }
            echo $html;

        }
    }
    public function get_by_region(Request $request){
        $lang=app()->getLocale();
        $r_id=$request->post('rid');
        $all_sub_regions=All_region::with('children')->where('parent_id','=',$r_id)->select('id', 'name'.$lang.' as name', 'code')->get();

        $html='<option value="">Выберите район</option>';
        foreach ($all_sub_regions as $all_sub_region){
            $html.='<option value="'.$all_sub_region->id.'">'.$all_sub_region->name.'</option>';

            if($all_sub_region->children){
                foreach ($all_sub_region->children as $all_sub_region){
                    $html.='<option value="'.$all_sub_region->id.'"> - '.$all_sub_region->nameru.'</option>';
                }
                if($all_sub_region->children){
                    foreach ($all_sub_region->children as $all_sub_region){
                        $html.='<option value="'.$all_sub_region->id.'"> -- '.$all_sub_region->nameru.'</option>';
                    }
                    if($all_sub_region->children){
                        foreach ($all_sub_region->children as $all_sub_region){
                            $html.='<option value="'.$all_sub_region->id.'"> --- '.$all_sub_region->nameru.'</option>';
                        }
                        if($all_sub_region->children){
                            foreach ($all_sub_region->children as $all_sub_region){
                                $html.='<option value="'.$all_sub_region->id.'"> ---- '.$all_sub_region->nameru.'</option>';
                            }
                        }
                    }
                }
            }

        }
//        //print_r($all_sub_regions);
        echo $html;
    }
}
