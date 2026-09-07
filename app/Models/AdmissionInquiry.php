<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionInquiry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'student_name',
        'guardian_name',
        'phone',
        'email',
        'ssc_gpa',
        'group',
        'ssc_board',
        'ssc_roll',
        'passing_year',
        'address',
        'status',
    ];
}
