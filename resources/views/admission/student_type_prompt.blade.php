<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Type</title>
    <link rel="stylesheet" href="{{ URL::asset('build/assets/student_prompt.css') }}" />
  </head>
  <body>
    <nav id="topbar">
      <a  href="./login/login.html">
        <img
          id="euc-logo"
          src="../../assets/images/slogo white.png"
          alt="euc logo"
        />
      </a>
      <h4 id="topbar-title">MSEUFCI Admission</h4>
    </nav>
    <main>
      <div id="content">
        <h4 id="content-prompt">Admission for?</h4>
        <div id="student-type-btn">
          <button class="stud-choice-btn" type="button" onclick="location.href='./admission_new/admission_new.html'">New Student</button>
          <button class="stud-choice-btn" type="button">Transferee</button>
        </div>

        @include('admission.partials.announcements');
      </div>
    </main>
  </body>
</html>
