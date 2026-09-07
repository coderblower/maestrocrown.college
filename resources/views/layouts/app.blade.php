<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Maestro Crown College – Best Education Is here')</title>
    <meta name="description" content="@yield('meta_description', 'Maestro Crown College, established in 2014, Savar, Dhaka. College Code: 1933, EIIN: 136876. Best education, modern science lab, robotics, and academic excellence.')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/FB_IMG_1771508990539.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/FB_IMG_1771508990539.jpg') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- College Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('styles')
</head>
<body>

    <!-- Header Section (Super Topbar, Scrolling Ticker, Info Bar, Brand Area) -->
    @include('components.header')

    <!-- Navigation Bar -->
    @include('components.navbar')

    <!-- Flash Messages -->
    <div class="container" style="margin-top: 20px;">
        @if(session('success'))
            <div class="alert alert-success alert-auto-dismiss">
                <i class="fa-solid fa-circle-check" style="font-size: 20px;"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        @if(session('admission_success'))
            <div class="alert alert-success alert-auto-dismiss">
                <i class="fa-solid fa-graduation-cap" style="font-size: 20px;"></i>
                <div>{{ session('admission_success') }}</div>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error alert-auto-dismiss">
                <i class="fa-solid fa-circle-exclamation" style="font-size: 20px;"></i>
                <div>
                    <strong>Please check the form:</strong>
                    <ul style="margin-left: 20px; margin-top: 5px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>

    <!-- Main Body Content -->
    <main id="mainContent">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Admission Quick Modal -->
    @include('components.admission-modal')

    <!-- Global Gallery Lightbox Modal -->
    <div id="galleryLightboxModal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.92); backdrop-filter: blur(8px); z-index: 999999; align-items: center; justify-content: center; padding: 20px;">
        <button type="button" id="lightboxClose" style="position: absolute; top: 25px; right: 30px; background: none; border: none; color: #ffffff; font-size: 38px; cursor: pointer;">&times;</button>
        <div style="max-width: 90vw; max-height: 85vh; text-align: center;">
            <img id="lightboxImg" src="" alt="Enlarged Campus Photo" style="max-width: 100%; max-height: 80vh; object-fit: contain; border-radius: 12px; box-shadow: 0 20px 50px rgba(0,0,0,0.6); margin: 0 auto;">
            <p id="lightboxTitle" style="color: #cbd5e1; font-size: 16px; margin-top: 15px; font-weight: 500;"></p>
        </div>
    </div>

    <!-- College Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
