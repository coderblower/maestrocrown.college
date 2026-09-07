<?php

namespace App\Http\Controllers;

use App\Models\AccountDeletionRequest;
use App\Models\AdmissionInquiry;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a newly created contact message.
     */
    public function storeContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:3000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you shortly.');
    }

    /**
     * Store a newly created admission application inquiry.
     */
    public function storeAdmission(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:150',
            'guardian_name' => 'nullable|string|max:150',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:150',
            'ssc_gpa' => 'required|numeric|between:1.0,5.0',
            'group' => 'required|string|in:Science,Humanities,Business Studies',
            'ssc_board' => 'nullable|string|max:100',
            'ssc_roll' => 'nullable|string|max:50',
            'passing_year' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:500',
        ]);

        AdmissionInquiry::create($validated);

        return back()->with('admission_success', 'Congratulations! Your online admission request has been submitted successfully. Our admission cell will contact you soon.');
    }

    /**
     * Store an account deletion request.
     */
    public function storeAccountDeletion(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'identifier' => 'required|string|max:150',
            'student_id' => 'required|string|max:100',
            'class_group' => 'nullable|string|max:100',
            'reason' => 'nullable|string|max:3000',
        ]);

        AccountDeletionRequest::create($validated);

        return back()->with('deletion_success', 'Your account deletion request has been submitted successfully. Our support team will verify your student identity and confirm via your registered contact details.');
    }
}
