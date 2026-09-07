@extends('layouts.app')

@section('title', 'Academic Programs & Curriculum – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Higher Secondary Certificate (HSC)</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Academic Programs</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Academic</span> / <span>Programs</span>
            </div>
        </div>
    </div>

    <!-- Programs Grid -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Disciplines Offered</span>
                <h2 class="section-title">Explore Our HSC Academic Groups</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    We offer comprehensive higher secondary education under the Board of Intermediate and Secondary Education, Dhaka, across three specialized streams:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 60px;">
                <!-- Science -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                    <div style="background: linear-gradient(135deg, #0284c7, #0369a1); color: #ffffff; padding: 25px;">
                        <span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; opacity: 0.85;">Group 01</span>
                        <h3 style="font-size: 24px; font-weight: 800; margin-top: 5px;">Science</h3>
                        <p style="font-size: 13px; opacity: 0.9; margin-top: 5px;">Tailored for Engineering, Medical, Biotech & Applied Sciences.</p>
                    </div>
                    <div style="padding: 25px; flex-grow: 1;">
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Subject Structure:</h4>
                        <ul style="color: #475569; font-size: 14px; line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                            <li>Bangla & English (Compulsory)</li>
                            <li>Information & Communication Tech (ICT)</li>
                            <li>Physics 1st & 2nd Paper</li>
                            <li>Chemistry 1st & 2nd Paper</li>
                            <li>Higher Mathematics / Biology (Elective & 4th)</li>
                        </ul>
                        <div style="background: #f0fdf4; border-radius: 8px; padding: 12px; font-size: 13px; color: #166534;">
                            <strong>Laboratories:</strong> Hands-on sessions every week in modern labs.
                        </div>
                    </div>
                </div>

                <!-- Business Studies -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                    <div style="background: linear-gradient(135deg, #d97706, #b45309); color: #ffffff; padding: 25px;">
                        <span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; opacity: 0.85;">Group 02</span>
                        <h3 style="font-size: 24px; font-weight: 800; margin-top: 5px;">Business Studies</h3>
                        <p style="font-size: 13px; opacity: 0.9; margin-top: 5px;">Foundation for BBA, Chartered Accountancy & Corporate Leadership.</p>
                    </div>
                    <div style="padding: 25px; flex-grow: 1;">
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Subject Structure:</h4>
                        <ul style="color: #475569; font-size: 14px; line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                            <li>Bangla & English (Compulsory)</li>
                            <li>Information & Communication Tech (ICT)</li>
                            <li>Accounting 1st & 2nd Paper</li>
                            <li>Business Organization & Management</li>
                            <li>Finance, Banking & Insurance / Marketing</li>
                        </ul>
                        <div style="background: #fffbeb; border-radius: 8px; padding: 12px; font-size: 13px; color: #92400e;">
                            <strong>Special Focus:</strong> Case studies and financial modeling basics.
                        </div>
                    </div>
                </div>

                <!-- Humanities -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                    <div style="background: linear-gradient(135deg, #059669, #047857); color: #ffffff; padding: 25px;">
                        <span style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; opacity: 0.85;">Group 03</span>
                        <h3 style="font-size: 24px; font-weight: 800; margin-top: 5px;">Humanities</h3>
                        <p style="font-size: 13px; opacity: 0.9; margin-top: 5px;">Pathways to Law, Public Administration, Journalism & Civil Service.</p>
                    </div>
                    <div style="padding: 25px; flex-grow: 1;">
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Subject Structure:</h4>
                        <ul style="color: #475569; font-size: 14px; line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                            <li>Bangla & English (Compulsory)</li>
                            <li>Information & Communication Tech (ICT)</li>
                            <li>Civics & Good Governance</li>
                            <li>Economics / Social Work</li>
                            <li>History / Islamic History / Logic</li>
                        </ul>
                        <div style="background: #ecfdf5; border-radius: 8px; padding: 12px; font-size: 13px; color: #065f46;">
                            <strong>Special Focus:</strong> Analytical writing, debate, and legal foundations.
                        </div>
                    </div>
                </div>
            </div>

            <!-- College Rules & Code of Conduct -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 24px; padding: 40px;">
                <div class="section-header" style="margin-bottom: 30px;">
                    <span class="section-subtitle">Institutional Discipline</span>
                    <h3 style="font-size: 28px; font-weight: 800; color: #0f172a;">College Rules & Guidelines</h3>
                    <div class="section-divider"></div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 8px;">
                            1. Mandatory Attendance
                        </h4>
                        <p style="font-size: 14px; color: #64748b; line-height: 1.6;">
                            Minimum 85% attendance is compulsory for all theoretical and laboratory lectures. Leave must be approved in advance by guardians.
                        </p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 8px;">
                            2. Uniform & ID Card
                        </h4>
                        <p style="font-size: 14px; color: #64748b; line-height: 1.6;">
                            Students must wear prescribed college uniform and display their RFID identity card prominently while on college premises.
                        </p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 8px;">
                            3. Restriction on Mobile Phones
                        </h4>
                        <p style="font-size: 14px; color: #64748b; line-height: 1.6;">
                            Using mobile devices during class or lab hours is strictly prohibited. Unauthorized phones will be confiscated by administration.
                        </p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 8px;">
                            4. Examination Policies
                        </h4>
                        <p style="font-size: 14px; color: #64748b; line-height: 1.6;">
                            Attendance in all weekly class tests, mid-terms, and terminal exams is mandatory to qualify for the Board HSC Examination.
                        </p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 8px;">
                            5. Discipline & Anti-Ragging
                        </h4>
                        <p style="font-size: 14px; color: #64748b; line-height: 1.6;">
                            Zero tolerance policy against ragging, bullying, or any breach of campus peace. Maestro Crown College maintains a safe, respectful environment.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to action -->
            <div style="text-align: center; margin-top: 50px;">
                <a href="{{ route('admission') }}" class="btn-primary" style="font-size: 16px;">
                    Enroll in 2026 Session <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

@endsection
