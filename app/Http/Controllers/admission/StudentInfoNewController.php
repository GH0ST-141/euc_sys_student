<?php

namespace App\Http\Controllers\admission;

use App\Http\Controllers\Controller;
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
            'cell_no' => ['required','digits:11','integer','numeric'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'father' => ['required','string','max:255'],
            'father_address' => ['required','string','max:255'],
            'father_cell_no' => ['required','digits:11','integer','numeric'],
            'mother' => ['required','string','max:255'],
            'mother_address' => ['required','string','max:255'],
            'mother_cell_no' => ['required','digits:11','integer','numeric'],
            'guardian' => ['required','string','max:255'],
            'guardian_address' => ['required','string','max:255'],
            'guardian_cell_no' => ['required','digits:11','integer','numeric'],
            'elem' => ['required','string','min:8','max:255'],
            'elem_address' => ['required','string','max:255'],
            'elem_grad_yr' => ['required','digits:4','integer','numeric'],
            'jhs' => ['required','string','min:8','max:255'],
            'jhs_address' => ['required','string','max:255'],
            'jhs_grad_yr' => ['required','digits:4','integer','numeric'],
            'shs' => ['required','string','min:8','max:255'],
            'shs_address' => ['required','string','max:255'],
            'shs_grad_yr' => ['required','digits:4','integer','numeric'],
            // REVIEW: Max 8000kb or 8mb image size
            'shs_hs_card' => ['nullable','image','size:8024'],
            'good_moral' => ['nullable','image','size:8024'],
            'birth_cert' => ['nullable','image','size:8024'],
            '2x2_pic' => ['nullable','image','size:8024'],
            'entrance_exam_res' => ['nullable','image','size:8024'],
            'phys_test_res' => ['nullable','image','size:8024'],
        ]);

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
