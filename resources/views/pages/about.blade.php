@extends('layouts.app')

@section('title', 'About Us – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Discover Our Legacy</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">About Maestro Crown College</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>About Us</span>
            </div>
        </div>
    </div>

    <!-- Main About Content -->
    <section class="section section-white">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 50px; align-items: center; margin-bottom: 60px;">
                <div>
                    <span class="section-subtitle">🏫 Introduction</span>
                    <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">
                        A Beacon of Higher Secondary Excellence in Savar
                    </h2>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 15px;">
                        <strong>Maestro Crown College</strong> was founded in 2014 with a clear vision: to establish an educational institution that prepares young students for top universities, prestigious careers, and ethical leadership.
                    </p>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 15px;">
                        Recognized by the Board of Intermediate and Secondary Education, Dhaka (College Code: 1933, EIIN: 136876), our campus is conveniently situated right on the Dhaka-Aricha Highway at Radio Colony, Savar.
                    </p>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8;">
                        Our core mission emphasizes intellectual rigor, moral values, technological literacy, and hands-on scientific curiosity. We ensure that our students are well-prepared to tackle competitive admission tests for BUET, Medical Colleges, and leading public and private universities.
                    </p>
                </div>

                <div>
                    <img src="{{ asset('assets/images/aboutmebrif.jpg') }}" alt="Maestro Crown College Building" style="border-radius: 20px; box-shadow: var(--shadow-lg); width: 100%; height: 380px; object-fit: cover;">
                </div>
            </div>

            <!-- House System -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 24px; padding: 40px; margin-bottom: 50px;">
                <div style="max-width: 800px; margin-bottom: 30px;">
                    <span class="section-subtitle">🏠 House System</span>
                    <h3 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-top: 5px;">
                        Fostering Teamwork, Camaraderie & Healthy Competition
                    </h3>
                    <p style="color: #64748b; font-size: 15px; margin-top: 10px;">
                        To create a healthy and spirited competitive atmosphere, every student is allocated to one of our four prestigious collegiate houses:
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border-left: 5px solid #ef4444; box-shadow: var(--shadow-sm);">
                        <h4 style="font-size: 18px; color: #0f172a; margin-bottom: 6px;">Sher-e-Bangla House</h4>
                        <p style="font-size: 13.5px; color: #64748b;">Named after A. K. Fazlul Huq, symbolizing courage, leadership, and public welfare.</p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border-left: 5px solid #0284c7; box-shadow: var(--shadow-sm);">
                        <h4 style="font-size: 18px; color: #0f172a; margin-bottom: 6px;">Suhrawardy House</h4>
                        <p style="font-size: 13.5px; color: #64748b;">Named after Huseyn Shaheed Suhrawardy, exemplifying democratic ideals and advocacy.</p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border-left: 5px solid #10b981; box-shadow: var(--shadow-sm);">
                        <h4 style="font-size: 18px; color: #0f172a; margin-bottom: 6px;">Nazrul House</h4>
                        <p style="font-size: 13.5px; color: #64748b;">Named after National Poet Kazi Nazrul Islam, inspiring creativity, passion, and rebellion against injustice.</p>
                    </div>

                    <div style="background: #ffffff; padding: 25px; border-radius: 16px; border-left: 5px solid #f59e0b; box-shadow: var(--shadow-sm);">
                        <h4 style="font-size: 18px; color: #0f172a; margin-bottom: 6px;">Rabindra House</h4>
                        <p style="font-size: 13.5px; color: #64748b;">Named after Nobel Laureate Rabindranath Tagore, cultivating artistic sense and universal humanist values.</p>
                    </div>
                </div>
            </div>

            <!-- Detailed Pillars Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 30px;">
                <!-- Co-curricular -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #0284c7; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-palette"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">🎨 Co-curricular Activities</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        Beyond the textbook, we operate an active Debating Club, English Language Circle, Cultural Troupe, and Social Outreach Wing that enrich students' interpersonal confidence.
                    </p>
                </div>

                <!-- Competitions & Science Fair -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #e11d48; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-trophy"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">🏆 Competitions & Science Fair</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        Our annual Science Fair & Robotics Olympiad empowers students to design electronic circuits, robotic prototypes, and environmental models judged by national academics.
                    </p>
                </div>

                <!-- Laboratory & Digital -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #10b981; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">💻 Laboratory & Digital Facilities</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        Modern multimedia classrooms, high-speed broadband computer laboratories, and specialized Physics, Chemistry, and Biology practical workstations.
                    </p>
                </div>

                <!-- Library Facilities -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #8b5cf6; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-book-bookmark"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">📚 Library Facilities</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        Well-cataloged library with thousands of books, past question banks, university test prep guides, and comfortable individual study cubicles.
                    </p>
                </div>

                <!-- Publishing Magazine -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #f59e0b; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-newspaper"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">📰 Publishing Magazine</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        The annual college publication features creative writing, analytical essays, poetry, and research projects authored by our students and faculties.
                    </p>
                </div>

                <!-- Games & Sports -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; box-shadow: var(--shadow-sm);">
                    <div style="color: #06b6d4; font-size: 28px; margin-bottom: 15px;"><i class="fa-solid fa-futbol"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px;">⚽ Games and Sports</h3>
                    <p style="color: #64748b; font-size: 14.5px; line-height: 1.6;">
                        Regular coaching and inter-house tournaments in cricket, football, volleyball, badminton, and indoor table tennis guided by dedicated sports trainers.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
