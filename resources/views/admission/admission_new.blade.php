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

                    @include('admission.partials.accordion.student_info')

                    @include('admission.partials.accordion.family_bg')

                    @include('admission.partials.accordion.educational_bg')

                    @include('admission.partials.accordion.credentials')

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
