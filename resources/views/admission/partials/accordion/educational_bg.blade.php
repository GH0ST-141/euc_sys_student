<div class="flex flex-col p-4 ">

    <label class="input-label" for="elem"> Elementary </label>
    <input value="{{ old('elem') }}" class="input-field" type="text" name="elem" id="elem" placeholder="Elementay school name" required />
    <x-input-error :messages="$errors->get('elem')" class="-mt-3 mb-2" />

    <label class="input-label" for="">Elementary School Address</label>
    <input value="{{ old('elem_address') }}" class="input-field" type="text" name="elem_address" id="elem-address" placeholder="Elementay address (e.g. Candelaria, Quezon)" required />
    <x-input-error :messages="$errors->get('elem_address')" class="-mt-3 mb-2" />

    {{-- year picker --}}
    <label class="input-label" for="elem-grad-yr">Elementary Year Graduated</label>
    <input value="{{ old('elem_grad_yr') }}" type="number" name="elem_grad_yr" id="elem-grad-yr" class="yearpicker form-control input-field-d" value="" required />
    <x-input-error :messages="$errors->get('elem_grad_yr')" class="-mt-3 mb-2" />

    <label class="input-label" for="jhs"> Junior High School </label>
    <input value="{{ old('jhs') }}" class="input-field" type="text" name="jhs" id="jhs" placeholder="Junior High school name" required />
    <x-input-error :messages="$errors->get('jhs')" class="-mt-3 mb-2" />

    <label class="input-label" for="">Junior High School Address</label>
    <input value="{{ old('jhs_address') }}" class="input-field" type="text" name="jhs_address" id="jhs-address" placeholder="Junior High address (e.g. Candelaria, Quezon)" required />
    <x-input-error :messages="$errors->get('jhs_address')" class="-mt-3 mb-2" />

    {{-- year picker --}}
    <label class="input-label" for="jhs-grad-yr">Junior High Year Graduated</label>
    <input value="{{ old('jhs_grad_yr') }}" type="number" name="jhs_grad_yr" id="jhs-grad-yr" class="yearpicker form-control input-field-d" value="" required />
    <x-input-error :messages="$errors->get('jhs_grad_yr')" class="-mt-3 mb-2" />

    <label class="input-label" for="shs"> Senior High School </label>
    <input value="{{ old('shs') }}" class="input-field" type="text" name="shs" id="shs" placeholder="Senior High school name" required />
    <x-input-error :messages="$errors->get('shs')" class="-mt-3 mb-2" />

    <label class="input-label" for="">Senior High School Address</label>
    <input value="{{ old('shs_address') }}" class="input-field" type="text" name="shs_address" id="shs-address" placeholder="Senior High address (e.g. Candelaria, Quezon)" required />
    <x-input-error :messages="$errors->get('shs_address')" class="-mt-3 mb-2" />

    {{-- year picker --}}
    <label class="input-label" for="jhs-grad-yr">Senior High Year Graduated</label>
    <input value="{{ old('shs_grad_yr') }}" type="number" name="shs_grad_yr" id="shs-grad-yr" class="yearpicker form-control input-field-d" value="" required />
    <x-input-error :messages="$errors->get('shs_grad_yr')" class="-mt-3 mb-2" />


</div>
