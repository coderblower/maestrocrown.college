@extends('layouts.app')

@section('title', 'Governing Body – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Institutional Governance</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">Governing Body</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Administration</span> / <span>Governing Body</span>
            </div>
        </div>
    </div>

    <!-- Governing Body Members -->
    <section class="section section-white">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Board of Trustees & Administration</span>
                <h2 class="section-title">Members of the Governing Body</h2>
                <div class="section-divider"></div>
                <p style="color: #64748b; font-size: 15px; margin-top: 15px;">
                    The Governing Body of Maestro Crown College provides strategic vision, academic policy guidance, and administrative oversight to uphold the highest benchmarks of quality education.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">
                @foreach($members as $m)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-sm); text-align: center; padding: 35px 25px; transition: transform 0.3s ease;">
                        <div style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 20px auto; overflow: hidden; border: 4px solid #e0f2fe; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
                            @if($m['image'])
                                <img src="{{ asset('assets/images/' . $m['image']) }}" alt="{{ $m['name'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div style="width: 100%; height: 100%; background: #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 42px;">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                            @endif
                        </div>

                        <span style="background: rgba(2,132,199,0.1); color: #0284c7; font-size: 12px; font-weight: 700; text-transform: uppercase; padding: 4px 12px; border-radius: 30px; display: inline-block; margin-bottom: 10px;">
                            {{ $m['role'] }}
                        </span>

                        <h3 style="font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">{{ $m['name'] }}</h3>
                        <div style="font-size: 14px; font-weight: 600; color: #475569; margin-bottom: 8px;">{{ $m['designation'] }}</div>
                        <p style="font-size: 13px; color: #64748b; line-height: 1.5;">{{ $m['qualification'] }}</p>

                        @if($m['role'] === 'Chairman')
                            <div style="margin-top: 20px;">
                                <a href="{{ route('chairmans-profile') }}" class="read-more-btn" style="justify-content: center;">
                                    View Full Bio <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        @elseif($m['role'] === 'Member Secretary')
                            <div style="margin-top: 20px;">
                                <a href="{{ route('message-of-principal') }}" class="read-more-btn" style="justify-content: center;">
                                    View Principal's Message <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
