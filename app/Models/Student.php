<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['user_id','lastname', 'firstname', 'patronymic', 'old_lastname','status','iin','birthdate','gender_id','family_status_id','nationality_id','citizenship_id','region_id','living_address','hostel','orphan','child_without','disabled_person','studying_military','identity_document_id','doc_number','doc_ser','doc_give_date','doc_end_date','doc_organ_id','ud_scan','at_scan','admission_date','education_admission_id','degree_type_id','studyform_id','profession_id','specialization_id','center_studylanguage_id','foreign_lan_school_id','course_id','group_id','paymentform_id','benefit_id','grant_cer_number','grant_cer_ser','grant_give_date','home_phone','mobile_phone','email','book_number','photo'];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }
    public function family_status(){
        return $this->belongsTo(Family_status::class);
    }
    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }
    public function citizenship(){
        return $this->belongsTo(Citizenship::class);
    }
    public function identity_document(){
        return $this->belongsTo(Identity_document::class);
    }
    public function sel_identity_document(){
        return $this->belongsTo(Sel_identity_document::class, 'doc_organ_id');
    }
    public function education_admission(){
        return $this->belongsTo(Education_admission::class);
    }
    public function degree_type(){
        return $this->belongsTo(Degree_type::class);
    }
    public function studyform(){
        return $this->belongsTo(Studyform::class);
    }
    public function foreign_lan_school(){
        return $this->belongsTo(Foreign_lan_school::class);
    }
    public function profession(){
        return $this->belongsTo(Profession::class);
    }
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
    public function center_studylanguage(){
        return $this->belongsTo(Center_studylanguage::class);
    }
    public function studyform_course(){
        return $this->belongsTo(Studyform_course::class, 'course_id');
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function paymentform(){
        return $this->belongsTo(Paymentform::class);
    }
    public function benefit(){
        return $this->belongsTo(Benefit::class);
    }
    public function region(){
        return $this->belongsTo(All_region::class, 'region_id');
    }

}
