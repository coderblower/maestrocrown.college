@extends('layouts.app')

@section('title', 'Maestro Crown College – Best Education Is here')

@section('content')

    {{-- Sub-ticker / Latest Notices Bar below Navigation --}}
    <div class="mcc-latest-notices-bar">
        <div class="container" style="display: flex; align-items: center; gap: 15px; padding: 10px 20px;">
            <a href="{{ route('notice.index') }}" class="mcc-notices-badge">Latest Notices:</a>
            <div style="flex-grow: 1; overflow: hidden;">
                <marquee direction="left" scrollamount="6" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="font-weight: 600; color: #1e293b; font-size: 15px; display: block;">
                    Maestro Crown College estd In 2014 || This is The Official Website of Maestro Crown College
                </marquee>
            </div>
        </div>
    </div>

    {{-- Featured 2x2 Section: Video, Chairman, Latest Notice, Principal --}}
    <section class="mcc-featured-section">
        <div class="container">
            <div class="mcc-featured-grid">
                
                {{-- 1. Left Top: College Video --}}
                <div class="mcc-featured-col">
                    <div class="mcc-video-card">
                        <video class="mcc-main-video" autoplay muted loop playsinline controls controlsList="nodownload" poster="{{ asset('assets/images/aboutmebrif.jpg') }}">
                            <source src="{{ asset('assets/videos/document_6116126415545965481.mp4') }}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>

                {{-- 2. Right Top: Chairman's Message --}}
                <div class="mcc-featured-col">
                    <div class="mcc-message-box-container">
                        <div class="mcc-message-header-tab">
                            <span>Chairman's Message</span>
                        </div>
                        <div class="glass-slim-wrapper">
                            <div class="glass-slim-card">
                                <div class="slim-img-box">
                                    <img decoding="async" src="{{ asset('assets/images/aboutmebrif.jpg') }}" alt="Dr. Kamrul Ahsan" class="slim-avatar">
                                </div>
                                <div class="slim-content">
                                    <div class="slim-header">
                                        <h2 class="slim-name">Dr.Kamrul Ahsan</h2>
                                        <div class="slim-title">Chairman</div>
                                    </div>
                                    <p class="slim-bio">
                                        Dear Families,<br><br>
                                        From an early age, while many aspired to become doctors, engineers, or business leaders, my ambition was different. I wanted to become a teacher. Shaping minds and guiding young people is one of the most powerful ways to build a nation.
                                    </p>
                                    <a href="{{ route('message-of-chairman') }}" class="slim-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3. Left Bottom: Latest Notices (Notice Board) --}}
                <div class="mcc-featured-col">
                    <div class="notice-board-fixed">
                        <div class="notice-header-fixed">LATEST NOTICES</div>
                        <div class="ticker-wrap-fixed">
                            <div class="ticker-content-fixed">
                                <div class="notice-item-fixed">
                                    <a href="{{ route('notice.index') }}">Maestro Crown College Admission - December 2024</a>
                                </div>
                                <div class="notice-item-fixed">
                                    <a href="{{ route('academic-calendar') }}">Maestro Crown College Academic Calendar - 2026</a>
                                </div>
                                <div class="notice-item-fixed">
                                    <a href="{{ route('notice.index') }}">Routine of Test Examination - 2026: Class XII students</a>
                                </div>
                                <div class="notice-item-fixed">
                                    <a href="{{ route('notice.index') }}">Practical Test Examination - 2024: Class XI Science stream</a>
                                </div>
                                @foreach($latestNotices as $notice)
                                    <div class="notice-item-fixed">
                                        <a href="{{ route('notice.show', $notice->slug) }}">{{ $notice->title }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4. Right Bottom: Principal's Message --}}
                <div class="mcc-featured-col">
                    <div class="mcc-message-box-container">
                        <div class="mcc-message-header-tab">
                            <span>Principal's Message</span>
                        </div>
                        <div class="glass-slim-wrapper">
                            <div class="glass-slim-card">
                                <div class="slim-img-box">
                                    <img decoding="async" src="{{ asset('assets/images/photo_6127672035421917065_x.jpg') }}" alt="Md. Khalilur Rahman" class="slim-avatar">
                                </div>
                                <div class="slim-content">
                                    <div class="slim-header">
                                        <h2 class="slim-name">Md.Khalilur Rahman</h2>
                                        <div class="slim-title">Principal</div>
                                    </div>
                                    <p class="slim-bio">
                                        Dear All,<br><br>
                                        I am truly humbled to welcome you to our vibrant learning community. As Principal, I see every day as an opportunity to make a difference in the lives of our students and their families..
                                    </p>
                                    <a href="{{ route('message-of-principal') }}" class="slim-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Photo Gallery: 3D Rotating Cylinder Showcase --}}
    <section class="gallery-section">
        <div class="container">
            <h2 class="section-title-custom"><span>Photo Gallery</span></h2>
            <p class="section-subtitle-custom">Click on any image to enlarge.</p>

            <div class="slider-container">
                <div class="slider">
                    <span onclick="openLightbox(this)" title="Campus Life">
                        <img decoding="async" src="{{ asset('assets/images/487875279_1174675554663307_560618647300892608_n.jpg') }}" alt="Gallery Image 1">
                    </span>
                    <span onclick="openLightbox(this)" title="Classroom Sessions">
                        <img decoding="async" src="{{ asset('assets/images/294751604_456475836483286_721815900096184952_n.jpg') }}" alt="Gallery Image 2">
                    </span>
                    <span onclick="openLightbox(this)" title="Cultural Activities">
                        <img decoding="async" src="{{ asset('assets/images/476832929_1134791768651686_8006870201329393673_n.jpg') }}" alt="Gallery Image 3">
                    </span>
                    <span onclick="openLightbox(this)" title="Robotics & Science Lab">
                        <img decoding="async" src="{{ asset('assets/images/473285500_2636321196538113_7340129627340135027_n.jpg') }}" alt="Gallery Image 4">
                    </span>
                    <span onclick="openLightbox(this)" title="Teacher & Student Interaction">
                        <img decoding="async" src="{{ asset('assets/images/470991510_2618447508325482_4592017110440847998_n.jpg') }}" alt="Gallery Image 5">
                    </span>
                    <span onclick="openLightbox(this)" title="Campus Events">
                        <img decoding="async" src="{{ asset('assets/images/489686093_1181549030642626_6022692502881831407_n.jpg') }}" alt="Gallery Image 6">
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Counters (Over Book Background) --}}
    <section class="mcc-book-stat-section" style="background-image: url('{{ asset('assets/images/photo_6118378215819644143_y.jpg') }}');">
        <div class="container">
            <div class="stat-wrapper-main">
                <div class="stat-box">
                    <div class="stat-value">1300</div>
                    <div class="stat-title">Students</div>
                </div>
                <div class="stat-box">
                    <div class="stat-value">25+</div>
                    <div class="stat-title">Class Rooms</div>
                </div>
                <div class="stat-box">
                    <div class="stat-value">41</div>
                    <div class="stat-title">Teachers</div>
                </div>
                <div class="stat-box">
                    <div class="stat-value">20+</div>
                    <div class="stat-title">Admin Staff</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Facilities Section --}}
    <section class="facilities-section-custom">
        <div class="container">
            <h2 class="facilities-heading-title">Facilities</h2>
            <div class="facilities-grid">
                <div class="facility-card">
                    <div class="facility-icon">📚</div>
                    <h3>Library</h3>
                </div>
                <div class="facility-card">
                    <div class="facility-icon">💻</div>
                    <h3>Computer Lab</h3>
                </div>
                <div class="facility-card">
                    <div class="facility-icon">🔬</div>
                    <h3>Science Lab</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Achievements Section --}}
    <section class="achievements-section-custom">
        <div class="container">
            <h2 class="achieve-section-title">Our Achievements</h2>
            <div class="achievements-grid">
                <div class="achieve-card">
                    <div class="achieve-badge badge-hsc">
                        <span class="badge-text-large">97%</span>
                        <span class="badge-text-small">Results</span>
                    </div>
                    <h3>HSC Students Passed</h3>
                    <p>Most of our students achieved A+ in the last board examinations. We are immensely proud of their hard work, dedication, and intelligence. In 2017, we came first in terms of results within the Savar area..</p>
                </div>
                <div class="achieve-card">
                    <div class="achieve-badge badge-sports">
                        <span style="font-size: 38px;">🏆</span>
                        <span class="badge-text-small">Awards</span>
                    </div>
                    <h3>Sports Achievements</h3>
                    <p>Our students have won numerous awards in various inter-school and national sports competitions, demonstrating excellence beyond academics.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Quick Access Grid (6 Blue Cards) --}}
    <section class="quick-links-section-custom">
        <div class="container">
            <div class="quick-links-container">
                <a href="{{ route('message-of-principal') }}" class="link-card">
                    <div class="link-icon">👨‍💼</div>
                    <div class="link-title">Principal</div>
                </a>
                <a href="{{ route('teachers') }}" class="link-card">
                    <div class="link-icon">👨‍🏫</div>
                    <div class="link-title">Faculty & Staffs</div>
                </a>
                <a href="{{ route('academic-calendar') }}" class="link-card">
                    <div class="link-icon">📊</div>
                    <div class="link-title">Best Results</div>
                </a>
                <a href="{{ route('programs') }}" class="link-card">
                    <div class="link-icon">🎓</div>
                    <div class="link-title">Alumni</div>
                </a>
                <a href="{{ route('programs') }}" class="link-card">
                    <div class="link-icon">🏠</div>
                    <div class="link-title">Clubs</div>
                </a>
                <a href="{{ route('admission') }}" class="link-card">
                    <div class="link-icon">ℹ️</div>
                    <div class="link-title">Ready For Admission?</div>
                </a>
            </div>
        </div>
    </section>

    {{-- Get In Touch & Visitor Counters Section --}}
    <section class="quick-contact-section">
        <div class="container">
            <div class="contact-counter-flex-wrapper">
                
                {{-- Left: Contact Buttons --}}
                <div class="contact-left-col">
                    <h2 class="contact-heading">Get In Touch</h2>
                    <div class="contact-btn-wrapper">
                        <a href="https://www.facebook.com/Maestrocrown" target="_blank" class="contact-btn btn-facebook">
                            <svg viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            <span>Facebook</span>
                        </a>

                        <a href="mailto:admin@maestrocrown.edu.bd" target="_blank" class="contact-btn btn-email">
                            <svg viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                            <span>Email Us</span>
                        </a>

                        <a href="tel:+8801309136876" class="contact-btn btn-phone" onclick="handlePhoneClick(event, '+880 1309-136876')">
                            <svg viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                            <span class="phone-text">Call Now</span>
                        </a>
                    </div>
                </div>

                {{-- Right: Mini Visitors Counters --}}
                <div class="counter-right-col">
                    <div class="mini-counter-wrapper">
                        <div class="mini-card border-blue">
                            <div class="mini-icon">🌍</div>
                            <span class="mini-number" id="count-total">0</span>
                            <div class="mini-label">Total Visitors</div>
                        </div>

                        <div class="mini-card border-green">
                            <div class="mini-icon">📅</div>
                            <span class="mini-number" id="count-today">0</span>
                            <div class="mini-label">Today</div>
                        </div>

                        <div class="mini-card border-gold">
                            <div class="mini-icon">⏳</div>
                            <span class="mini-number" id="count-hour">0</span>
                            <div class="mini-label">This Hour</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Lightbox Modal for Photo Gallery --}}
    <div id="photoLightbox" class="lightbox-modal">
        <span class="close-btn" onclick="closeLightbox()">&times;</span>
        <img decoding="async" id="modalImage" class="modal-content" src="" alt="Enlarged Image">
    </div>

