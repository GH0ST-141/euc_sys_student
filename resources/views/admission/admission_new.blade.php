<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MSEUFCI Admission</title>
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/admission_new.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('build/assets/bootstrap.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('admission.partials.topbar')

    {{-- //TODO Fix names for form post --}}
    <main>
        {{-- //NOTE: I removed id 'content' to this div below --}}
        <div>
            @include('admission.partials.header')

            {{-- <h3 id="form-title">Student Information</h3> --}}
            <form class="admission-form" method="POST" action="">

                <div class="accordion" id="admission-new-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Student Information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#admission-new-accordion">
                            <div class="accordion-body tw-flex tw-flex-col">


                                <label class="input-label" for="lastname"> Last Name </label><input class="input-field"
                                    type="text" name="" id="lastname" placeholder="Enter last name"
                                    required />
                                <label class="input-label" for="firstname"> First Name </label><input
                                    class="input-field" type="text" name="" id="firstname"
                                    placeholder="Enter first name" required />
                                <label class="input-label" for="middlename"> Middle Name </label><input
                                    class="input-field" type="text" name="" id="middlename"
                                    placeholder="Enter middle name (not initial) if applicable" />
                                <label class="input-label" for="suffix"> Suffix </label><input class="input-field"
                                    type="text" name="" id="suffix"
                                    placeholder="Enter suffix if applicable (jr., sr., etc.)" />

                                @include('admission.partials.courses')

                                <!-- TODO Separate address to street,brgy,municipality,province -->
                                <label class="input-label" for="suffix"> Address </label><input class="input-field"
                                    type="text" name="" id="address" placeholder="Enter full address"
                                    required />

                                <label class="input-label" for="birthdate">
                                    Birthdate (Press the Calendar Icon) </label><input class="input-field"
                                    type="date" name="" id="birthdate" required />

                                <label class="input-label" for="birth-place"> Birth Place </label><input
                                    class="input-field" type="text" name="" id="birth-place"
                                    placeholder="Enter full birth address" required />

                                @include('admission.partials.nationalities')

                                @include('admission.partials.religion')

                                @include('admission.partials.gender')

                                @include('admission.partials.civil_status')

                                <label class="input-label" for="cellno">Cellphone number</label>
                                <input type="number" name="" id="cellno" class="input-field" maxlength="11"
                                    pattern="[0-9]{11}" placeholder="Enter cellphone number" required>

                                <label class="input-label" for="email">Email</label>
                                <input type="email" name="" id="email" class="input-field"
                                    placeholder="Enter Email" required>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Family Background
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#admission-new-accordion">
                            <div class="accordion-body">
                                {{-- //TODO CONTENT HERE --}}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Educational Background
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#admission-new-accordion">
                            <div class="accordion-body">
                                {{-- //TODO CONTENT HERE --}}
                            </div>
                        </div>
                    </div>
                </div>


                <button id="submit-btn" type="submit">Proceed</button>

                <!-- <section id="student-info-section"></section>
            <section id="family-bg-section"></section>
            <section id="educ-bg-section"></section>
            <section id="requirements-section"></section> -->
            </form>
        </div>
    </main>
    <script src="{{ asset('build/assets/bootstrap.min.js') }}"></script>
</body>

</html>
