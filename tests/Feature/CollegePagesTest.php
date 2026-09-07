<?php

namespace Tests\Feature;

use App\Models\Notice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CollegePagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Notice::create([
            'title' => 'Test HSC Admission Notice',
            'slug' => 'test-hsc-admission-notice',
            'category' => 'Admission',
            'published_at' => '2026-03-01',
            'description' => 'Detailed test notice content for verification.',
            'is_pinned' => true,
            'is_active' => true,
        ]);
    }

    public function test_all_public_pages_return_200(): void
    {
        $routes = [
            '/',
            '/about-us',
            '/governing-body',
            '/chairmans-profile',
            '/message-of-chairman',
            '/message-of-principal',
            '/teacher-information',
            '/staff-information',
            '/academic-calender',
            '/college',
            '/programs',
            '/notice',
            '/notice/test-hsc-admission-notice',
            '/research-development',
            '/admission',
            '/contact',
            '/gallery',
            '/gellery',
            '/privacy-policy',
            '/terms-and-conditions',
            '/delete-account',
        ];

        foreach ($routes as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee('Maestro Crown College');
        }
    }

    public function test_contact_form_submission(): void
    {
        $payload = [
            'name' => 'Mohammad Rahim',
            'email' => 'rahim@example.com',
            'phone' => '01711000000',
            'subject' => 'Admission Inquiry for Class 11',
            'message' => 'I would like to inquire about eligibility requirements for the Science stream.',
        ];

        $response = $this->post('/contact', $payload);
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'rahim@example.com',
            'name' => 'Mohammad Rahim',
        ]);
    }

    public function test_admission_form_submission(): void
    {
        $payload = [
            'student_name' => 'Tanvir Hossain',
            'guardian_name' => 'Akhtar Hossain',
            'phone' => '01812345678',
            'email' => 'tanvir@example.com',
            'ssc_gpa' => '5.00',
            'group' => 'Science',
            'ssc_board' => 'Dhaka',
            'ssc_roll' => '123456',
            'passing_year' => '2026',
            'address' => 'Savar, Dhaka',
        ];

        $response = $this->post('/admission/apply', $payload);
        $response->assertSessionHas('admission_success');
        $this->assertDatabaseHas('admission_inquiries', [
            'student_name' => 'Tanvir Hossain',
            'phone' => '01812345678',
            'ssc_gpa' => '5.00',
            'group' => 'Science',
        ]);
    }

    public function test_account_deletion_page_and_submission(): void
    {
        $getResponse = $this->get('/delete-account');
        $getResponse->assertStatus(200);
        $getResponse->assertSee('Delete Account');
        $getResponse->assertSee('Account Deletion Request');

        $payload = [
            'name' => 'Shakil Mahmud',
            'identifier' => 'shakil@example.com',
            'student_id' => 'MCC-2026-1045',
            'class_group' => 'Class XI - Science',
            'reason' => 'Transferring to another district due to family relocation.',
        ];

        $postResponse = $this->post('/delete-account', $payload);
        $postResponse->assertSessionHas('deletion_success');
        $this->assertDatabaseHas('account_deletion_requests', [
            'name' => 'Shakil Mahmud',
            'identifier' => 'shakil@example.com',
            'student_id' => 'MCC-2026-1045',
            'status' => 'Pending',
        ]);
    }
}
