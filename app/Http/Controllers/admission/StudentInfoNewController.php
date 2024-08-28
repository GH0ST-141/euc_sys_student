<?php

namespace App\Http\Controllers\admission;

use App\Http\Controllers\Controller;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

// REVIEW: Controller for Admission New Student
class StudentInfoNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name' => ['required','string','max:255'],
            'first_name' => ['required','string','max:255'],
            'middle_name' => ['required','string','min:2','max:255'],
            'course_id' => ['required','string','min:3','max:6'],
            'region' => ['required','string','max:255'],
            'province' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'barangay' => ['required','string','max:255'],
            'street' => ['nullable','string','max:255'],
            'birth_date' => ['required','date_format:Y-m-d'],
            'birth_place' => ['required', 'string', 'max:255'],
            'citizenship' => ['required','string','max:255'],
            'religion' => ['required','string','max:255'],
            'gender' => ['required', Rule::in(['male','female','others'])],
            'civil_status' => ['required', Rule::in(['single','married','widowed','divorced'])],
            'cell_no' => ['required','digits:11','numeric'],
            'email' => ['required', 'string', 'lowercase', 'email:filter', 'max:255'],
            'father' => ['required','string','max:255'],
            'father_address' => ['required','string','max:255'],
            'father_cell_no' => ['required','digits:11','numeric'],
            'mother' => ['required','string','max:255'],
            'mother_address' => ['required','string','max:255'],
            'mother_cell_no' => ['required','digits:11','numeric'],
            'guardian' => ['required','string','max:255'],
            'guardian_address' => ['required','string','max:255'],
            'guardian_cell_no' => ['required','digits:11','numeric'],
            'elem' => ['required','string','min:8','max:255'],
            'elem_address' => ['required','string','max:255'],
            'elem_grad_yr' => ['required','digits:4','numeric'],
            'jhs' => ['required','string','min:8','max:255'],
            'jhs_address' => ['required','string','max:255'],
            'jhs_grad_yr' => ['required','digits:4','numeric'],
            'shs' => ['required','string','min:8','max:255'],
            'shs_address' => ['required','string','max:255'],
            'shs_grad_yr' => ['required','digits:4','numeric'],
            // REVIEW: Max 8000kb or 8mb image size
            'shs_hs_card' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
            'good_moral' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
            'birth_cert' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
            'pic_2x2' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
            'entrance_exam_res' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
            'phys_test_res' => ['nullable','image','mimes:jpg,jpeg,png','max:8192'],
        ]);

        // FIXME: The image credentials doesn't work, 'must be an image'
        // added enctype already
        $student_info = StudentInfo::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'course_id' => $request->course_id,
            'region' => $request->region,
            'province' => $request->province,
            'city' => $request->city,
            'barangay' => $request->barangay,
            'street' => $request->street,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'citizenship' => $request->citizenship,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'civil_status' => $request->civil_status,
            'cell_no' => $request->cell_no,
            'email' => $request->email,
            'father' => $request->father,
            'father_address' => $request->father_address,
            'father_cell_no' => $request->father_cell_no,
            'mother' => $request->mother,
            'mother_address' => $request->mother_address,
            'mother_cell_no' => $request->mother_cell_no,
            'guardian' => $request->guardian,
            'guardian_address' => $request->guardian_address,
            'guardian_cell_no' => $request->guardian_cell_no,
            'elem' => $request->elem,
            'elem_address' => $request->elem_address,
            'elem_grad_yr' => $request->elem_grad_yr,
            'jhs' => $request->jhs,
            'jhs_address' => $request->jhs_address,
            'jhs_grad_yr' => $request->jhs_grad_yr,
            'shs' => $request->shs,
            'shs_address' => $request->shs_address,
            'shs_grad_yr' => $request->shs_grad_yr,
            'shs_hs_card' => $request->shs_hs_card,
            'good_moral' => $request->good_moral,
            'birth_cert' => $request->birth_cert,
            'pic_2x2' => $request->pic_2x2,
            'entrance_exam_res' => $request->entrance_exam_res,
            'phys_test_res' => $request->phys_test_res,
            'prev_univ' => 'not_applicable',
            'prev_univ_grad_yr' => 'not_applicable',
            'user_id' => $request->user()->id
        ]);

        // TODO: redirect to this
        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
