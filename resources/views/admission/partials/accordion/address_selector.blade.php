{{-- ADDRESS SELECTOR --}}
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Region</label>
    <select name="region" class="form-control form-control-md input-field-d" id="region"></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="region" id="region-text" required>
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Province</label>
    <select name="province" class="form-control form-control-md input-field-d" id="province"></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="province" id="province-text"
        required>
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">City / Municipality</label>
    <select name="city" class="form-control form-control-md input-field-d" id="city"></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="city" id="city-text" required>
</div>
<div class="flex flex-col mb-3 col-sm-6">
    <label class="form-label input-label">Barangay</label>
    <select name="barangay" class="form-control form-control-md input-field-d" id="barangay"></select>
    <input type="hidden" class="form-control form-control-md input-field-d" name="barangay" id="barangay-text"
        required>
</div>
<div class="flex flex-col mb-3 col-md-6">
    <label for="street-text" class="form-label input-label">Street (Optional)</label>
    <input type="text" class="form-control form-control-md input-field" name="street" id="street-text">
</div>
{{-- !ADDRESS SELECTOR --}}
