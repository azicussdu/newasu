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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lang=app()->getLocale();
//        $nationalities=DB::table('nationalities')->select('id', 'name'.$lang.' as name')->get();
//        $genders=DB::table('genders')->select('id', 'name'.$lang.' as name')->get();
//        $f_statuses=DB::table('family_statuses')->select('id', 'name'.$lang.' as name')->get();
//        $сitizenships=DB::table('сitizenships')->select('id', 'name'.$lang.' as name')->get();
//        $country_cames=DB::table('country_cames')->select('id', 'name'.$lang.' as name')->get();
//        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
//        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
//        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
//        $degree_types=DB::table('degree_types')->select('id', 'name'.$lang.' as name')->where('is_academic_degree','=',1)->get();
//        $center_studylanguages=DB::table('center_studylanguages')->select('id', 'name'.$lang.' as name')->get();
//        $paymentforms=DB::table('paymentforms')->select('id', 'name'.$lang.' as name')->get();
//        $residence_states=DB::table('residence_states')->select('id', 'name'.$lang.' as name')->get();
        $nationalities=DB::table('nationalities')->select('id', 'name'.$lang.' as name')->get();
        $genders=DB::table('genders')->select('id', 'name'.$lang.' as name')->get();
        $citizenships=DB::table('citizenships')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
        $professions=DB::table('professions')->select('id', 'name'.$lang.' as name', 'professionCode')->get();
        $center_studylanguages=DB::table('center_studylanguages')->select('id', 'name'.$lang.' as name')->get();
        $paymentforms=DB::table('paymentforms')->select('id', 'name'.$lang.' as name')->get();
        $education_admissions=DB::table('education_admissions')->select('id', 'name'.$lang.' as name')->get();
        $foreign_lan_schools=DB::table('foreign_lan_schools')->select('id', 'name'.$lang.' as name')->get();
        $benefits=DB::table('benefits')->select('id', 'name'.$lang.' as name')->get();
        $student=new Student();
        return view('student.create', compact('student','nationalities', 'genders','citizenships','identity_documents','sel_identity_documents','all_regions','professions','center_studylanguages','paymentforms','education_admissions','foreign_lan_schools','benefits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->post('citizenship_id')==1){
            $this->validate($request, [
                'lastname'=>'required',
                'firstname'=>'required',
                'iin'=>'required|unique:employees',
                'birthdate'=>'required',
                'gender_id'=>'required',
                'region_id'=>'required',
                'citizenship_id'=>'required',
                'hostel'=>'required|in:1,0',
                'orphan'=>'required|in:1,0',
                'child_without'=>'required|in:1,0',
                'disabled_person'=>'required|in:1,0',
                'studying_military'=>'required|in:1,0',
                'admission_date'=>'required',
                'education_admission_id'=>'required',
                'degree_type_id'=>'required',
                'studyform_id'=>'required',
                'foreign_lan_school_id'=>'required',
                'profession_id'=>'required',
                'specialization_id'=>'required',
                'center_studylanguage_id'=>'required',
                'course_id'=>'required',
                'group_id'=>'required',
                'paymentform_id'=>'required',
                'benefit_id'=>'required',
                'ud_scan' => 'mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
                'at_scan' => 'mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
                'photo' => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);
        }
        else{
            $this->validate($request, [
                'lastname'=>'required',
                'firstname'=>'required',
                'birthdate'=>'required',
                'gender_id'=>'required',
                'region_id'=>'required',
                'citizenship_id'=>'required',
                'hostel'=>'required|in:1,0',
                'orphan'=>'required|in:1,0',
                'child_without'=>'required|in:1,0',
                'disabled_person'=>'required|in:1,0',
                'studying_military'=>'required|in:1,0',
                'admission_date'=>'required',
                'education_admission_id'=>'required',
                'degree_type_id'=>'required',
                'studyform_id'=>'required',
                'foreign_lan_school_id'=>'required',
                'profession_id'=>'required',
                'specialization_id'=>'required',
                'center_studylanguage_id'=>'required',
                'course_id'=>'required',
                'group_id'=>'required',
                'paymentform_id'=>'required',
                'benefit_id'=>'required',
                'ud_scan' => 'mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
                'at_scan' => 'mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
                'photo' => 'mimes:png,jpg,jpeg,pdf|max:2048',
            ]);
        }
        $filename_ud="";
        $filename_at="";
        $filename_photo="";
        if($request->hasFile('ud_scan')) {
            $file = $request->file('ud_scan');
            $extension=$file->getClientOriginalExtension();
            $filename_ud = time().''.uniqid().'.'.$extension;
            $file->storeAs('students',$filename_ud);
        }
        if($request->hasFile('at_scan')) {
            $file = $request->file('at_scan');
            $extension=$file->getClientOriginalExtension();
            $filename_at = time().''.uniqid().'.'.$extension;
            $file->storeAs('students',$filename_at);
        }
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension=$file->getClientOriginalExtension();
            //$extension=$file->getClientOriginalExtension();
            $filename_photo = time().''.uniqid().'.'.$extension;
            $file->storeAs('students',$filename_photo);
        }
        $data=$request->all();
        $data['ud_scan']=$filename_ud;
        $data['at_scan']=$filename_at;
        $data['photo']=$filename_photo;
        Student::create($data);
        return redirect()->route('student.index')->with('info', 'Добавлено успешно!');
//        $user=User::create([
//            'login' => $request->iin,
//            'password' => Hash::make('123456789'),
//        ]);
//        if($user){
//            $data=$request->all();
//            $data['user_id']=$user->id;
//            Student::create($data);
//            return redirect()->route('student.index')->with('info', 'Добавлено успешно!');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $region_id=$student->region_id;
        $region=DB::table('all_regions')->where('id', $region_id)->first();
        while($region->step!=1){
            $parent_id=$region->parent_id;
            $region=DB::table('all_regions')->where('id', $parent_id)->first();
        }
        $main_region_id=$region->id;
        $region=DB::table('all_regions')->where('id', $main_region_id)->first();

        return view('student.show', compact('student', 'region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $lang=app()->getLocale();
        $nationalities=DB::table('nationalities')->select('id', 'name'.$lang.' as name')->get();
        $genders=DB::table('genders')->select('id', 'name'.$lang.' as name')->get();
        $citizenships=DB::table('citizenships')->select('id', 'name'.$lang.' as name')->get();
        $identity_documents=DB::table('identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $sel_identity_documents=DB::table('sel_identity_documents')->select('id', 'name'.$lang.' as name')->get();
        $all_regions=DB::table('all_regions')->select('id', 'name'.$lang.' as name')->whereNull('parent_id')->get();
        $professions=DB::table('professions')->select('id', 'name'.$lang.' as name', 'professionCode')->get();
        $center_studylanguages=DB::table('center_studylanguages')->select('id', 'name'.$lang.' as name')->get();
        $paymentforms=DB::table('paymentforms')->select('id', 'name'.$lang.' as name')->get();
        $education_admissions=DB::table('education_admissions')->select('id', 'name'.$lang.' as name')->get();
        $foreign_lan_schools=DB::table('foreign_lan_schools')->select('id', 'name'.$lang.' as name')->get();
        $benefits=DB::table('benefits')->select('id', 'name'.$lang.' as name')->get();
        $main_region_id=$student->region_id;
        $region=DB::table('all_regions')->where('id', $main_region_id)->first();
        while($region->step!=1){
            $parent_id=$region->parent_id;
            $region=DB::table('all_regions')->where('id', $parent_id)->first();
        }
        $main_region_id_table=$region->id;


        return view('student.edit', compact('student','main_region_id_table','nationalities','genders','citizenships','identity_documents','sel_identity_documents','all_regions','professions','center_studylanguages','paymentforms','education_admissions','foreign_lan_schools','benefits'));
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
        $this->validate($request, [
            'lastname'=>'required',
            'firstname'=>'required',
            'birthdate'=>'required',
            'gender_id'=>'required|not_in:0',
            'family_status_id'=>'required|not_in:0',
            'citizenship_id'=>'required|not_in:0'
        ]);
        //dd($request->all());
        $student->update($request->all());
        return redirect()->route('student.index')->with('info', 'Редактировано успешно!');
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
    private function neworold($student_id,$key,$value){
        if($student_id){
            return $value;
        }
        else{
            return old($key, $value);
        }
    }

    public function get_by_gender(Request $request){
        $lang=app()->getLocale();
        $gender_id=$request->post('gender_id');
        if($gender_id==1){
            $f_statuses=DB::table('family_statuses')->whereIn('id', ['3','4'])->select('id', 'name'.$lang.' as name')->get();
            $html='';
            foreach ($f_statuses as $f_status){
                $html.='<option value="'.$f_status->id.'">'.$f_status->name.'</option>';
            }
            echo $html;
        }
        elseif ($gender_id==2){
            $f_statuses=DB::table('family_statuses')->whereIn('id', [1,2])->select('id', 'name'.$lang.' as name')->get();
            $html='';
            foreach ($f_statuses as $f_status){
                $html.='<option value="'.$f_status->id.'">'.$f_status->name.'</option>';
            }
            echo $html;
        }
    }

    public function get_by_region(Request $request){
        $lang=app()->getLocale();
        $r_id=$request->post('rid');
        $all_sub_regions=All_region::with('children')->where('parent_id','=',$r_id)->select('id', 'name'.$lang.' as name', 'code')->get();
        $html='<option value="">Выберите</option>';
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
//    public function get_by_gosorgan_kvota(Request $request){
//        $lang=app()->getLocale();
//        $paymentform_id=$request->post('paymentform_id');
//        $benefits=DB::table('benefits')->where('type','=',2)->select('id', 'name'.$lang.' as name')->get();
//        $html='<option value="">Выберите</option>';
//        foreach ($benefits as $benefit){
//            $html.='<option value="'.$benefit->id.'">'.$benefit->name.'</option>';
//        }
//        echo $html;
//    }


    public function get_by_education_admission(Request $request){
        $lang=app()->getLocale();
        $education_admission_id=$request->post('education_admission_id');
        if($education_admission_id==1 || $education_admission_id==2 || $education_admission_id==3){
            $degree_types=DB::table('degree_types')->whereIn('id',[1,8])->select('id', 'name'.$lang.' as name')->get();
            $html='<option value="">Выберите</option>';
            foreach ($degree_types as $degree_type){
                $html.='<option value="'.$degree_type->id.'">'.$degree_type->name.'</option>';
            }
            echo $html;
        }
        elseif ($education_admission_id==4 || $education_admission_id==5){
            $degree_types=DB::table('degree_types')->whereIn('id',[2,3,4,5,6,7])->select('id', 'name'.$lang.' as name')->get();
            $html='<option value="">Выберите</option>';
            foreach ($degree_types as $degree_type){
                $html.='<option value="'.$degree_type->id.'">'.$degree_type->name.'</option>';
            }
            echo $html;
        }

    }

}
//$studyforms=Studyform::with(['degreetypes'=>function($query){
//    $query->where('degreetypes.id',deg_id);
//}])->select('id', 'name'.$lang.' as name')->get();
