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

            {{-- //TODO: Add action to this form --}}
            {{-- <h3 id="form-title">Student Information</h3> --}}
            <form class="admission-form" method="POST" action="/test">
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
                    </div>

                    <button type="button" class="accordion">Credentials</button>
                    <div class="panel">
                        @include('admission.partials.accordion.credentials')
                    </div>

                </div>

                <button id="submit-btn" type="submit" class="mb-8">Proceed</button>

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
