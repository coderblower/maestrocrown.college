@extends('layouts.app')

@section('title', 'Delete Account – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 50px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Student Portal & Data Privacy</span>
            <h1 style="font-size: 38px; font-weight: 800; margin-top: 5px;">Delete Account</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Delete Account</span>
            </div>
        </div>
    </div>

    <!-- Account Deletion Content -->
    <section class="section section-white" style="background-color: #f8fafc; padding: 60px 0 90px 0;">
        <div class="container" style="max-width: 800px;">
            
            <!-- Top Heading matching screenshot -->
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="font-size: 32px; font-weight: 800; color: #1e3a5f; margin-bottom: 8px;">
                    Delete Account
                </h2>
                <div style="width: 50px; height: 3px; background: #00a4e4; margin: 0 auto 16px auto; border-radius: 2px;"></div>
                <p style="font-size: 15px; color: #475569; max-width: 680px; margin: 0 auto; line-height: 1.6;">
                    If you wish to delete your account, please complete the form below. Our support team will verify your request and confirm via your registered contact details.
                </p>
            </div>

            <!-- Flash Alert for Deletion Request -->
            @if(session('deletion_success'))
                <div class="alert alert-success alert-auto-dismiss" style="margin-bottom: 30px;">
                    <i class="fa-solid fa-circle-check" style="font-size: 20px;"></i>
                    <div>{{ session('deletion_success') }}</div>
                </div>
            @endif

            <!-- Form Card matching screenshot -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 45px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                
                <div style="margin-bottom: 30px;">
                    <h3 style="font-size: 24px; font-weight: 700; color: #1e3a5f; margin-bottom: 6px;">
                        Account Deletion Request
                    </h3>
                    <p style="font-size: 14px; color: #64748b; margin: 0;">
                        Fill in the form with accurate details. This helps us verify your identity.
                    </p>
                </div>

                <form action="{{ route('delete-account.store') }}" method="POST">
                    @csrf

                    <!-- Row 1: Full Name & Registered Email or Phone -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                required 
                                value="{{ old('name') }}"
                                placeholder="Full Name" 
                                style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 12px 14px; font-size: 14.5px; width: 100%;"
                            >
                        </div>

                        <div>
                            <input 
                                type="text" 
                                name="identifier" 
                                class="form-control" 
                                required 
                                value="{{ old('identifier') }}"
                                placeholder="Registered Email or Phone" 
                                style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 12px 14px; font-size: 14.5px; width: 100%;"
                            >
                        </div>
                    </div>

                    <!-- Row 2: Student-wise identification (Student ID / Roll / Reg No) -->
                    <div style="margin-bottom: 20px;">
                        <input 
                            type="text" 
                            name="student_id" 
                            class="form-control" 
                            required 
                            value="{{ old('student_id') }}"
                            placeholder="Student ID / College Roll / Registration Number" 
                            style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 12px 14px; font-size: 14.5px; width: 100%;"
                        >
                    </div>

                    <!-- Row 3: Class & Group (Student Specific) -->
                    <div style="margin-bottom: 20px;">
                        <select 
                            name="class_group" 
                            class="form-control" 
                            style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 12px 14px; font-size: 14.5px; width: 100%; color: #334155;"
                        >
                            <option value="">Select Class & Academic Group (Optional)</option>
                            <option value="Class XI - Science">Class XI - Science</option>
                            <option value="Class XI - Business Studies">Class XI - Business Studies</option>
                            <option value="Class XI - Humanities">Class XI - Humanities</option>
                            <option value="Class XII - Science">Class XII - Science</option>
                            <option value="Class XII - Business Studies">Class XII - Business Studies</option>
                            <option value="Class XII - Humanities">Class XII - Humanities</option>
                            <option value="Alumni / Former Student">Alumni / Former Student</option>
                        </select>
                    </div>

                    <!-- Row 4: Reason for Deletion -->
                    <div style="margin-bottom: 30px;">
                        <textarea 
                            name="reason" 
                            class="form-control" 
                            rows="5" 
                            placeholder="Reason for Deletion" 
                            style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 12px 14px; font-size: 14.5px; width: 100%; resize: vertical; min-height: 120px;"
                        >{{ old('reason') }}</textarea>
                    </div>

                    <!-- Submit Button matching screenshot -->
                    <div>
                        <button 
                            type="submit" 
                            style="background-color: #00a4e4; color: #ffffff; border: none; border-radius: 30px; padding: 13px 32px; font-size: 13.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; cursor: pointer; transition: all 0.3s ease; display: inline-block; box-shadow: 0 4px 12px rgba(0, 164, 228, 0.3);"
                            onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='translateY(-1px)'"
                            onmouseout="this.style.backgroundColor='#00a4e4'; this.style.transform='none'"
                        >
                            SUBMIT REQUEST
                        </button>
                    </div>

                </form>

            </div>

            <!-- Help Notice -->
            <div style="margin-top: 30px; text-align: center; font-size: 13.5px; color: #64748b;">
                Need urgent assistance regarding your student account or EMS credentials? <br>
                Contact the College IT & Administration desk at <a href="mailto:admin@maestrocrown.edu.bd" style="color: #00a4e4; font-weight: 600;">admin@maestrocrown.edu.bd</a> or call <a href="tel:+8801309136876" style="color: #00a4e4; font-weight: 600;">+880 1309-136876</a>.
            </div>

        </div>
    </section>

@endsection
