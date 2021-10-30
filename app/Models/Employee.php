<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=['user_id','lastname', 'firstname', 'patronymic', 'old_lastname','status','iin','birthdate','gender_id','family_status_id','nationality_id','citizenship_id','region_id','living_address','identity_document_id','doc_number','doc_ser','doc_give_date','doc_end_date','doc_organ_id','home_phone','mobile_phone','email','kkson_section_id','scientificdegree_id','academicstatus_id'];

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
    public function kkson_section(){
        return $this->belongsTo(Kkson_section::class);
    }
    public function scientificdegree(){
        return $this->belongsTo(Scientificdegree::class);
    }
    public function academicstatus(){
        return $this->belongsTo(Academicstatus::class);
    }
}
