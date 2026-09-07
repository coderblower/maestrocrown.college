@extends('layouts.app')

@section('title', 'Teacher Information – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Academic Faculty</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Teacher Information</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Teachers</span>
            </div>
        </div>
    </div>

    <!-- Teacher Directory -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Our Educators</span>
                <h2 class="section-title">Distinguished Teaching Faculty</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    Our educators bring extensive subject matter mastery, pedagogical excellence, and an enduring commitment to student mentorship.
                </p>
            </div>

            <!-- Faculty Grid -->
            <div class="faculty-grid">
                @foreach($teachers as $teacher)
                    <div class="faculty-card">
                        <div class="faculty-avatar">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h3 class="faculty-name">{{ $teacher['name'] }}</h3>
                        <div class="faculty-dept">{{ $teacher['dept'] }}</div>
                        <div class="faculty-designation">{{ $teacher['designation'] }}</div>
                        <div style="margin-top: 12px; font-size: 12px; color: #94a3b8;">
                            <i class="fa-solid fa-graduation-cap"></i> Maestro Crown College
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
