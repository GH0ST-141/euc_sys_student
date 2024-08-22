{{-- ADDRESS SELECTOR --}}
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Region</label>
    <select name="region" class="form-control form-control-md input-field-d" id="region" required></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="region" id="region-text" required>
    <x-input-error :messages="$errors->get('region')" class="-mt-3 mb-2" />
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Province</label>
    <select name="province" class="form-control form-control-md input-field-d" id="province" required></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="province" id="province-text"
        required>
    <x-input-error :messages="$errors->get('province')" class="-mt-3 mb-2" />
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">City / Municipality</label>
    <select name="city" class="form-control form-control-md input-field-d" id="city" required></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="city" id="city-text" required>
    <x-input-error :messages="$errors->get('city')" class="-mt-3 mb-2" />
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Barangay</label>
    <select name="barangay" class="form-control form-control-md input-field-d" id="barangay" required></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="barangay" id="barangay-text"
        required>
    <x-input-error :messages="$errors->get('barangay')" class="-mt-3 mb-2" />
</div>
<div class="flex flex-col mb-3 col-md-6">
    <label for="street-text" class="form-label input-label">Street (Optional)</label>
    <input type="text" class="form-control form-control-md input-field" name="street" id="street-text">
    <x-input-error :messages="$errors->get('street')" class="-mt-3 mb-2" />
</div>
{{-- !ADDRESS SELECTOR --}}
