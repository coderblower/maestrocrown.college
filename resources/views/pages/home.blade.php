@extends('layouts.app')

@section('title', 'Maestro Crown College – Best Education Is here')

@section('content')

    <!-- Hero Banner Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text-area">
                    <div class="hero-badge">
                        <i class="fa-solid fa-sparkles"></i> Admission Open for Session 2026
                    </div>
                    <h1 class="hero-title">
                        Empowering Minds, Shaping <span>Future Leaders</span>
                    </h1>
                    <p class="hero-desc">
                        Welcome to Maestro Crown College, Savar. We offer a world-class academic environment with dedicated faculty, cutting-edge science and computer laboratories, dynamic co-curricular activities, and innovative robotics clubs.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('admission') }}" class="btn-primary">
                            Apply for Admission <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('programs') }}" class="btn-outline">
                            Explore Programs <i class="fa-solid fa-book-open"></i>
                        </a>
                    </div>
                </div>

                <!-- Latest Notices Card on Hero -->
                <div class="hero-notice-card">
                    <div class="hero-notice-header">
                        <h3><i class="fa-solid fa-bell"></i> College Notices</h3>
                        <a href="{{ route('notice.index') }}" style="color: #38bdf8; font-size: 13px; font-weight: 600;">View All</a>
                    </div>
                    <ul class="hero-notice-list">
                        @forelse($latestNotices as $notice)
                            <li class="hero-notice-item">
                                <a href="{{ route('notice.show', $notice->slug) }}" class="hero-notice-link">
                                    {{ $notice->title }}
                                </a>
                                <div class="hero-notice-date">
                                    <i class="fa-regular fa-calendar"></i> {{ $notice->published_at->format('M d, Y') }}
                                    @if($notice->category)
                                        <span style="background: rgba(56,189,248,0.2); color: #38bdf8; padding: 2px 8px; border-radius: 4px; margin-left: 8px;">{{ $notice->category }}</span>
                                    @endif
                                </div>
                            </li>
                        @empty
                            <li class="hero-notice-item" style="color: #cbd5e1;">
                                No published notices currently available.
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome & About Brief Section -->
    <section class="section section-white">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <span class="section-subtitle">Welcome to Our Institution</span>
                    <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">
                        Maestro Crown College: Redefining Higher Secondary Education
                    </h2>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                        Established in 2014, <strong>Maestro Crown College</strong> (College Code: 1933, EIIN: 136876) has emerged as one of the premier higher secondary institutions in Savar, Dhaka. We provide students with quality education that blends traditional values with 21st-century skills.
                    </p>
                    <p style="color: #475569; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                        Our disciplined campus culture, structured house system, regular parent-teacher collaboration, and individualized counseling guarantee that every student achieves their fullest intellectual and moral potential.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="background: #e0f2fe; color: #0284c7; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa-solid fa-microscope"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; color: #0f172a;">Advanced Labs</h4>
                                <p style="font-size: 13px; color: #64748b;">Fully equipped Physics, Chemistry & Biology labs.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="background: #fef3c7; color: #b45309; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; color: #0f172a;">Robotics & Innovation</h4>
                                <p style="font-size: 13px; color: #64748b;">Hands-on coding, microcontrollers, and competitions.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="read-more-btn" style="font-size: 16px;">
                        Read More About Our Legacy <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div>
                    <div style="position: relative; border-radius: 24px; overflow: hidden; box-shadow: var(--shadow-lg);">
                        <img src="{{ asset('assets/images/aboutmebrif.jpg') }}" alt="Maestro Crown College Campus" style="width: 100%; height: 440px; object-fit: cover;">
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(10px); padding: 20px; border-radius: 16px; color: #ffffff; border: 1px solid rgba(255,255,255,0.15);">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <div style="font-size: 13px; color: #38bdf8; font-weight: 700;">SAVAR, DHAKA</div>
                                    <h4 style="font-size: 18px; margin-top: 2px;">Vibrant Campus & Modern Facilities</h4>
                                </div>
                                <div style="font-size: 28px; color: #ce9d4d; font-weight: 800;">
                                    10+ <span style="font-size: 12px; color: #cbd5e1; display: block; font-weight: 400;">Years of Excellence</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Messages (Chairman & Principal) -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Leadership & Guidance</span>
                <h2 class="section-title">Messages from Our Administration</h2>
                <div class="section-divider"></div>
            </div>

            <div class="leadership-grid">
                <!-- Chairman Card -->
                <div class="leader-card">
                    <div class="leader-top">
                        <img src="{{ asset('assets/images/photo_6120749823746051688_x-150x150.jpg') }}" alt="Dr. Kamrul Ahsan" class="leader-avatar">
                        <div class="leader-meta">
                            <h3>Dr. Kamrul Ahsan</h3>
                            <div class="leader-role">Chairman, Governing Body</div>
                            <div class="leader-qual">Professor, Department of Philosophy, Jahangirnagar University</div>
                        </div>
                    </div>
                    <div class="leader-body">
                        <p class="leader-quote">
                            "Maestro Crown College is founded on the philosophy that true education must illuminate both the intellect and moral conscience. We nurture young minds to not only excel in examinations but also become ethical, innovative leaders of tomorrow's global society."
                        </p>
                        <a href="{{ route('message-of-chairman') }}" class="read-more-btn">
                            Read Chairman's Full Message <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Principal Card -->
                <div class="leader-card">
                    <div class="leader-top">
                        <img src="{{ asset('assets/images/photo_6127672035421917065_x.jpg') }}" alt="Md. Khalilur Rahman" class="leader-avatar">
                        <div class="leader-meta">
                            <h3>Md. Khalilur Rahman</h3>
                            <div class="leader-role">Principal & Member Secretary</div>
                            <div class="leader-qual">Experienced Academician & Educational Leader</div>
                        </div>
                    </div>
                    <div class="leader-body">
                        <p class="leader-quote">
                            "I am truly humbled to welcome you to our vibrant learning community. As Principal, I see every day as an opportunity to inspire curiosity, foster discipline, and provide our students with the strongest possible springboard for university admissions and career triumph."
                        </p>
                        <a href="{{ route('message-of-principal') }}" class="read-more-btn">
                            Read Principal's Full Message <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Campus Infrastructure</span>
                <h2 class="section-title">World-Class Facilities</h2>
                <div class="section-divider"></div>
            </div>

            <div class="facilities-grid">
                <!-- Library -->
                <div class="facility-card">
                    <div class="facility-img-wrapper">
                        <img src="{{ asset('assets/images/470991510_2618447508325482_4592017110440847998_n.jpg') }}" alt="Central Library">
                        <span class="facility-badge"><i class="fa-solid fa-book"></i> Central Library</span>
                    </div>
                    <div class="facility-content">
                        <h3>Enriched College Library</h3>
                        <p>
                            A quiet, resource-rich library housing thousands of textbooks, reference journals, Olympiad guides, and digital study materials with a spacious reading room.
                        </p>
                    </div>
                </div>

                <!-- Computer Lab -->
                <div class="facility-card">
                    <div class="facility-img-wrapper">
                        <img src="{{ asset('assets/images/294751604_456475836483286_721815900096184952_n.jpg') }}" alt="Computer Lab">
                        <span class="facility-badge"><i class="fa-solid fa-desktop"></i> ICT Lab</span>
                    </div>
                    <div class="facility-content">
                        <h3>Modern Computer & ICT Lab</h3>
                        <p>
                            High-speed internet and networked PCs configured for C-programming, web development, multimedia, and board-mandated practical curriculum.
                        </p>
                    </div>
                </div>

                <!-- Science Lab -->
                <div class="facility-card">
                    <div class="facility-img-wrapper">
                        <img src="{{ asset('assets/images/473285500_2636321196538113_7340129627340135027_n.jpg') }}" alt="Science Lab">
                        <span class="facility-badge"><i class="fa-solid fa-flask"></i> Science Labs</span>
                    </div>
                    <div class="facility-content">
                        <h3>Equipped Science Laboratories</h3>
                        <p>
                            Separate, fully-outfitted Physics, Chemistry, and Biology laboratories equipped with modern apparatus to ensure hands-on experiential scientific learning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements & Counters -->
    <section class="achievements-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    <div class="stat-number">100%</div>
                    <div class="stat-label">HSC Pass Rate</div>
                </div>

                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-award"></i></div>
                    <div class="stat-number">40+</div>
                    <div class="stat-label">Qualified Faculty Members</div>
                </div>

                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-trophy"></i></div>
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Sports & Olympiad Trophies</div>
                </div>

                <div class="stat-item">
                    <div class="stat-icon"><i class="fa-solid fa-calendar-star"></i></div>
                    <div class="stat-number">2014</div>
                    <div class="stat-label">Year Established</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery Preview -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Life at Maestro Crown</span>
                <h2 class="section-title">Campus Photo Gallery</h2>
                <div class="section-divider"></div>
            </div>

            <div class="gallery-masonry">
                <div class="gallery-card" data-title="HSC Students Celebration">
                    <img src="{{ asset('assets/images/487875279_1174675554663307_560618647300892608_n.jpg') }}" alt="HSC Success">
                    <div class="gallery-overlay">
                        <h4>HSC Achievers</h4>
                        <p>Celebrating outstanding academic milestones</p>
                    </div>
                </div>

                <div class="gallery-card" data-title="Robotics Demonstration">
                    <img src="{{ asset('assets/images/473610256_2636321163204783_2626770157811180023_n.jpg') }}" alt="Robotics Demonstration">
                    <div class="gallery-overlay">
                        <h4>Robotics Club</h4>
                        <p>Practical application & innovation</p>
                    </div>
                </div>

                <div class="gallery-card" data-title="Sports Championship">
                    <img src="{{ asset('assets/images/476832929_1134791768651686_8006870201329393673_n.jpg') }}" alt="Sports Trophy">
                    <div class="gallery-overlay">
                        <h4>Cricket Tournament</h4>
                        <p>Championship victory celebration</p>
                    </div>
                </div>

                <div class="gallery-card" data-title="Annual Cultural Gathering">
                    <img src="{{ asset('assets/images/489686093_1181549030642626_6022692502881831407_n.jpg') }}" alt="Annual Program">
                    <div class="gallery-overlay">
                        <h4>College Program</h4>
                        <p>Cultural evening and assembly</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('gallery') }}" class="btn-primary">
                    View Complete Gallery (20+ Photos) <i class="fa-solid fa-images"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Bento Contact Section & Interactive Message Form -->
    <section class="contact-section-wrapper">
        <div class="container">
            <div class="section-header" style="margin-bottom: 40px;">
                <span class="section-subtitle" style="color: #38bdf8;">Let's Connect</span>
                <h2 class="section-title" style="color: #ffffff;">Get In Touch with Maestro Crown College</h2>
                <div class="section-divider"></div>
            </div>

            <div class="bento-contact-grid">
                <!-- Left Side Info -->
                <div>
                    <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 15px;">Welcome to MCC</h3>
                    <p style="color: #cbd5e1; font-size: 16px; line-height: 1.7; margin-bottom: 30px;">
                        Have queries about class XI admission, subject combinations, syllabus, or fee structure? Reach out to our admission counselors or visit our Savar campus.
                    </p>

                    <div class="contact-card-box">
                        <div class="contact-card-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">MAIN CAMPUS</div>
                            <div style="font-size: 14.5px; font-weight: 500; color: #ffffff;">107/2, Dogormura, Radio Colony, Dhaka Aricha Highway, Savar, 1343</div>
                        </div>
                    </div>

                    <div class="contact-card-box">
                        <div class="contact-card-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">HOTLINE & WHATSAPP</div>
                            <div style="font-size: 15px; font-weight: 600; color: #ffffff;">
                                <a href="tel:+8801309136876">+880 1309-136876</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card-box">
                        <div class="contact-card-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <div style="font-size: 13px; color: #94a3b8; font-weight: 600;">OFFICIAL INQUIRY</div>
                            <div style="font-size: 15px; font-weight: 600; color: #ffffff;">
                                <a href="mailto:admin@maestrocrown.edu.bd">admin@maestrocrown.edu.bd</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Form -->
                <div class="contact-form-box">
                    <h3 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-bottom: 20px;">Send Us a Message</h3>
                    
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-control" required placeholder="Your full name">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" required placeholder="your.email@example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="01XXXXXXXXX">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Admission Inquiry / General Question">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" required placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; border: none; cursor: pointer; font-size: 16px;">
                            Send Message <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
