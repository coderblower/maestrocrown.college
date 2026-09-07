@extends('layouts.app')

@section('title', 'Message Of Chairman – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Official Address</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Message of the Chairman</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Message of Chairman</span>
            </div>
        </div>
    </div>

    <!-- Message Content -->
    <section class="section section-white">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 45px; box-shadow: var(--shadow-sm);">
                
                <div style="display: flex; align-items: center; gap: 25px; border-bottom: 2px solid #f1f5f9; padding-bottom: 30px; margin-bottom: 35px; flex-wrap: wrap;">
                    <img src="{{ asset('assets/images/photo_6120749823746051688_x-150x150.jpg') }}" alt="Dr. Kamrul Ahsan" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid #e0f2fe; box-shadow: var(--shadow-sm);">
                    <div>
                        <span style="color: #0284c7; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">From the Desk of the Chairman</span>
                        <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-top: 4px;">Dr. Kamrul Ahsan</h2>
                        <p style="font-size: 14px; color: #64748b;">
                            Chairman, Governing Body, Maestro Crown College<br>
                            Professor, Department of Philosophy, Jahangirnagar University
                        </p>
                    </div>
                </div>

                <div style="color: #334155; font-size: 16.5px; line-height: 1.85;">
                    <p style="margin-bottom: 20px;">
                        <strong>Dear Students, Respected Guardians, and Well-Wishers,</strong>
                    </p>

                    <p style="margin-bottom: 20px;">
                        It brings me immense pleasure to welcome you to <strong>Maestro Crown College</strong>. Since our journey commenced in 2014, our paramount dedication has been to construct an intellectual sanctuary in Savar where young minds flourish with unhindered curiosity, academic rigor, and moral uprightness.
                    </p>

                    <p style="margin-bottom: 20px;">
                        The higher secondary level represents the most crucial pivot in a student's life. It is the bridge between school schooling and the vast horizons of university life. Recognizing this profound responsibility, we have assembled a distinguished faculty, established cutting-edge laboratories, and integrated digital pedagogical resources so that our students can conquer competitive examinations with flying colors.
                    </p>

                    <p style="margin-bottom: 20px;">
                        However, academic brilliance without empathy and civic virtue is incomplete. At Maestro Crown College, we place equal emphasis on character formation, discipline, and cultural awareness. Through our House System, Robotics and Science exhibitions, and sports championships, we empower our students to emerge as creative thinkers and patriotic global citizens.
                    </p>

                    <p style="margin-bottom: 25px;">
                        To our prospective students of the 2026 academic session: I warmly invite you to step into our halls of learning. Entrust us with your aspirations, and we will guide you toward boundless success.
                    </p>

                    <div style="margin-top: 40px; border-top: 1px solid #e2e8f0; padding-top: 25px; display: flex; justify-content: space-between; align-items: flex-end;">
                        <div>
                            <div style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #0f172a;">Dr. Kamrul Ahsan</div>
                            <div style="font-size: 13.5px; color: #64748b;">Chairman, Governing Body</div>
                            <div style="font-size: 13px; color: #0284c7;">Maestro Crown College</div>
                        </div>
                        <div>
                            <a href="{{ route('admission') }}" class="btn-primary" style="padding: 10px 24px; font-size: 14px;">
                                Apply for 2026 Session <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
