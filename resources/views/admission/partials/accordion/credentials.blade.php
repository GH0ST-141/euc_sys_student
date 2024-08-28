<div class="flex flex-col p-4 ">

    <label class="input-label" for="shs-hs-card">Original Copy of Senior/Junior High Card</label>
    <input class="input-field-d" type="file" name="shs_hs_card" id="shs-hs-card">
    <x-input-error :messages="$errors->get('shs_hs_card')" class="-mt-3 mb-2" />

    <label class="input-label" for="good-moral">Original Copy of Good Moral</label>
    <input class="input-field-d" type="file" name="good_moral" id="good-moral">
    <x-input-error :messages="$errors->get('good_moral')" class="-mt-3 mb-2" />

    <label class="input-label" for="birth-cert">PSA/Birth Certificate (1 Photocopy)</label>
    <input class="input-field-d" type="file" name="birth_cert" id="birth-cert">
    <x-input-error :messages="$errors->get('birth_cert')" class="-mt-3 mb-2" />

    <label class="input-label" for="2x2-pic">2x2 Picture (2pcs., White Background)</label>
    <input class="input-field-d" type="file" name="pic_2x2" id="2x2-pic">
    <x-input-error :messages="$errors->get('pic_2x2')" class="-mt-3 mb-2" />

    <label class="input-label" for="entrance-exam-res">Entrance Exam Result</label>
    <input class="input-field-d" type="file" name="entrance_exam_res" id="entrance-exam-res">
    <x-input-error :messages="$errors->get('entrance_exam_res')" class="-mt-3 mb-2" />

    <label class="input-label" for="phys-test-res">Physical Test Result</label>
    <input class="input-field-d" type="file" name="phys_test_res" id="phys-test-res">
    <x-input-error :messages="$errors->get('phys_test_res')" class="-mt-3 mb-2" />
</div>
