@extends('layouts.app')

@section('title', $notice->title . ' – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 50px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Notice Details</span>
            <h1 style="font-size: 32px; font-weight: 800; margin-top: 5px; max-width: 900px; margin-left: auto; margin-right: auto;">
                {{ $notice->title }}
            </h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <a href="{{ route('notice.index') }}" style="color: #38bdf8;">Notices</a> / <span>Detail</span>
            </div>
        </div>
    </div>

    <!-- Notice Content Body -->
    <section class="section section-white">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 340px; gap: 40px; align-items: flex-start;">
                
                <!-- Main Notice Content -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 40px; box-shadow: var(--shadow-sm);">
                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #f1f5f9; padding-bottom: 20px; margin-bottom: 25px; flex-wrap: wrap; gap: 10px;">
                        <div style="display: flex; gap: 15px; align-items: center;">
                            <span style="background: rgba(2,132,199,0.1); color: #0284c7; padding: 5px 14px; border-radius: 30px; font-size: 13px; font-weight: 700;">
                                {{ $notice->category }}
                            </span>
                            <span style="font-size: 14px; color: #64748b;">
                                <i class="fa-regular fa-calendar" style="margin-right: 4px;"></i> {{ $notice->published_at->format('d F, Y') }}
                            </span>
                        </div>

                        <button type="button" onclick="window.print()" class="btn-outline" style="padding: 6px 16px; font-size: 13px; color: #475569; border-color: #cbd5e1;">
                            <i class="fa-solid fa-print"></i> Print Notice
                        </button>
                    </div>

                    <h2 style="font-size: 26px; font-weight: 800; color: #0f172a; margin-bottom: 20px; line-height: 1.35;">
                        {{ $notice->title }}
                    </h2>

                    <div style="color: #334155; font-size: 16px; line-height: 1.85; white-space: pre-line; margin-bottom: 40px;">
                        {{ $notice->description }}
                    </div>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 25px; margin-top: 30px;">
                        <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Notice Issuing Authority</h4>
                        <p style="font-size: 14px; color: #64748b; margin: 0;">
                            By order of the Principal & Academic Committee<br>
                            <strong>Maestro Crown College</strong>, Radio Colony, Savar, Dhaka.<br>
                            College Code: 1933 | EIIN: 136876
                        </p>
                    </div>
                </div>

                <!-- Right Sidebar: Recent Notices -->
                <div>
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 20px; padding: 25px; box-shadow: var(--shadow-sm); margin-bottom: 30px;">
                        <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 20px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px;">
                            <i class="fa-solid fa-bell" style="color: #0284c7; margin-right: 6px;"></i> Recent Circulars
                        </h3>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 15px; margin: 0; padding: 0;">
                            @forelse($recentNotices as $rn)
                                <li style="border-bottom: 1px solid #e2e8f0; padding-bottom: 12px;">
                                    <a href="{{ route('notice.show', $rn->slug) }}" style="font-size: 14px; font-weight: 600; color: #0f172a; display: block; line-height: 1.4; transition: color 0.2s;" onmouseover="this.style.color='#0284c7'" onmouseout="this.style.color='#0f172a'">
                                        {{ $rn->title }}
                                    </a>
                                    <div style="font-size: 12px; color: #94a3b8; margin-top: 4px;">
                                        <i class="fa-regular fa-calendar"></i> {{ $rn->published_at->format('M d, Y') }}
                                    </div>
                                </li>
                            @empty
                                <li style="color: #64748b; font-size: 13px;">No other notices available.</li>
                            @endforelse
                        </ul>
                    </div>

                    <!-- Admission CTA Box -->
                    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); color: #ffffff; border-radius: 20px; padding: 30px; text-align: center;">
                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 10px;">HSC Admission 2026</h4>
                        <p style="font-size: 13.5px; color: #cbd5e1; margin-bottom: 20px;">
                            Apply now for Science, Business Studies or Humanities stream at Maestro Crown College.
                        </p>
                        <a href="{{ route('admission') }}" class="btn-primary" style="width: 100%; justify-content: center;">
                            Apply Online <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
