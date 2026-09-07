@extends('layouts.app')

@section('title', 'Admission 2026 – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ef4444; font-weight: 800; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px; background: rgba(239, 68, 68, 0.2); padding: 4px 14px; border-radius: 20px;">
                Session 2026-2027 Open
            </span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 10px;">HSC Admission 2026</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Admission</span>
            </div>
        </div>
    </div>

    <!-- Admission Requirements Section -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Eligibility & Prerequisites</span>
                <h2 class="section-title">Admission Requirements</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    Please ensure you have the following qualifications and documentation ready before applying for admission at Maestro Crown College.
                </p>
            </div>

            <!-- 3 Requirements Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 60px;">
                
                <!-- Academic Documents -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; box-shadow: var(--shadow-sm); border-top: 5px solid #0284c7;">
                    <div style="font-size: 32px; color: #0284c7; margin-bottom: 15px;"><i class="fa-solid fa-file-invoice"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 15px;">Academic Documents</h3>
                    <ul style="color: #475569; font-size: 14.5px; line-height: 1.8; padding-left: 20px;">
                        <li>Original & Photocopy of SSC/Equivalent Academic Transcript / Mark Sheet.</li>
                        <li>Original SSC Testimonial (Proshangsha Patra) from the head of the school.</li>
                        <li>SSC Admit Card and Registration Card photocopies.</li>
                        <li>Online College Admission Confirmation Security Code / Slip.</li>
                    </ul>
                </div>

                <!-- Photos & Identity -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; box-shadow: var(--shadow-sm); border-top: 5px solid #10b981;">
                    <div style="font-size: 32px; color: #10b981; margin-bottom: 15px;"><i class="fa-solid fa-id-card"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 15px;">Photos & ID</h3>
                    <ul style="color: #475569; font-size: 14.5px; line-height: 1.8; padding-left: 20px;">
                        <li>4 copies of recent passport-size color photographs of the student.</li>
                        <li>2 copies of stamp-size color photographs.</li>
                        <li>1 copy passport-size photograph of parents/legal guardian.</li>
                        <li>Student's Digital Birth Registration Certificate photocopy.</li>
                        <li>National ID (NID) card photocopy of parents/guardian.</li>
                    </ul>
                </div>

                <!-- Eligibility Criteria -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px; box-shadow: var(--shadow-sm); border-top: 5px solid #ce9d4d;">
                    <div style="font-size: 32px; color: #ce9d4d; margin-bottom: 15px;"><i class="fa-solid fa-award"></i></div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 15px;">Eligibility (GPA)</h3>
                    <ul style="color: #475569; font-size: 14.5px; line-height: 1.8; padding-left: 20px;">
                        <li><strong>Science Group:</strong> Minimum SSC GPA 3.75 - 4.00 (Higher Math/Biology requirements apply).</li>
                        <li><strong>Business Studies:</strong> Minimum SSC GPA 2.50 - 3.00.</li>
                        <li><strong>Humanities Group:</strong> Minimum SSC GPA 2.00 - 2.50.</li>
                        <li><em>* Admission depends on seat availability and interview performance.</em></li>
                    </ul>
                </div>
            </div>

            <!-- Online Application Form Section -->
            <div id="admissionFormSection" style="max-width: 850px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 24px; padding: 45px; box-shadow: var(--shadow-md);">
                <div style="text-align: center; margin-bottom: 35px;">
                    <span style="color: #0284c7; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Online Application Form</span>
                    <h2 style="font-size: 28px; font-weight: 800; color: #0f172a; margin-top: 5px;">Apply for Class XI Admission</h2>
                    <p style="font-size: 14.5px; color: #64748b; margin-top: 5px;">
                        Fill out the form below to register your admission application. Our counseling office will contact you within 24 hours.
                    </p>
                </div>

                <form action="{{ route('admission.store') }}" method="POST">
                    @csrf
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label class="form-label">Student's Full Name *</label>
                            <input type="text" name="student_name" class="form-control" required placeholder="e.g. Shakil Mahmud">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Father / Guardian's Name</label>
                            <input type="text" name="guardian_name" class="form-control" placeholder="Guardian's Name">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label class="form-label">Phone / WhatsApp Number *</label>
                            <input type="tel" name="phone" class="form-control" required placeholder="01XXXXXXXXX">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="student@example.com">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1.2fr 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label class="form-label">Desired Group *</label>
                            <select name="group" class="form-control" required>
                                <option value="Science">Science</option>
                                <option value="Business Studies">Business Studies</option>
                                <option value="Humanities">Humanities</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">SSC GPA *</label>
                            <input type="number" step="0.01" min="1.00" max="5.00" name="ssc_gpa" class="form-control" required placeholder="5.00">
                        </div>

                        <div class="form-group">
                            <label class="form-label">SSC Education Board</label>
                            <select name="ssc_board" class="form-control">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Madrasah">Madrasah</option>
                                <option value="Technical">Technical</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <label class="form-label">SSC Roll Number (Optional)</label>
                            <input type="text" name="ssc_roll" class="form-control" placeholder="SSC Roll">
                        </div>

                        <div class="form-group">
                            <label class="form-label">SSC Passing Year</label>
                            <input type="text" name="passing_year" value="2026" class="form-control" placeholder="2026">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Present Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Village/Road, Post Office, Upazila/Thana, District">
                    </div>

                    <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; border: none; font-size: 16px; cursor: pointer; padding: 16px;">
                        Submit Online Admission Application <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>

                <div style="text-align: center; margin-top: 30px; border-top: 1px solid #e2e8f0; padding-top: 25px;">
                    <p style="font-size: 14px; color: #64748b; margin-bottom: 8px;">Prefer applying through the Google Form?</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSesYGs5mtsTxISuT4NPcVIa7KlKGsrjN4DKVLJmgCjtynFqwQ/viewform" target="_blank" class="btn-outline" style="color: #0284c7; border-color: #0284c7;">
                        Open Google Admission Form <i class="fa-solid fa-external-link-alt"></i>
                    </a>
                </div>
            </div>

            <!-- Help Desk & Location -->
            <div style="margin-top: 50px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 30px; display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 20px; text-align: center;">
                <div>
                    <div style="font-size: 13px; color: #64748b; font-weight: 600;">ADMISSION HOTLINE</div>
                    <div style="font-size: 20px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                        <a href="tel:+8801309136876" style="color: #0284c7;">+880 1309-136876</a>
                    </div>
                </div>

                <div style="height: 40px; width: 1px; background: #cbd5e1;" class="d-none-mobile"></div>

                <div>
                    <div style="font-size: 13px; color: #64748b; font-weight: 600;">CAMPUS LOCATION</div>
                    <div style="font-size: 15px; font-weight: 700; color: #0f172a; margin-top: 4px;">
                        Radio Colony, Savar, Dhaka
                    </div>
                </div>

                <div style="height: 40px; width: 1px; background: #cbd5e1;" class="d-none-mobile"></div>

                <div>
                    <div style="font-size: 13px; color: #64748b; font-weight: 600;">COLLEGE IDENTIFIERS</div>
                    <div style="font-size: 14px; font-weight: 600; color: #0f172a; margin-top: 4px;">
                        EIIN: 136876 | Code: 1933
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
