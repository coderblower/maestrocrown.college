@extends('layouts.app')

@section('title', 'Photo Gallery – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Visual Highlights</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Campus Moments Gallery</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Gallery</span>
            </div>
        </div>
    </div>

    <!-- Gallery Grid Section -->
    <section class="section section-white">
        <div class="container">
            
            <!-- Category Filter Buttons -->
            <div class="gallery-filters">
                <button type="button" class="gallery-filter-btn active" data-filter="all">All Photos</button>
                <button type="button" class="gallery-filter-btn" data-filter="Campus">Campus</button>
                <button type="button" class="gallery-filter-btn" data-filter="Laboratories">Laboratories</button>
                <button type="button" class="gallery-filter-btn" data-filter="Innovation">Robotics & STEM</button>
                <button type="button" class="gallery-filter-btn" data-filter="Achievements">Achievements</button>
                <button type="button" class="gallery-filter-btn" data-filter="Sports">Sports</button>
                <button type="button" class="gallery-filter-btn" data-filter="Events">College Events</button>
            </div>

            <!-- Masonry Grid -->
            <div class="gallery-masonry" id="galleryContainer">
                @foreach($photos as $photo)
                    <div class="gallery-card" data-category="{{ $photo['category'] }}" data-title="{{ $photo['title'] }}">
                        <img src="{{ asset('assets/images/' . $photo['file']) }}" alt="{{ $photo['title'] }}">
                        <div class="gallery-overlay">
                            <span style="background: rgba(56, 189, 248, 0.25); color: #38bdf8; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 2px 8px; border-radius: 4px; align-self: flex-start; margin-bottom: 6px;">
                                {{ $photo['category'] }}
                            </span>
                            <h4 style="font-size: 16px; font-weight: 700; margin: 0; line-height: 1.3;">{{ $photo['title'] }}</h4>
                            <span style="font-size: 12px; color: #cbd5e1; margin-top: 4px; display: inline-flex; align-items: center; gap: 4px;">
                                <i class="fa-solid fa-expand"></i> Click to enlarge
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Admission Callout -->
            <div style="text-align: center; margin-top: 60px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 40px;">
                <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Want to be a part of our thriving student body?</h3>
                <p style="color: #64748b; font-size: 15px; margin-bottom: 25px;">Class XI admission is ongoing for the 2026 academic session across Science, Humanities and Business Studies.</p>
                <a href="{{ route('admission') }}" class="btn-primary">
                    Apply Online Today <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

@endsection
