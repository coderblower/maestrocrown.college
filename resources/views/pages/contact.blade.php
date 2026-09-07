@extends('layouts.app')

@section('title', 'Contact – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Get in Touch</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Contact Us</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Contact</span>
            </div>
        </div>
    </div>

    <!-- Contact & Map Section -->
    <section class="section section-white">
        <div class="container">
            
            <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 40px; margin-bottom: 60px; align-items: flex-start;">
                
                <!-- Left Details Box -->
                <div>
                    <span class="section-subtitle">Let's Connect</span>
                    <h2 style="font-size: 34px; font-weight: 800; color: #0f172a; margin-bottom: 15px;">
                        Welcome to MCC
                    </h2>
                    <p style="color: #64748b; font-size: 16px; line-height: 1.7; margin-bottom: 30px;">
                        We are glad to have you around. Whether you have an admission query, fee question, or just want to explore our academic programs, we are here to assist!
                    </p>

                    <!-- Bento Info Cards -->
                    <div style="display: flex; flex-direction: column; gap: 18px;">
                        
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 25px; display: flex; align-items: center; gap: 20px;">
                            <div style="width: 55px; height: 55px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 4px;">Main Campus</h4>
                                <p style="font-size: 14px; color: #64748b; margin: 0; line-height: 1.5;">
                                    107/2, Dogormura, Radio Colony, Dhaka Aricha Highway, Savar, Bangladesh, 1343
                                </p>
                            </div>
                        </div>

                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 25px; display: flex; align-items: center; gap: 20px;">
                            <div style="width: 55px; height: 55px; border-radius: 50%; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 4px;">Phone Number</h4>
                                <p style="font-size: 15px; font-weight: 600; color: #0284c7; margin: 0;">
                                    <a href="tel:+8801309136876">+880 1309-136876</a>
                                </p>
                                <span style="font-size: 12px; color: #94a3b8;">Saturday - Thursday: 8:00 AM - 4:00 PM</span>
                            </div>
                        </div>

                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 25px; display: flex; align-items: center; gap: 20px;">
                            <div style="width: 55px; height: 55px; border-radius: 50%; background: #fef3c7; color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 4px;">Email Address</h4>
                                <p style="font-size: 15px; font-weight: 600; color: #0284c7; margin: 0;">
                                    <a href="mailto:admin@maestrocrown.edu.bd">admin@maestrocrown.edu.bd</a>
                                </p>
                                <span style="font-size: 12px; color: #94a3b8;">Official administrative queries</span>
                            </div>
                        </div>

                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 25px; display: flex; align-items: center; gap: 20px;">
                            <div style="width: 55px; height: 55px; border-radius: 50%; background: #eff6ff; color: #2563eb; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 4px;">Social Connection</h4>
                                <p style="font-size: 15px; font-weight: 600; color: #0284c7; margin: 0;">
                                    <a href="https://www.facebook.com/Maestrocrown" target="_blank">facebook.com/Maestrocrown</a>
                                </p>
                                <span style="font-size: 12px; color: #94a3b8;">Follow our campus events</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Interactive Form -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 40px; box-shadow: var(--shadow-md);">
                    <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 20px;">
                        Drop Us a Line
                    </h3>

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="form-label">Your Name *</label>
                            <input type="text" name="name" class="form-control" required placeholder="Full Name">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" required placeholder="email@domain.com">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="01XXXXXXXXX">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Topic of Inquiry">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" required placeholder="Type your message here..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; border: none; font-size: 16px; cursor: pointer;">
                            Submit Inquiry <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Google Map Embed -->
            <div style="border-radius: 24px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: var(--shadow-md); height: 420px; position: relative;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7906001222477!2d90.25206307604473!3d23.861578384533036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ebe0a1649e75%3A0x8677c77cbbcf3b1b!2sMaestro%20Crown%20College!5e0!3m2!1sen!2sbd!4v1709736123456!5m2!1sen!2sbd" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div style="position: absolute; bottom: 20px; left: 20px; background: rgba(255,255,255,0.95); backdrop-filter: blur(8px); padding: 12px 22px; border-radius: 50px; font-weight: 700; font-size: 13.5px; color: #0f172a; box-shadow: 0 10px 25px rgba(0,0,0,0.15); display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-location-dot" style="color: #ef4444;"></i> Maestro Crown College Campus
                </div>
            </div>

        </div>
    </section>

@endsection
