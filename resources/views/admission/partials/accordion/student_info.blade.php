{{-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            Student Information
        </button>
    </h2>
    <div id="collapseOne" class="bs-accordion-collapse bs-collapse bs-show" aria-labelledby="headingOne"
        data-bs-parent="#admission-new-accordion">
        <div class="flex flex-col p-4 bs-accordion-body"> --}}

<div class="flex flex-col p-4 ">
    <label class="input-label" for="lastname"> Last Name </label>
    <input class="input-field" type="text" name="last_name" id="lastname" placeholder="Enter last name" required />
    <label class="input-label" for="firstname"> First Name </label>
    <input class="input-field" type="text" name="first_name" id="firstname" placeholder="Enter first name"
        required />
    <label class="input-label" for="middlename"> Middle Name </label>
    <input class="input-field" type="text" name="middle_name" id="middlename"
        placeholder="Enter middle name (not initial) if applicable" />
    {{-- <label class="input-label" for="suffix"> Suffix </label>
                <input class="input-field" type="text" name="" id="suffix"
                    placeholder="Enter suffix if applicable (jr., sr., etc.)" /> --}}

    @include('admission.partials.courses')

    @include('admission.partials.accordion.address_selector')

    <label class="input-label" for="birthdate">
        Birthdate (Press the Calendar Icon) </label>
    <input class="input-field" type="date" name="birth_date" id="birthdate" required />

    <label class="input-label" for="birth-place"> Birth Place </label>
    <input class="input-field" type="text" name="birth_place" id="birth-place" placeholder="Enter full birth address"
        required />

    @include('admission.partials.nationalities')

    @include('admission.partials.religion')

    @include('admission.partials.gender')

    @include('admission.partials.civil_status')

    <label class="input-label" for="cellno">Cellphone number</label>
    <input type="number" name="cell_no" id="cellno" class="input-field" maxlength="11" pattern="[0-9]{11}"
        placeholder="Enter cellphone number" required>

    <label class="input-label" for="email">Email</label>
    <input type="email" name="email" id="email" class="input-field" placeholder="Enter Email" required>
</div>

{{-- </div>
    </div>
</div> --}}
