<label class="input-label" for="religion">Religion</label>
<select name="religion" id="religion" class="input-field-d" required>
    <option value="" disabled selected>Religion</option>
    <option value="roman-catholic">Roman Catholic</option>
    <option value="inc">Iglesia ni Cristo</option>
    <option value="inc">Islam</option>
    <option value="inc">Seventh Day Adventist</option>
    <option value="inc">Aglipay</option>
    <option value="inc">Iglesia Filipina Independiente</option>
    <option value="inc">Bible Baptist Church</option>
    <option value="inc">United Church of Christ in the Philippines</option>
    <option value="inc">Jehovah's Witness</option>
    <option value="inc">Church of Christ</option>
    <option value="inc">Others</option>
</select>
<x-input-error :messages="$errors->get('religion')" class="-mt-3 mb-2" />
