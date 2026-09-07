<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notices = [
            [
                'title' => 'HSC Admission 2026 is Now Open for Science, Humanities & Business Studies',
                'slug' => 'hsc-admission-2026-open',
                'category' => 'Admission',
                'published_at' => '2026-03-01',
                'description' => 'Online and offline admission process for class XI (HSC session 2026) has officially begun. Interested students can apply online through our official portal or visit the college campus admission desk.',
                'is_pinned' => true,
                'is_active' => true,
            ],
            [
                'title' => 'College Academic Calendar and Class Schedule for 2026 Session',
                'slug' => 'college-academic-calendar-2026',
                'category' => 'Academic',
                'published_at' => '2026-02-25',
                'description' => 'All students, faculty members, and guardians are hereby notified that the academic schedule, holiday calendar, and exam timelines for the academic year 2026 have been published.',
                'is_pinned' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Annual Science Fair, Robotics Exhibition & IT Festival 2026',
                'slug' => 'annual-science-fair-robotics-exhibition-2026',
                'category' => 'Activities',
                'published_at' => '2026-02-18',
                'description' => 'Maestro Crown College Robotics Club and Science Department cordially invite all students to participate in the upcoming Inter-College Science & Robotics Olympiad.',
                'is_pinned' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Mandatory College Uniform, ID Card & Attendance Guidelines',
                'slug' => 'college-uniform-id-card-attendance-guidelines',
                'category' => 'Rules',
                'published_at' => '2026-02-10',
                'description' => 'Students must wear proper college uniform and carry their digital ID cards inside campus premises at all times. Minimum 85% attendance is compulsory to appear in the terminal exams.',
                'is_pinned' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Parent-Teacher Meeting (PTM) & Progress Report Distribution',
                'slug' => 'parent-teacher-meeting-progress-report-distribution',
                'category' => 'General',
                'published_at' => '2026-01-30',
                'description' => 'A parent-teacher conference will be held at the college auditorium on Saturday. Respected guardians are requested to attend and discuss their wards academic development.',
                'is_pinned' => false,
                'is_active' => true,
            ],
            [
                'title' => 'HSC Pre-Test & Model Test Examination Schedule Published',
                'slug' => 'hsc-pre-test-model-test-examination-schedule',
                'category' => 'Examination',
                'published_at' => '2026-01-15',
                'description' => 'The routine for HSC Model Test examination has been uploaded. Students are advised to collect their clearance slips and admit cards from the accounts section.',
                'is_pinned' => false,
                'is_active' => true,
            ],
        ];

        foreach ($notices as $notice) {
            Notice::updateOrCreate(['slug' => $notice['slug']], $notice);
        }
    }
}
