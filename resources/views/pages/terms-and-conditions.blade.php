@extends('layouts.app')

@section('title', 'Terms & Conditions – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Institutional Regulations</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Terms and Conditions</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Terms & Conditions</span>
            </div>
        </div>
    </div>

    <!-- Terms Content Body -->
    <section class="section section-white">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 45px; box-shadow: var(--shadow-sm);">
                
                <div style="border-bottom: 2px solid #f1f5f9; padding-bottom: 20px; margin-bottom: 30px;">
                    <span style="font-size: 13px; color: #64748b; font-weight: 600;">Effective: Academic Session 2026</span>
                    <h2 style="font-size: 26px; font-weight: 800; color: #0f172a; margin-top: 5px;">
                        Maestro Crown College Academic Code & Terms of Enrollment
                    </h2>
                </div>

                <div style="color: #334155; font-size: 16px; line-height: 1.85;">
                    <p style="margin-bottom: 20px;">
                        By enrolling at <strong>Maestro Crown College</strong> or utilizing our institutional website and online admission facilities, students and guardians agree to comply with the following institutional terms, rules, and conditions.
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        1. Admission and Enrollment
                    </h3>
                    <ul style="padding-left: 25px; margin-bottom: 20px;">
                        <li>Admission to Class XI is provisional until all academic documents (SSC transcript, certificate, testimonial) are formally verified by the college and approved by the Dhaka Education Board.</li>
                        <li>Any submission of false information or forged documents will result in immediate cancellation of admission and forfeiture of fees.</li>
                    </ul>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        2. Attendance & Punctuality
                    </h3>
                    <p style="margin-bottom: 12px;">
                        Regular class and laboratory attendance is fundamental to our academic program:
                    </p>
                    <ul style="padding-left: 25px; margin-bottom: 20px;">
                        <li>Students must maintain at least <strong>85% attendance</strong> in all theoretical lectures and practical sessions.</li>
                        <li>Non-collegiate or dis-collegiate students failing to meet board-mandated attendance benchmarks will not be approved for test examinations or board registration.</li>
                    </ul>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        3. Code of Conduct, Dress Code & Campus Discipline
                    </h3>
                    <ul style="padding-left: 25px; margin-bottom: 20px;">
                        <li>Students must wear the designated college uniform and carry their official student ID card at all times.</li>
                        <li>The college enforces a strict <strong>Zero Tolerance Policy</strong> toward ragging, bullying, harassment, vandalism, and any illegal activity. Violators face immediate expulsion.</li>
                        <li>Unauthorized mobile phone use during class lectures or examinations is strictly prohibited.</li>
                    </ul>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        4. Examination and Evaluation Policies
                    </h3>
                    <ul style="padding-left: 25px; margin-bottom: 20px;">
                        <li>Participation in all class tests, mid-term examinations, and final model tests is mandatory.</li>
                        <li>Cheating, plagiarism, or possession of unauthorized material in exam halls will lead to immediate cancellation of the paper.</li>
                    </ul>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        5. Tuition Fees and Payment Terms
                    </h3>
                    <ul style="padding-left: 25px; margin-bottom: 20px;">
                        <li>Monthly tuition and institutional charges must be settled by the scheduled due date each month.</li>
                        <li>Admission fees and institutional registration charges are non-refundable once enrollment has been formalized.</li>
                    </ul>

                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin: 30px 0 12px 0;">
                        6. Digital Portal Usage
                    </h3>
                    <p style="margin-bottom: 20px;">
                        Students accessing the college Education Management System (EMS) must maintain the confidentiality of their credentials and refrain from unauthorized access attempts or cyber misconduct.
                    </p>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; font-size: 14.5px; margin-top: 30px;">
                        <strong>Academic Office, Maestro Crown College</strong><br>
                        107/2, Dogormura, Radio Colony, Dhaka Aricha Highway, Savar, Bangladesh, 1343<br>
                        EIIN: 136876 | College Code: 1933<br>
                        Website: <a href="https://www.maestrocrown.edu.bd" style="color: #0284c7;">www.maestrocrown.edu.bd</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
