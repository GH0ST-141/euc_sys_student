<div class="flex flex-col p-4 ">

    <label class="input-label" for="father"> Father's Name </label>
    <input value="{{ old('father') }}" class="input-field" type="text" name="father" id="father" placeholder="Enter your father's name" required />
    <x-input-error :messages="$errors->get('father')" class="-mt-3 mb-2" />

    <label class="input-label" for="father-address"> Father's Address </label>
    <input value="{{ old('father_address') }}" class="input-field" type="text" name="father_address" id="father-address" placeholder="Enter your father's address" required />
    <x-input-error :messages="$errors->get('father_address')" class="-mt-3 mb-2" />

    <label class="input-label" for="father-cellno"> Father's Contact Number </label>
    <input value="{{ old('father_cell_no') }}" class="input-field" type="number" name="father_cell_no" id="father-cellno" placeholder="Enter your father's contact number" required />
    <x-input-error :messages="$errors->get('father_cell_no')" class="-mt-3 mb-2" />

    <label class="input-label" for="mother"> Mother's Name </label>
    <input value="{{ old('mother') }}" class="input-field" type="text" name="mother" id="mother" placeholder="Enter your mother's name" required />
    <x-input-error :messages="$errors->get('mother')" class="-mt-3 mb-2" />

    <label class="input-label" for="mother-address"> Mother's Address </label>
    <input value="{{ old('mother_address') }}" class="input-field" type="text" name="mother_address" id="mother-address" placeholder="Enter your mother's address" required />
    <x-input-error :messages="$errors->get('mother_address')" class="-mt-3 mb-2" />

    <label class="input-label" for="mother-cellno"> Mother's Contact Number </label>
    <input value="{{ old('mother_cell_no') }}" class="input-field" type="number" name="mother_cell_no" id="mother-cellno" placeholder="Enter your mother's contact number" required />
    <x-input-error :messages="$errors->get('mother_cell_no')" class="-mt-3 mb-2" />

    <label class="input-label" for="guardian"> Guardian's Name </label>
    <input value="{{ old('guardian') }}" class="input-field" type="text" name="guardian" id="guardian" placeholder="Enter your guardian's name" required />
    <x-input-error :messages="$errors->get('guardian')" class="-mt-3 mb-2" />

    <label class="input-label" for="guardian-address"> Guardian's Address </label>
    <input value="{{ old('guardian_address') }}" class="input-field" type="text" name="guardian_address" id="guardian-address" placeholder="Enter your guardian's address" required />
    <x-input-error :messages="$errors->get('guardian_address')" class="-mt-3 mb-2" />

    <label class="input-label" for="guardian-cellno"> Guardian's Contact Number </label>
    <input value="{{ old('guardian_cell_no') }}" class="input-field" type="number" name="guardian_cell_no" id="guardian-cellno" placeholder="Enter your guardian's contact number" required />
    <x-input-error :messages="$errors->get('guardian_cell_no')" class="-mt-3 mb-2" />
</div>
