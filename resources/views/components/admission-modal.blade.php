<!-- Online Admission Quick Modal -->
<div class="admission-modal-backdrop" id="admissionModal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.75); backdrop-filter: blur(6px); z-index: 99999; align-items: center; justify-content: center; padding: 20px;">
    <div class="admission-modal-card" style="background: #ffffff; border-radius: 24px; max-width: 650px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 35px; position: relative; box-shadow: 0 25px 50px rgba(0,0,0,0.3);">
        <button type="button" id="admissionModalClose" style="position: absolute; top: 20px; right: 20px; background: #f1f5f9; border: none; font-size: 24px; width: 36px; height: 36px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">&times;</button>
        
        <div style="text-align: center; margin-bottom: 25px;">
            <span style="color: #ef4444; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">HSC Admission Session 2026</span>
            <h2 style="font-size: 26px; color: #0f172a; margin-top: 5px;">Online Admission Application</h2>
            <p style="font-size: 14px; color: #64748b; margin-top: 5px;">Apply directly to Maestro Crown College or fill out our instant admission inquiry.</p>
        </div>

        <form action="{{ route('admission.store') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">Student's Full Name *</label>
                    <input type="text" name="student_name" class="form-control" required placeholder="e.g. Tanvir Ahmed">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">Father / Guardian's Name</label>
                    <input type="text" name="guardian_name" class="form-control" placeholder="Guardian's Name">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">Mobile Number *</label>
                    <input type="tel" name="phone" class="form-control" required placeholder="01XXXXXXXXX">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="student@example.com">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">Desired Group *</label>
                    <select name="group" class="form-control" required>
                        <option value="Science">Science</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Business Studies">Business Studies</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">SSC GPA *</label>
                    <input type="number" step="0.01" min="1.00" max="5.00" name="ssc_gpa" class="form-control" required placeholder="5.00">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label">SSC Board</label>
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

            <div class="form-group" style="margin-bottom: 20px;">
                <label class="form-label">Present Address</label>
                <input type="text" name="address" class="form-control" placeholder="House, Road, Area, Thana, District">
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; border: none; font-size: 16px; cursor: pointer;">
                Submit Admission Form <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px; border-top: 1px solid #e2e8f0; padding-top: 15px;">
            <span style="font-size: 13px; color: #64748b;">Prefer Google Forms?</span><br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSesYGs5mtsTxISuT4NPcVIa7KlKGsrjN4DKVLJmgCjtynFqwQ/viewform" target="_blank" style="color: #0284c7; font-weight: 600; font-size: 13.5px; display: inline-flex; align-items: center; gap: 6px; margin-top: 4px;">
                Open Official Google Admission Form <i class="fa-solid fa-external-link-alt"></i>
            </a>
        </div>
    </div>
</div>
