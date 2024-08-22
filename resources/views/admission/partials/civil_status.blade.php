<label class="input-label" for="civil-status">Civil Status</label>
<select name="civil_status" id="civil-status" class="input-field-d" required>
    <option value="" disabled selected>Civil Status</option>
    <option value="single">Single</option>
    <option value="married">Married</option>
    <option value="widowed">Widowed</option>
    <option value="divorced">Divorced</option>
</select>
<x-input-error :messages="$errors->get('civil_status')" class="-mt-3 mb-2" />
