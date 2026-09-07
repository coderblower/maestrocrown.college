@extends('layouts.app')

@section('title', 'Message Of Principal – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Institutional Address</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Message of the Principal</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Message of Principal</span>
            </div>
        </div>
    </div>

    <!-- Message Content -->
    <section class="section section-white">
        <div class="container">
            <div style="max-width: 900px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 45px; box-shadow: var(--shadow-sm);">
                
                <div style="display: flex; align-items: center; gap: 25px; border-bottom: 2px solid #f1f5f9; padding-bottom: 30px; margin-bottom: 35px; flex-wrap: wrap;">
                    <img src="{{ asset('assets/images/photo_6127672035421917065_x.jpg') }}" alt="Md. Khalilur Rahman" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid #e0f2fe; box-shadow: var(--shadow-sm);">
                    <div>
                        <span style="color: #0284c7; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">From the Principal's Desk</span>
                        <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-top: 4px;">Md. Khalilur Rahman</h2>
                        <p style="font-size: 14px; color: #64748b;">
                            Principal & Member Secretary, Governing Body<br>
                            Maestro Crown College, Savar, Dhaka
                        </p>
                    </div>
                </div>

                <div style="color: #334155; font-size: 16.5px; line-height: 1.85;">
                    <h3 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-bottom: 15px;">
                        Welcome to Our Educational Family
                    </h3>

                    <p style="margin-bottom: 20px;">
                        I am truly humbled to welcome you to our vibrant learning community. As Principal, I see every single day as an invaluable opportunity to inspire curiosity, instill discipline, and provide our students with the strongest possible springboard for academic and professional victory.
                    </p>

                    <p style="margin-bottom: 25px;">
                        At Maestro Crown College, education is not merely a curriculum; it is a holistic journey of transformation. Our teachers do not just deliver lectures; they mentor, motivate, and guide students through individual care and continuous formative evaluation.
                    </p>

                    <!-- Student Section -->
                    <div style="background: #f8fafc; border-left: 5px solid #0284c7; border-radius: 12px; padding: 25px; margin: 25px 0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0284c7; margin-bottom: 10px;">
                            <i class="fa-solid fa-graduation-cap"></i> For Our Students:
                        </h4>
                        <p style="font-size: 15px; color: #475569; line-height: 1.7; margin-bottom: 10px;">
                            Your two years at higher secondary level will define the trajectory of your higher education. Be punctual, maintain at least 85% attendance, actively participate in practical laboratories, and take full advantage of our faculty's guidance. Dare to ask questions, work relentlessly, and uphold moral integrity.
                        </p>
                    </div>

                    <!-- Parent Section -->
                    <div style="background: #fefce8; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 25px; margin: 25px 0;">
                        <h4 style="font-size: 18px; font-weight: 700; color: #b45309; margin-bottom: 10px;">
                            <i class="fa-solid fa-users"></i> To Our Respected Parents:
                        </h4>
                        <p style="font-size: 15px; color: #78350f; line-height: 1.7; margin-bottom: 10px;">
                            You are our most vital partners in this journey. We welcome your active participation in our regular Parent-Teacher Meetings (PTMs) and open communication with teachers. Together, we can monitor progress, celebrate victories, and overcome any hurdles our young scholars face.
                        </p>
                    </div>

                    <p style="margin-top: 25px; margin-bottom: 20px;">
                        Our modern laboratories, rich library resources, air-conditioned study environments, and robotics programs stand ready to serve you. I invite prospective learners to join Maestro Crown College and embark on a transformative educational voyage.
                    </p>

                    <div style="margin-top: 40px; border-top: 1px solid #e2e8f0; padding-top: 25px; display: flex; justify-content: space-between; align-items: flex-end;">
                        <div>
                            <div style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #0f172a;">Md. Khalilur Rahman</div>
                            <div style="font-size: 13.5px; color: #64748b;">Principal & Member Secretary</div>
                            <div style="font-size: 13px; color: #0284c7;">Maestro Crown College</div>
                        </div>
                        <div>
                            <a href="{{ route('teachers') }}" class="btn-primary" style="padding: 10px 24px; font-size: 14px;">
                                Meet Our Faculty <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
