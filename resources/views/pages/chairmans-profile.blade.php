@extends('layouts.app')

@section('title', 'Chairman’s Profile – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Institutional Leadership</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Chairman’s Profile</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Chairman’s Profile</span>
            </div>
        </div>
    </div>

    <!-- Chairman Profile Body -->
    <section class="section section-white">
        <div class="container">
            <div style="display: grid; grid-template-columns: 350px 1fr; gap: 50px; align-items: flex-start; max-width: 1100px; margin: 0 auto;">
                
                <!-- Left Profile Card -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 24px; padding: 35px 25px; text-align: center; box-shadow: var(--shadow-sm);">
                    <img src="{{ asset('assets/images/photo_6120749823746051688_x-150x150.jpg') }}" alt="Dr. Kamrul Ahsan" style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px auto; border: 5px solid #e0f2fe; box-shadow: var(--shadow-md);">
                    <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 5px;">Dr. Kamrul Ahsan</h2>
                    <div style="font-size: 15px; font-weight: 700; color: #0284c7; margin-bottom: 10px;">Chairman, Governing Body</div>
                    <p style="font-size: 13.5px; color: #64748b; margin-bottom: 20px;">
                        Professor, Department of Philosophy<br>
                        Jahangirnagar University, Savar, Dhaka
                    </p>

                    <div style="border-top: 1px solid #e2e8f0; padding-top: 20px; text-align: left;">
                        <div style="font-size: 13px; color: #64748b; margin-bottom: 8px;">
                            <strong><i class="fa-solid fa-graduation-cap" style="color: #0284c7; width: 20px;"></i> Qualification:</strong> PhD, M.Phil, B.A. (Hons)
                        </div>
                        <div style="font-size: 13px; color: #64748b; margin-bottom: 8px;">
                            <strong><i class="fa-solid fa-building-columns" style="color: #0284c7; width: 20px;"></i> Institution:</strong> Jahangirnagar University
                        </div>
                        <div style="font-size: 13px; color: #64748b;">
                            <strong><i class="fa-solid fa-envelope" style="color: #0284c7; width: 20px;"></i> Contact:</strong> admin@maestrocrown.edu.bd
                        </div>
                    </div>

                    <div style="margin-top: 25px;">
                        <a href="{{ route('message-of-chairman') }}" class="btn-primary" style="width: 100%; justify-content: center;">
                            Read His Message <i class="fa-solid fa-comment-dots"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Biography Area -->
                <div>
                    <span class="section-subtitle">Academic & Visionary Leader</span>
                    <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">
                        Biographical Overview
                    </h2>
                    
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                        <strong>Dr. Kamrul Ahsan</strong> is an eminent scholar, distinguished academician, and Professor in the Department of Philosophy at Jahangirnagar University. With decades of profound devotion to higher education and educational philosophy, he serves as the Chairman of the Governing Body at Maestro Crown College, guiding its intellectual trajectory and institutional standard.
                    </p>

                    <h3 style="font-size: 22px; font-weight: 700; color: #0f172a; margin: 30px 0 15px 0;">
                        Academic Focus & Leadership
                    </h3>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                        His scholarly expertise spans moral philosophy, epistemology, educational ethics, and humanism. Having participated in numerous national and international conferences, academic councils, and syndicate committees, Dr. Ahsan has championed student-centric pedagogy that transcends rote learning.
                    </p>

                    <div style="background: #f0fdf4; border-left: 5px solid #10b981; border-radius: 12px; padding: 20px; margin: 25px 0;">
                        <h4 style="font-size: 17px; color: #065f46; margin-bottom: 6px;">Vision for Maestro Crown College</h4>
                        <p style="font-size: 14.5px; color: #166534; line-height: 1.6;">
                            "Our mandate at Maestro Crown College is to build an ecosystem where young learners discover their innate creative capabilities, develop critical reasoning, and acquire the technological and ethical grounding necessary to build an enlightened society."
                        </p>
                    </div>

                    <h3 style="font-size: 22px; font-weight: 700; color: #0f172a; margin: 30px 0 15px 0;">
                        Key Contributions
                    </h3>
                    <ul style="color: #475569; font-size: 15.5px; line-height: 1.8; padding-left: 20px;">
                        <li style="margin-bottom: 10px;">Mentoring faculty members to integrate interactive teaching and digital classroom aids.</li>
                        <li style="margin-bottom: 10px;">Establishment of co-curricular clubs, including the Robotics Club and Debating Society.</li>
                        <li style="margin-bottom: 10px;">Advocacy for merit-based scholarships and special financial assistance for underprivileged scholars.</li>
                        <li style="margin-bottom: 10px;">Establishing close guardian-college partnerships for continuous psychological and academic counseling.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
