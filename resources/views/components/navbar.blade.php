<nav class="main-navigation-bar">
    <div class="nav-container">
        <!-- Desktop Nav -->
        <ul class="desktop-nav-menu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            </li>

            <li class="nav-item has-children">
                <a href="{{ route('administration') }}" class="nav-link {{ request()->is('administration*') || request()->is('governing-body*') || request()->is('chairmans-profile*') || request()->is('message-of-*') || request()->is('*information*') ? 'active' : '' }}">
                    Administration <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{ route('governing-body') }}">Governing Body</a></li>
                    <li class="dropdown-item"><a href="{{ route('chairmans-profile') }}">Chairman’s Profile</a></li>
                    <li class="dropdown-item"><a href="{{ route('message-of-chairman') }}">Message Of Chairman</a></li>
                    <li class="dropdown-item"><a href="{{ route('message-of-principal') }}">Message Of Principal</a></li>
                    <li class="dropdown-item"><a href="{{ route('teachers') }}">Teacher Information</a></li>
                    <li class="dropdown-item"><a href="{{ route('staff') }}">Staff Information</a></li>
                </ul>
            </li>

            <li class="nav-item has-children">
                <a href="{{ route('programs') }}" class="nav-link {{ request()->is('academic*') || request()->is('college*') || request()->is('programs*') || request()->is('notice*') ? 'active' : '' }}">
                    Academic <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{ route('academic-calendar') }}">Academic Calendar</a></li>
                    <li class="dropdown-item"><a href="{{ route('programs') }}">Programs</a></li>
                    <li class="dropdown-item"><a href="{{ route('notice.index') }}">Notice Board</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('research') }}" class="nav-link {{ request()->routeIs('research') ? 'active' : '' }}">Research & Development</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admission') }}" class="nav-link {{ request()->routeIs('admission') ? 'active' : '' }}">Admission</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery*') ? 'active' : '' }}">Gallery</a>
            </li>

            <li class="nav-item">
                <a href="https://sms-black-tau.vercel.app/#dashboard" target="_blank" class="nav-link ems-login-nav-btn">
                    <i class="fa-solid fa-lock"></i> EMS Login
                </a>
            </li>
        </ul>

        <!-- Mobile Nav Toggle Button -->
        <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Open Navigation Menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Mobile Navigation Drawer Overlay & Content -->
<div class="mobile-drawer-backdrop" id="drawerBackdrop"></div>

<div class="mobile-nav-drawer" id="mobileNavDrawer">
    <div class="drawer-header">
        <div class="drawer-brand">
            <img src="{{ asset('assets/images/FB_IMG_1771508990539.jpg') }}" alt="Logo" width="40" height="40" style="border-radius: 50%;">
            <span>Maestro Crown College</span>
        </div>
        <button type="button" class="drawer-close-btn" id="closeDrawerBtn">&times;</button>
    </div>

    <div class="drawer-body">
        <ul class="mobile-nav-list">
            <li class="mobile-nav-item">
                <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            </li>
            <li class="mobile-nav-item has-sub">
                <div class="mobile-nav-row">
                    <a href="{{ route('administration') }}" class="mobile-nav-link">Administration</a>
                    <button type="button" class="mobile-dropdown-toggle"><i class="fa-solid fa-chevron-down"></i></button>
                </div>
                <ul class="mobile-sub-menu">
                    <li><a href="{{ route('governing-body') }}">Governing Body</a></li>
                    <li><a href="{{ route('chairmans-profile') }}">Chairman’s Profile</a></li>
                    <li><a href="{{ route('message-of-chairman') }}">Message Of Chairman</a></li>
                    <li><a href="{{ route('message-of-principal') }}">Message Of Principal</a></li>
                    <li><a href="{{ route('teachers') }}">Teacher Information</a></li>
                    <li><a href="{{ route('staff') }}">Staff Information</a></li>
                </ul>
            </li>
            <li class="mobile-nav-item has-sub">
                <div class="mobile-nav-row">
                    <a href="{{ route('programs') }}" class="mobile-nav-link">Academic</a>
                    <button type="button" class="mobile-dropdown-toggle"><i class="fa-solid fa-chevron-down"></i></button>
                </div>
                <ul class="mobile-sub-menu">
                    <li><a href="{{ route('academic-calendar') }}">Academic Calendar</a></li>
                    <li><a href="{{ route('programs') }}">Programs</a></li>
                    <li><a href="{{ route('notice.index') }}">Notice Board</a></li>
                </ul>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ route('research') }}" class="mobile-nav-link {{ request()->routeIs('research') ? 'active' : '' }}">Research & Development</a>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ route('admission') }}" class="mobile-nav-link {{ request()->routeIs('admission') ? 'active' : '' }}">Admission</a>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>
            <li class="mobile-nav-item">
                <a href="{{ route('gallery') }}" class="mobile-nav-link {{ request()->routeIs('gallery*') ? 'active' : '' }}">Gallery</a>
            </li>
            <li class="mobile-nav-item" style="margin-top: 15px;">
                <a href="https://sms-black-tau.vercel.app/#dashboard" target="_blank" class="mobile-nav-link" style="background: #0284c7; color: #fff; text-align: center; border-radius: 8px;">
                    <i class="fa-solid fa-lock"></i> EMS Login
                </a>
            </li>
        </ul>
    </div>
</div>
