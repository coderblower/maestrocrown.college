@extends('layouts.app')

@section('title', 'Research & Development – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Innovation & Technology</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Research & Development</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Research & Development</span>
            </div>
        </div>
    </div>

    <!-- Research & Robotics Section -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">MCC Robotics & Innovation Wing</span>
                <h2 class="section-title">Hands-On STEM, Robotics & Research</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 16px; margin-top: 15px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Through systematic hands-on laboratory activities, students develop creativity, logical reasoning, and a practical understanding of how robotics and artificial intelligence are applied in real-world scenarios.
                </p>
            </div>

            <!-- Pillars Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 60px;">
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; border-top: 5px solid #0284c7;">
                    <div style="font-size: 36px; color: #0284c7; margin-bottom: 15px;"><i class="fa-solid fa-microchip"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Technical Demonstration</h3>
                    <p style="color: #64748b; font-size: 15px; line-height: 1.7;">
                        Our demonstrations highlight not only the technical aspects of microcontrollers and sensor integration, but also teamwork, inventive thinking, and analytical problem-solving.
                    </p>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; border-top: 5px solid #10b981;">
                    <div style="font-size: 36px; color: #10b981; margin-bottom: 15px;"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Real-World Competence</h3>
                    <p style="color: #64748b; font-size: 15px; line-height: 1.7;">
                        Consistent practice, algorithm design, and collaborative debugging empower young minds to acquire technical skills that give them an edge in higher engineering universities.
                    </p>
                </div>

                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; border-top: 5px solid #ce9d4d;">
                    <div style="font-size: 36px; color: #ce9d4d; margin-bottom: 15px;"><i class="fa-solid fa-trophy"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Milestones & Olympiads</h3>
                    <p style="color: #64748b; font-size: 15px; line-height: 1.7;">
                        Maestro Crown College students regularly participate and earn accolades in inter-college Science Fairs, Math Olympiads, and National Robotics Championships.
                    </p>
                </div>
            </div>

            <!-- Robotics Photo Showcase -->
            <div style="margin-top: 40px;">
                <h3 style="font-size: 26px; font-weight: 800; color: #0f172a; text-align: center; margin-bottom: 30px;">
                    Robotics Club Workshop & Exhibition Moments
                </h3>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                    <div class="gallery-card" data-title="Robotics Demonstration">
                        <img src="{{ asset('assets/images/473610256_2636321163204783_2626770157811180023_n.jpg') }}" alt="Robotics Demonstration" style="height: 260px;">
                        <div class="gallery-overlay">
                            <h4>Robotics Project</h4>
                            <p>Students exhibiting autonomous vehicle prototype</p>
                        </div>
                    </div>

                    <div class="gallery-card" data-title="Microcontroller Session">
                        <img src="{{ asset('assets/images/photo_6127672035421917315_y.jpg') }}" alt="Hardware Workshop" style="height: 260px;">
                        <div class="gallery-overlay">
                            <h4>Hardware Workshop</h4>
                            <p>Hands-on circuit assembly and testing</p>
                        </div>
                    </div>

                    <div class="gallery-card" data-title="Robotics Competition Live">
                        <img src="{{ asset('assets/images/WhatsApp-Image-2026-03-02-at-4.54.07-PM.jpeg') }}" alt="Live Demonstration" style="height: 260px;">
                        <div class="gallery-overlay">
                            <h4>Live Field Test</h4>
                            <p>Robotics competition arena demonstration</p>
                        </div>
                    </div>

                    <div class="gallery-card" data-title="Olympiad Award Winners">
                        <img src="{{ asset('assets/images/473700846_2638724299631136_4044533778425086642_n-1.jpg') }}" alt="Award Winners" style="height: 260px;">
                        <div class="gallery-overlay">
                            <h4>Award Ceremony</h4>
                            <p>Honoring student technological innovations</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Join Club CTA -->
            <div style="text-align: center; margin-top: 50px; background: #0f172a; color: #ffffff; padding: 45px; border-radius: 24px;">
                <h3 style="font-size: 26px; font-weight: 800; margin-bottom: 10px;">Become Part of the Innovation Wave</h3>
                <p style="color: #cbd5e1; font-size: 16px; margin-bottom: 25px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Admitted students can join the MCC Robotics Club, Science Society, and IT Club at the beginning of each academic semester.
                </p>
                <a href="{{ route('admission') }}" class="btn-primary" style="font-size: 15px;">
                    Apply for Admission 2026 <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

@endsection
