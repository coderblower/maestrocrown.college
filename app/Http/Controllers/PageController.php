<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        $latestNotices = Notice::where('is_active', true)
            ->orderBy('is_pinned', 'desc')
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        return view('pages.home', [
            'latestNotices' => $latestNotices,
        ]);
    }

    /**
     * Display the About Us page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the Governing Body page.
     */
    public function governingBody(): View
    {
        $members = [
            [
                'name' => 'Dr. Kamrul Ahsan',
                'designation' => 'Chairman, Governing Body',
                'qualification' => 'PhD in Philosophy, JU; Former Syndicate Member, Jahangirnagar University',
                'image' => 'photo_6120749823746051688_x-150x150.jpg',
                'role' => 'Chairman',
            ],
            [
                'name' => 'Md Khalilur Rahman',
                'designation' => 'Principal & Member Secretary',
                'qualification' => 'M.Sc (Physics), Experienced Educationist & Administrator',
                'image' => 'photo_6127672035421917065_x.jpg',
                'role' => 'Member Secretary',
            ],
            [
                'name' => 'Dr. Md Saiful Kabir',
                'designation' => 'Distinguished Member',
                'qualification' => 'Educationist & Academic Advisor',
                'image' => null,
                'role' => 'Member',
            ],
            [
                'name' => 'Mrs. Najnin Sultana Ruma',
                'designation' => 'Member, Governing Body',
                'qualification' => 'Social Worker & Guardian Representative',
                'image' => null,
                'role' => 'Member',
            ],
            [
                'name' => 'Mrs. Dil Afroz',
                'designation' => 'Member, Governing Body',
                'qualification' => 'Educationist & Community Leader',
                'image' => null,
                'role' => 'Member',
            ],
        ];

        return view('pages.governing-body', ['members' => $members]);
    }

    /**
     * Display Chairman's Profile page.
     */
    public function chairmansProfile(): View
    {
        return view('pages.chairmans-profile');
    }

    /**
     * Display Message of Chairman page.
     */
    public function messageOfChairman(): View
    {
        return view('pages.message-of-chairman');
    }

    /**
     * Display Message of Principal page.
     */
    public function messageOfPrincipal(): View
    {
        return view('pages.message-of-principal');
    }

    /**
     * Display Teachers Information page.
     */
    public function teachers(): View
    {
        $teachers = [
            ['name' => 'Burhan Uddin', 'dept' => 'Physics', 'designation' => 'Senior Lecturer'],
            ['name' => 'Abdur Razzak Khan', 'dept' => 'Chemistry', 'designation' => 'Senior Lecturer'],
            ['name' => 'Souman Chakrabarti', 'dept' => 'Mathematics', 'designation' => 'Assistant Professor'],
            ['name' => 'Md Shahin Alam', 'dept' => 'Biology', 'designation' => 'Senior Lecturer'],
            ['name' => 'Aslam Bishwas', 'dept' => 'English', 'designation' => 'Assistant Professor'],
            ['name' => 'Md Kamrul Hyder', 'dept' => 'Bangla', 'designation' => 'Senior Lecturer'],
            ['name' => 'Uttam Kumar Paul', 'dept' => 'ICT / Computer Science', 'designation' => 'Senior Lecturer & Lab In-charge'],
            ['name' => 'Abdul Matin', 'dept' => 'Accounting', 'designation' => 'Senior Lecturer'],
            ['name' => 'Anjuman Ara Rupa', 'dept' => 'Economics', 'designation' => 'Senior Lecturer'],
            ['name' => 'Romesh Chakma', 'dept' => 'Business Organization & Mgmt', 'designation' => 'Lecturer'],
            ['name' => 'Abdullah Al Mamun', 'dept' => 'Finance & Banking', 'designation' => 'Lecturer'],
            ['name' => 'Nasir Uddin Howladar', 'dept' => 'Civics & Good Governance', 'designation' => 'Senior Lecturer'],
            ['name' => 'Roushon Jamil', 'dept' => 'History / Islamic History', 'designation' => 'Lecturer'],
            ['name' => 'Aziz Muhammad', 'dept' => 'Social Work', 'designation' => 'Lecturer'],
            ['name' => 'Gulam Rabbi', 'dept' => 'Physics', 'designation' => 'Lecturer'],
            ['name' => 'Riaj Al Hyder', 'dept' => 'Chemistry', 'designation' => 'Lecturer'],
            ['name' => 'Sonia Gumej', 'dept' => 'English', 'designation' => 'Lecturer'],
            ['name' => 'Md Abir Hassan', 'dept' => 'Mathematics', 'designation' => 'Lecturer'],
            ['name' => 'Md Selim Al Hasan', 'dept' => 'Biology', 'designation' => 'Lecturer'],
            ['name' => 'Md Masud Rana', 'dept' => 'Bangla', 'designation' => 'Lecturer'],
            ['name' => 'Nishat Anjum', 'dept' => 'Economics', 'designation' => 'Lecturer'],
            ['name' => 'Saklain Mursalin', 'dept' => 'ICT', 'designation' => 'Lecturer'],
            ['name' => 'Rubel Zaman', 'dept' => 'Accounting', 'designation' => 'Lecturer'],
            ['name' => 'Fazle Hasan Rabbi', 'dept' => 'Marketing', 'designation' => 'Lecturer'],
            ['name' => 'Ariful Hassan', 'dept' => 'Physics', 'designation' => 'Demonstrator'],
            ['name' => 'Kulsum Akter', 'dept' => 'Chemistry', 'designation' => 'Demonstrator'],
            ['name' => 'Ajmeri Haque', 'dept' => 'Biology', 'designation' => 'Demonstrator'],
            ['name' => 'Nayab Ali', 'dept' => 'Physical Education', 'designation' => 'Sports Instructor'],
            ['name' => 'Shafiur Rahman', 'dept' => 'English', 'designation' => 'Lecturer'],
            ['name' => 'Sourmi Paul', 'dept' => 'Higher Mathematics', 'designation' => 'Lecturer'],
            ['name' => 'Najnin Ahmed', 'dept' => 'Bangla', 'designation' => 'Lecturer'],
            ['name' => 'Afroza Khanom', 'dept' => 'Civics', 'designation' => 'Lecturer'],
            ['name' => 'Rahim Uddin', 'dept' => 'Finance', 'designation' => 'Lecturer'],
            ['name' => 'Faruk Ahmed', 'dept' => 'Accounting', 'designation' => 'Lecturer'],
            ['name' => 'Suhrab Hussain', 'dept' => 'Physics', 'designation' => 'Lecturer'],
            ['name' => 'Rafi Al Mujammel', 'dept' => 'ICT', 'designation' => 'Lecturer'],
            ['name' => 'Simon Deb', 'dept' => 'Chemistry', 'designation' => 'Lecturer'],
            ['name' => 'Shefali Begum', 'dept' => 'Social Work', 'designation' => 'Lecturer'],
            ['name' => 'Sarah Ahmed', 'dept' => 'English', 'designation' => 'Lecturer'],
            ['name' => 'Ratan Chandra Shil', 'dept' => 'General Science', 'designation' => 'Lecturer'],
            ['name' => 'Rajon Uddin Howladar', 'dept' => 'Logic & Philosophy', 'designation' => 'Lecturer'],
        ];

        return view('pages.teachers', ['teachers' => $teachers]);
    }

    /**
     * Display Staff Information page.
     */
    public function staff(): View
    {
        $staff = [
            ['name' => 'Sujon Kumar Chandra', 'designation' => 'Head Assistant / Admin Officer', 'dept' => 'Administration'],
            ['name' => 'Md Abbas Uddin', 'designation' => 'Senior Accountant', 'dept' => 'Accounts & Finance'],
            ['name' => 'Md Delwar Hussain', 'designation' => 'Librarian', 'dept' => 'Central Library'],
            ['name' => 'Md Najim Uddin', 'designation' => 'Assistant Librarian', 'dept' => 'Central Library'],
            ['name' => 'Md Mahbub Alom', 'designation' => 'Computer Operator & IT Support', 'dept' => 'ICT & Records'],
            ['name' => 'Rashedul Islam Talukdar', 'designation' => 'Office Assistant', 'dept' => 'General Administration'],
            ['name' => 'Afsana Habib', 'designation' => 'Admission & Student Counselor', 'dept' => 'Admission Section'],
            ['name' => 'Shahriar Shuvo', 'designation' => 'Lab Assistant (Physics/Chemistry)', 'dept' => 'Science Laboratories'],
            ['name' => 'Masud Rana', 'designation' => 'Lab Assistant (Biology/ICT)', 'dept' => 'Laboratories'],
            ['name' => 'Zahidul Islam', 'designation' => 'Store & Inventory Keeper', 'dept' => 'Logistics'],
            ['name' => 'Alom Mia', 'designation' => 'Campus Security In-charge', 'dept' => 'Security'],
            ['name' => 'Shafiqul Islam', 'designation' => 'Campus Caretaker', 'dept' => 'Maintenance'],
            ['name' => 'Lucky Begum', 'designation' => 'Support Staff (Girls Common Room)', 'dept' => 'General Services'],
            ['name' => 'Asma Khatun', 'designation' => 'Support Staff', 'dept' => 'General Services'],
            ['name' => 'Sudip Saha', 'designation' => 'Electrician & Generator Operator', 'dept' => 'Maintenance'],
            ['name' => 'Abul Hassan', 'designation' => 'Campus Maintenance & Driver', 'dept' => 'Transport'],
        ];

        return view('pages.staff', ['staff' => $staff]);
    }

    /**
     * Display Academic Calendar page.
     */
    public function academicCalendar(): View
    {
        return view('pages.academic-calendar');
    }

    /**
     * Display Programs / College page.
     */
    public function programs(): View
    {
        return view('pages.programs');
    }

    /**
     * Display Research & Development page.
     */
    public function research(): View
    {
        return view('pages.research');
    }

    /**
     * Display Admission page.
     */
    public function admission(): View
    {
        return view('pages.admission');
    }

    /**
     * Display Contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Display Gallery page.
     */
    public function gallery(): View
    {
        $photos = [
            ['file' => 'aboutmebrif.jpg', 'title' => 'Maestro Crown College Campus', 'category' => 'Campus'],
            ['file' => '473285500_2636321196538113_7340129627340135027_n.jpg', 'title' => 'Science Laboratory Practical Session', 'category' => 'Laboratories'],
            ['file' => '294751604_456475836483286_721815900096184952_n.jpg', 'title' => 'Modern Computer & Multimedia Lab', 'category' => 'Laboratories'],
            ['file' => '470991510_2618447508325482_4592017110440847998_n.jpg', 'title' => 'Central Library & Reading Hall', 'category' => 'Campus'],
            ['file' => '487875279_1174675554663307_560618647300892608_n.jpg', 'title' => 'HSC Outstanding Achievers Celebration', 'category' => 'Achievements'],
            ['file' => '476832929_1134791768651686_8006870201329393673_n.jpg', 'title' => 'Annual Cricket Tournament Championship', 'category' => 'Sports'],
            ['file' => '489686093_1181549030642626_6022692502881831407_n.jpg', 'title' => 'Annual Cultural Evening & Award Ceremony', 'category' => 'Events'],
            ['file' => '487104367_1174675424663320_3969507936372652626_n.jpg', 'title' => 'College Farewell & Orientation Ceremony', 'category' => 'Events'],
            ['file' => '473610256_2636321163204783_2626770157811180023_n.jpg', 'title' => 'MCC Robotics Club Project Presentation', 'category' => 'Innovation'],
            ['file' => 'photo_6127672035421917315_y.jpg', 'title' => 'Robotics & Microcontroller Workshop', 'category' => 'Innovation'],
            ['file' => '473700846_2638724299631136_4044533778425086642_n-1.jpg', 'title' => 'Inter-College Science Olympiad Winners', 'category' => 'Achievements'],
            ['file' => '492471202_2729541577216074_6233356819745905848_n.jpg', 'title' => 'Students Active Campus Life', 'category' => 'Campus'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.54.07-PM.jpeg', 'title' => 'Robotics Competition Live Demonstration', 'category' => 'Innovation'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.36-PM-1.jpeg', 'title' => 'Student Study Group Discussion', 'category' => 'Campus'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.36-PM.jpeg', 'title' => 'Classroom Interactive Session', 'category' => 'Campus'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.35-PM-2.jpeg', 'title' => 'Outdoor Sports and Athletics', 'category' => 'Sports'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.35-PM-1.jpeg', 'title' => 'College Campus Gathering', 'category' => 'Events'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.35-PM.jpeg', 'title' => 'National Day Observation', 'category' => 'Events'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.34-PM-1.jpeg', 'title' => 'Debating Club Championship', 'category' => 'Events'],
            ['file' => 'WhatsApp-Image-2026-03-02-at-4.55.34-PM.jpeg', 'title' => 'Campus Greenery & Environment', 'category' => 'Campus'],
        ];

        return view('pages.gallery', ['photos' => $photos]);
    }
}
