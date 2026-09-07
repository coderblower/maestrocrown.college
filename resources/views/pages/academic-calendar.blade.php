@extends('layouts.app')

@section('title', 'Academic Calender – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Schedule & Planning</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Academic Calendar</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Academic</span> / <span>Academic Calendar</span>
            </div>
        </div>
    </div>

    <!-- Calendar Table & Overview -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Annual Schedule</span>
                <h2 class="section-title">Academic Year 2026 Key Events</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    This schedule outlines class commencements, terminal examinations, vacation periods, and institutional observances for Class XI and XII.
                </p>
            </div>

            <!-- Calendar Table -->
            <div style="max-width: 1000px; margin: 0 auto; background: #ffffff; border-radius: 20px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: var(--shadow-md);">
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                        <thead>
                            <tr style="background: #1e293b; color: #ffffff;">
                                <th style="padding: 16px 20px; font-weight: 600;">Sl.</th>
                                <th style="padding: 16px 20px; font-weight: 600;">Event / Academic Activity</th>
                                <th style="padding: 16px 20px; font-weight: 600;">Target Group</th>
                                <th style="padding: 16px 20px; font-weight: 600;">Date / Timeframe</th>
                                <th style="padding: 16px 20px; font-weight: 600;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 15px 20px; font-weight: 600;">01</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Commencement of HSC Session 2026</td>
                                <td style="padding: 15px 20px; color: #475569;">Class XI</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">July 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #ecfdf5; color: #065f46; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Upcoming</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                                <td style="padding: 15px 20px; font-weight: 600;">02</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Orientation & Freshers' Welcome</td>
                                <td style="padding: 15px 20px; color: #475569;">Class XI (All Groups)</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">First Week of July</td>
                                <td style="padding: 15px 20px;"><span style="background: #eff6ff; color: #1d4ed8; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Scheduled</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 15px 20px; font-weight: 600;">03</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">First Mid-Term Examination</td>
                                <td style="padding: 15px 20px; color: #475569;">Class XI & XII</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">September 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #eff6ff; color: #1d4ed8; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Scheduled</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                                <td style="padding: 15px 20px; font-weight: 600;">04</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Annual Science Fair & IT Olympiad</td>
                                <td style="padding: 15px 20px; color: #475569;">All Students</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">October 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #fef3c7; color: #b45309; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Highlight</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="padding: 15px 20px; font-weight: 600;">05</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">HSC Year Final Exam (Class XI)</td>
                                <td style="padding: 15px 20px; color: #475569;">Class XI</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">December 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #eff6ff; color: #1d4ed8; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Scheduled</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                                <td style="padding: 15px 20px; font-weight: 600;">06</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">HSC Pre-Test & Model Test</td>
                                <td style="padding: 15px 20px; color: #475569;">Class XII Examinees</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">January - February 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #ecfdf5; color: #065f46; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Active</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 15px 20px; font-weight: 600;">07</td>
                                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Annual Sports Meet & Cultural Fest</td>
                                <td style="padding: 15px 20px; color: #475569;">College-wide</td>
                                <td style="padding: 15px 20px; color: #0284c7; font-weight: 600;">February 2026</td>
                                <td style="padding: 15px 20px;"><span style="background: #ecfdf5; color: #065f46; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('notice.index') }}" class="btn-primary">
                    Check Detailed Exam Notices <i class="fa-solid fa-bullhorn"></i>
                </a>
            </div>
        </div>
    </section>

@endsection
