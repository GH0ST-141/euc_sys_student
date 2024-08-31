<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MSEUFCI Admission</title>
    <link rel="stylesheet" href="{{ asset('build/assets/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/yearpicker.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('admission.partials.topbar')

    {{-- //TODO: Retain field values upon reload or invalid input --}}
    <main>
        {{-- //NOTE: I removed id 'content' to this div below --}}
        <div>
            @include('admission.partials.header')

            {{-- <h3 id="form-title">Student Information</h3> --}}
            <form class="admission-form" method="POST" action="{{ route('admission_transfer.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div>

                    <button type="button" class="accordion">Student Info</button>
                    <div class="panel">
                        @include('admission.partials.accordion.student_info')
                    </div>

                    <button type="button" class="accordion">Family Background</button>
                    <div class="panel">
                        @include('admission.partials.accordion.family_bg')
                    </div>

                    <button type="button" class="accordion">Educational Background</button>
                    <div class="panel">
                        @include('admission.partials.accordion.educational_bg')

                        <div class="flex flex-col p-4 ">
                            <label class="input-label" for="prev-univ"> School Last Attended (For Transferee) </label>
                            <input value="{{ old('shs') }}" class="input-field" type="text" name="prev_univ"
                                id="prev-univ" placeholder="School last attended name" required />
                            <x-input-error :messages="$errors->get('shs')" class="-mt-3 mb-2" />
                        </div>
                    </div>

                    <button type="button" class="accordion">Credentials</button>
                    <div class="panel">
                        @include('admission.partials.accordion.credentials')

                        <div class="flex flex-col p-4 ">
                            <label class="input-label" for="tor">TOR for evaluation (For Transferee)</label>
                            <input class="input-field-d" type="file" name="tor" id="tor">
                            <x-input-error :messages="$errors->get('phys_test_res')" class="-mt-3 mb-2" />

                            <label class="input-label" for="transfer-cred">Transfer Credential (For Transferee)</label>
                            <input class="input-field-d" type="file" name="transfer_cred" id="transfer-cred">
                            <x-input-error :messages="$errors->get('phys_test_res')" class="-mt-3 mb-2" />
                        </div>
                    </div>

                </div>

                @include('admission.partials.collection_agreement')
                <button id="submit-btn" type="submit" class="mb-8">Submit</button>

            </form>
        </div>
    </main>

    <script src="{{ asset('build/assets/accordion.js') }}"></script>
    <script src="{{ asset('build/assets/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/ph-address-selector.js') }}"></script>

    {{-- For year picker --}}
    {{-- https://www.jqueryscript.net/time-clock/Year-Picker-Text-Input.html --}}
    <script src="{{ asset('build/assets/yearpicker.js') }}"></script>
    <script>
        $('.yearpicker').yearpicker()
    </script>

</body>

</html>
