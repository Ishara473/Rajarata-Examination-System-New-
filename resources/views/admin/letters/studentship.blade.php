<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Studentship Letter</title>
    <style>
        body { font-family: DejaVu Sans, Arial, Helvetica, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin: 30px; }
        .signature { margin-top: 60px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Rajarata University of Sri Lanka</h2>
        <h4>Office of the Registrar</h4>
        <hr/>
    </div>

    <div class="content">
        <div style="text-align:right">Date: {{ $date }}</div>

        <p>To Whom It May Concern,</p>

        <p>
            This is to certify that <strong>{{ $student->initials }} {{ $student->name_marking }}</strong>,
            Registration Number <strong>{{ $student->registration_no }}</strong>,
            of batch <strong>{{ $student->AcademicDetail ? $student->AcademicDetail->BatchCode() : '' }}</strong>
            is/was a bonafide student of Rajarata University of Sri Lanka registered for the
            <strong>{{ optional($student->AcademicDetail)->current_reg_year }}</strong> academic year.
        </p>

        <p>
            This letter is issued upon the request of the student for official purposes.
        </p>

        <p class="signature">
            Sincerely,<br/>
            ____________________________<br/>
            Registrar / Authorized Signatory<br/>
            Rajarata University of Sri Lanka
        </p>
    </div>
</body>
</html>
