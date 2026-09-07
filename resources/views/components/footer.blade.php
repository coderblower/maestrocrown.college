<footer class="college-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                    <img src="{{ asset('assets/images/FB_IMG_1771508990539.jpg') }}" alt="Logo" width="50" height="50" style="border-radius: 50%; background: #fff; padding: 3px;">
                    <h3 style="margin-bottom: 0;">Maestro Crown College</h3>
                </div>
                <p>
                    Established in 2014, Maestro Crown College is committed to academic excellence, leadership development, moral integrity, and modern STEM & robotics-oriented education for the next generation of leaders.
                </p>
                <div style="display: flex; gap: 12px; margin-top: 15px;">
                    <a href="https://www.facebook.com/Maestrocrown" target="_blank" class="super-topbar-icons" style="color: #fff; background: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="mailto:admin@maestrocrown.edu.bd" style="color: #fff; background: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                    <a href="tel:+8801309136876" style="color: #fff; background: rgba(255,255,255,0.1); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-widget">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                    <li><a href="{{ route('governing-body') }}"><i class="fa-solid fa-angle-right"></i> Governing Body</a></li>
                    <li><a href="{{ route('message-of-chairman') }}"><i class="fa-solid fa-angle-right"></i> Chairman's Message</a></li>
                    <li><a href="{{ route('message-of-principal') }}"><i class="fa-solid fa-angle-right"></i> Principal's Message</a></li>
                    <li><a href="{{ route('teachers') }}"><i class="fa-solid fa-angle-right"></i> Faculty Directory</a></li>
                    <li><a href="{{ route('staff') }}"><i class="fa-solid fa-angle-right"></i> Staff Directory</a></li>
                </ul>
            </div>

            <!-- Academic & Portals -->
            <div class="footer-widget">
                <h4>Academic & Info</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('programs') }}"><i class="fa-solid fa-angle-right"></i> Academic Programs</a></li>
                    <li><a href="{{ route('academic-calendar') }}"><i class="fa-solid fa-angle-right"></i> Academic Calendar</a></li>
                    <li><a href="{{ route('notice.index') }}"><i class="fa-solid fa-angle-right"></i> Notice Board</a></li>
                    <li><a href="{{ route('admission') }}"><i class="fa-solid fa-angle-right"></i> HSC Admission 2026</a></li>
                    <li><a href="{{ route('research') }}"><i class="fa-solid fa-angle-right"></i> Research & Robotics</a></li>
                    <li><a href="{{ route('gallery') }}"><i class="fa-solid fa-angle-right"></i> Photo Gallery</a></li>
                    <li><a href="https://sms-black-tau.vercel.app/#dashboard" target="_blank"><i class="fa-solid fa-lock"></i> EMS Portal Login</a></li>
                </ul>
            </div>

            <!-- Contact & College Codes -->
            <div class="footer-widget">
                <h4>Our Campus</h4>
                <p style="font-size: 13.5px; line-height: 1.6; margin-bottom: 12px;">
                    <i class="fa-solid fa-location-dot" style="color: #38bdf8; margin-right: 6px;"></i>
                    107/2, Dogormura, Radio Colony, Dhaka Aricha Highway, Savar, Bangladesh, 1343
                </p>
                <p style="font-size: 13.5px; margin-bottom: 8px;">
                    <i class="fa-solid fa-phone" style="color: #38bdf8; margin-right: 6px;"></i>
                    <a href="tel:+8801309136876" style="color: #cbd5e1;">+880 1309-136876</a>
                </p>
                <p style="font-size: 13.5px; margin-bottom: 16px;">
                    <i class="fa-solid fa-envelope" style="color: #38bdf8; margin-right: 6px;"></i>
                    <a href="mailto:admin@maestrocrown.edu.bd" style="color: #cbd5e1;">admin@maestrocrown.edu.bd</a>
                </p>
                <div style="background: rgba(255,255,255,0.06); padding: 12px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08); font-size: 13px;">
                    <div><strong>EIIN:</strong> 136876</div>
                    <div><strong>College Code:</strong> 1933</div>
                    <div><strong>Established:</strong> 2014</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; {{ date('Y') }} <strong>Maestro Crown College</strong>. All Rights Reserved.
            </div>
            <div style="display: flex; gap: 20px;">
                <a href="{{ route('admission') }}" style="color: #ce9d4d; font-weight: 600;">Apply Online</a>
                <a href="{{ route('notice.index') }}" style="color: #cbd5e1;">Notices</a>
                <a href="{{ route('contact') }}" style="color: #cbd5e1;">Contact Us</a>
            </div>
        </div>
    </div>
</footer>
