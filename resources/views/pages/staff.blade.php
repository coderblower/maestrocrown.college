@extends('layouts.app')

@section('title', 'Staff Information – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Administration & Logistics</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Staff Information</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Staff Information</span>
            </div>
        </div>
    </div>

    <!-- Staff Directory -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Dedicated Support</span>
                <h2 class="section-title">Administrative & Support Staff</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    Our dedicated administrative, technical, and support personnel ensure smooth daily campus operations, academic recordkeeping, and student assistance.
                </p>
            </div>

            <!-- Staff Grid -->
            <div class="faculty-grid">
                @foreach($staff as $s)
                    <div class="faculty-card">
                        <div class="faculty-avatar" style="background: linear-gradient(135deg, #fef3c7, #fde68a); color: #b45309;">
                            <i class="fa-solid fa-id-badge"></i>
                        </div>
                        <h3 class="faculty-name">{{ $s['name'] }}</h3>
                        <div class="faculty-dept" style="color: #b45309;">{{ $s['dept'] }}</div>
                        <div class="faculty-designation">{{ $s['designation'] }}</div>
                        <div style="margin-top: 12px; font-size: 12px; color: #94a3b8;">
                            <i class="fa-solid fa-building"></i> Maestro Crown College
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