@endsection

@push('scripts')
<script>
    // Gallery Lightbox
    function openLightbox(element) {
        let img = element.querySelector('img');
        let imgUrl = img.src;
        let altText = img.alt;
        
        let modal = document.getElementById("photoLightbox");
        let modalImg = document.getElementById("modalImage");
        
        modalImg.src = imgUrl;
        modalImg.alt = altText;
        
        modal.style.display = "flex";
        document.body.style.overflow = "hidden";
    }

    function closeLightbox() {
        document.getElementById("photoLightbox").style.display = "none";
        document.body.style.overflow = "auto";
    }

    window.addEventListener('click', function(event) {
        let modal = document.getElementById("photoLightbox");
        if (event.target === modal) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeLightbox();
        }
    });

    // Copy phone number on Desktop click
    function handlePhoneClick(event, phoneNumber) {
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        if (!isMobile) {
            event.preventDefault();
            const btn = event.currentTarget;
            const textSpan = btn.querySelector('.phone-text');
            const originalText = textSpan.innerText;
            
            textSpan.innerText = phoneNumber + " (Copied!)";
            navigator.clipboard.writeText(phoneNumber).catch(err => console.log('Copy failed', err));
            
            setTimeout(() => {
                textSpan.innerText = originalText;
            }, 3000);
        }
    }

    // Mini Counters Animation
    const counters = {
        total: 300,
        today: 200,
        hour: 45
    };

    function animateCounter(id, start, end, duration) {
        const obj = document.getElementById(id);
        if (!obj) return;
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start).toLocaleString();
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    document.addEventListener('DOMContentLoaded', () => {
        animateCounter("count-total", 0, counters.total, 2000);
        animateCounter("count-today", 0, counters.today, 1500);
        animateCounter("count-hour", 0, counters.hour, 1000);
    });
</script>
@endpush
