<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\All_region;
use App\Models\Degree_type;
use App\Models\Gender;
use App\Models\Group;
use App\Models\Nationality;
use App\Models\Profession;
use App\Models\Specialization;
use App\Models\Student;
use App\Models\Studyform;
use App\Models\Studyform_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
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
        $f_statuses=DB::table('family_statuses')->select('id', 'name'.$lang.' as name')->get();
        $сitizenships=DB::table('сitizenships')->select('id', 'name'.$lang.' as name')->get();
        $country_cames=DB::table('country_cames')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
        $degree_types=DB::table('degree_types')->select('id', 'name'.$lang.' as name')->where('is_academic_degree','=',1)->get();
        $center_studylanguages=DB::table('center_studylanguages')->select('id', 'name'.$lang.' as name')->get();
        $paymentforms=DB::table('paymentforms')->select('id', 'name'.$lang.' as name')->get();
        $residence_states=DB::table('residence_states')->select('id', 'name'.$lang.' as name')->get();

        return view('student.create', compact('nationalities', 'genders', 'f_statuses', 'сitizenships', 'country_cames', 'identity_documents', 'sel_identity_documents', 'all_regions','center_studylanguages','degree_types', 'paymentforms','residence_states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lastname'=>'required',
            'firstname'=>'required',
            'patronymic'=>'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function get_by_region(Request $request){
        $lang=app()->getLocale();
        $r_id=$request->post('rid');
        $all_sub_regions=All_region::with('children')->where('parent_id','=',$r_id)->select('id', 'name'.$lang.' as name', 'code')->get();

        $html='<option value="">Выберите район</option>';
        foreach ($all_sub_regions as $all_sub_region){
            $html.='<option value="'.$all_sub_region->code.'">'.$all_sub_region->name.'</option>';

            if($all_sub_region->children){
                foreach ($all_sub_region->children as $all_sub_region){
                    $html.='<option value="'.$all_sub_region->code.'"> - '.$all_sub_region->nameru.'</option>';
                }
                if($all_sub_region->children){
                    foreach ($all_sub_region->children as $all_sub_region){
                        $html.='<option value="'.$all_sub_region->code.'"> -- '.$all_sub_region->nameru.'</option>';
                    }
                    if($all_sub_region->children){
                        foreach ($all_sub_region->children as $all_sub_region){
                            $html.='<option value="'.$all_sub_region->code.'"> --- '.$all_sub_region->nameru.'</option>';
                        }
                        if($all_sub_region->children){
                            foreach ($all_sub_region->children as $all_sub_region){
                                $html.='<option value="'.$all_sub_region->code.'"> ---- '.$all_sub_region->nameru.'</option>';
                            }
                        }
                    }
                }
            }

        }
//        //print_r($all_sub_regions);
     echo $html;
    }
    public function get_by_profession(Request $request){
        $lang=app()->getLocale();
        $p_id=$request->post('pid');
        $specializations=Specialization::where('profession_id','=',$p_id)->select('id', 'name'.$lang.' as name', 'specializationCode')->get();

        //dd($specializations);

        $html='<option value="">Выберите</option>';
        foreach ($specializations as $specialization){
            $html.='<option value="'.$specialization->id.'">'.$specialization->name.'</option>';
        }
//        //print_r($all_sub_regions);
     echo $html;
    }
    public function get_by_specialization(Request $request){
        $lang=app()->getLocale();
        $s_id=$request->post('sid');
        $groups=Group::where('specialization_id','=',$s_id)->select('id', 'name')->get();

        //dd($specializations);

        $html='<option value="">Выберите</option>';
        foreach ($groups as $group){
            $html.='<option value="'.$group->id.'">'.$group->name.'</option>';
        }
//        //print_r($all_sub_regions);
     echo $html;
    }
    public function get_by_degree(Request $request){
        $lang=app()->getLocale();
        $deg_id=$request->post('degid');
        $degree_types=Degree_type::find($deg_id);
        $studyforms=Studyform::where('degree_type_id','=',$deg_id)->select('id', 'name'.$lang.' as name')->get();

        //dd($specializations);

        $html='<option value="">Выберите</option>';
        foreach ($studyforms as $studyform){
            $html.='<option value="'.$studyform->id.'">'.$studyform->name.'</option>';
        }
     echo $html;
    }
    public function get_by_degree_profession(Request $request){
        $lang=app()->getLocale();
        $d_id=$request->post('degreegid');
        $degreetype=Degree_type::find($d_id);
        //dd($specializations);

        $html='<option value="">Выберите</option>';
        foreach ($degreetype->professions as $profession){
            $html.='<option value="'.$profession->id.'">'.$profession->professionCode.' - '.$profession->nameru.'</option>';
        }
     echo $html;
    }
    public function get_by_studyform(Request $request){
        $lang=app()->getLocale();
        $studyform_id=$request->post('studyform_id');
        $studyform_courses=DB::table('studyform_courses')->where('studyform_id','=',$studyform_id)->get();
        //find($studyform_id);
        //dd($specializations);

        $html='<option value="">Выберите</option>';
        foreach ($studyform_courses as $studyform_course){
            $html.='<option value="'.$studyform_course->id.'">'.$studyform_course->course_number.'</option>';
        }
     echo $html;
    }
    public function get_by_paymentform(Request $request){
        $lang=app()->getLocale();
        $paymentform_id=$request->post('paymentform_id');
        $grant_types=DB::table('grant_types')->where('paymentform_id','=',$paymentform_id)->select('id', 'name'.$lang.' as name')->get();
        //find($studyform_id);
        //dd($specializations);

        $html='<option value="0">Выберите</option>';
        foreach ($grant_types as $grant_type){
            $html.='<option value="'.$grant_type->id.'">'.$grant_type->name.'</option>';
        }
        echo $html;
    }
    public function get_by_gosorgan(Request $request){
        $lang=app()->getLocale();
        $finance_type_id=$request->post('finance_type_id');
        //$grant_types=DB::table('grant_types')->where('paymentform_id','=',$paymentform_id)->select('id', 'name'.$lang.' as name')->get();
        //find($studyform_id);
        //dd($specializations);
        if($finance_type_id==1){
            $html='<option value="">-- не выбрано --</option>';
            $html.='<option value="0">Министерство здравоохранения РК (МЗ)</option>';
            $html.='<option value="1">Министерство культуры и спорта РК (МКС)</option>';
            $html.='<option value="2">Министерство сельского хозяйства РК (МСХ)</option>';
            $html.='<option value="3">Другой</option>';
            echo $html;
        }
        else{
            $html='<option value="">-- не выбрано --</option>';
            echo $html;
        }
    }
    public function get_by_gosorgan_work(Request $request){
        $lang=app()->getLocale();
        $finance_type_id=$request->post('finance_type_id');
        $ucontracts=DB::table('ucontracts')->get();
        $html='<option value="">Выберите</option>';
        foreach ($ucontracts as $ucontract){
            $html.='<option value="'.$ucontract->id.'">'.$ucontract->company.'</option>';
        }
        echo $html;
    }
    public function get_by_gosorgan_kvota(Request $request){
        $lang=app()->getLocale();
        $paymentform_id=$request->post('paymentform_id');
        $benefits=DB::table('benefits')->where('type','=',2)->select('id', 'name'.$lang.' as name')->get();
        $html='<option value="">Выберите</option>';
        foreach ($benefits as $benefit){
            $html.='<option value="'.$benefit->id.'">'.$benefit->name.'</option>';
        }
        echo $html;
    }
}
//$studyforms=Studyform::with(['degreetypes'=>function($query){
//    $query->where('degreetypes.id',deg_id);
//}])->select('id', 'name'.$lang.' as name')->get();
