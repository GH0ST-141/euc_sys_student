<label class="input-label" for="suffix"> Course </label>
<!-- TODO Add more options -->
<select name="course_id" id="course-select" class="input-field-d">
    <option value="" disabled selected>Select Course</option>
    <option value="BSCS">
        Bachelor of Science in Computer Science
    </option>
    <option value="BSCOE">
        Bachelor of Science in Computer Engineering
    </option>
    <option value="BSN">Bachelor of Science in Nursing</option>
    <option value="BSA">
        Bachelor of Science in Accountancy
    </option>
    <option value="BSEE">
        Bachelor of Secondary Education Major in English
    </option>
    <option value="BSEM">
        Bachelor of Secondary Education Major in Mathematics
    </option>
    <option value="BSES">
        Bachelor of Secondary Education Major in Science
    </option>
    <option value="BSESS">
        Bachelor of Secondary Education Major in Social Studies
    </option>
    <option value="BSEF">
        Bachelor of Secondary Education Major in Filipino
    </option>
    <option value="BSELEM">
        Bachelor of Elementary Education
    </option>
    <option value="BAP">
        Bachelor of Arts in Psychology
    </option>
    <option value="BSHM">
        Bachelor of Science in Hospitality Management
    </option>
    <option value="BSTM">
        Bachelor of Science in Tourism Management
    </option>
</select>
<x-input-error :messages="$errors->get('course_id')" class="-mt-3 mb-2" />
