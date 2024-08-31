<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    /**
     *
     *  Associates this model to a table in the DB named 'student_info'.
     *  By default, it is the same as the class name but plural and delimited by '_' (student_infos), but
     *  my table is not plural so this is necessary
     *
     */
    protected $table = 'student_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'course_id',
        'region',
        'province',
        'city',
        'barangay',
        'street',
        'birth_date',
        'birth_place',
        'citizenship',
        'religion',
        'gender',
        'civil_status',
        'cell_no',
        'email',
        'father',
        'father_address',
        'father_cell_no',
        'mother',
        'mother_address',
        'mother_cell_no',
        'guardian',
        'guardian_address',
        'guardian_cell_no',
        'elem',
        'elem_address',
        'elem_grad_yr',
        'jhs',
        'jhs_address',
        'jhs_grad_yr',
        'shs',
        'shs_address',
        'shs_grad_yr',
        'shs_hs_card',
        'good_moral',
        'birth_cert',
        'pic_2x2',
        'entrance_exam_res',
        'phys_test_res',
        'tor',
        'transfer_cred',
        // To avoid error since prev_univ is not nullable
        'prev_univ',
        'user_id'
    ];

}
