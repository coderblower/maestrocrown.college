<header class="college-header-wrapper">
    {{-- Super Topbar --}}
    @include('components.topbar')

    {{-- Scrolling News Ticker --}}
    @include('components.ticker')

    {{-- Bright Info Bar --}}
    <div class="header-info-bar">
        <div class="info-container">
            <span class="info-item"><i class="fa-solid fa-calendar-check"></i> Estd: 2014</span>
            <span class="info-item"><i class="fa-solid fa-building-columns"></i> College Code: 1933</span>
            <span class="info-item"><i class="fa-solid fa-fingerprint"></i> EIIN: 136876</span>
        </div>
    </div>

    {{-- Main Branding Area --}}
    <div class="header-main">
        <div class="main-header-container">
            <div class="brand-group">
                <a href="{{ route('home') }}" class="header-logo-box" title="Maestro Crown College">
                    <img src="{{ asset('assets/images/FB_IMG_1771508990539.jpg') }}" alt="Maestro Crown College Logo">
                </a>
                <div class="header-brand-text">
                    <a href="{{ route('home') }}">
                        <h1>Maestro Crown College</h1>
                    </a>
                    <div class="college-address">
                        <i class="fa-solid fa-location-dot"></i> 
                        107/2, Dogormura, Radio Colony, Dhaka Aricha Highway, Savar, Bangladesh, 1343
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
