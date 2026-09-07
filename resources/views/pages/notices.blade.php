@extends('layouts.app')

@section('title', 'Notice Board – Maestro Crown College')

@section('content')

    <!-- Page Header Banner -->
    <div style="background: linear-gradient(135deg, #1d2423, #243c3c); padding: 60px 0; color: #ffffff; text-align: center; border-bottom: 3px solid #38bdf8;">
        <div class="container">
            <span style="color: #ce9d4d; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1.5px;">Institutional Circulars</span>
            <h1 style="font-size: 40px; font-weight: 800; margin-top: 5px;">College Notice Board</h1>
            <div style="margin-top: 10px; font-size: 14px; color: #94a3b8;">
                <a href="{{ route('home') }}" style="color: #38bdf8;">Home</a> / <span>Academic</span> / <span>Notice</span>
            </div>
        </div>
    </div>

    <!-- Notice Board Section -->
    <section class="section section-white">
        <div class="container">
            
            <!-- Filter & Search Bar -->
            <div style="display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; margin-bottom: 35px; background: #f8fafc; padding: 20px; border-radius: 16px; border: 1px solid #e2e8f0;">
                
                <!-- Category Filters -->
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <a href="{{ route('notice.index') }}" class="gallery-filter-btn {{ $selectedCategory === 'All' ? 'active' : '' }}">All Notices</a>
                    @foreach($categories as $cat)
                        <a href="{{ route('notice.index', ['category' => $cat]) }}" class="gallery-filter-btn {{ $selectedCategory === $cat ? 'active' : '' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>

                <!-- Search Input -->
                <form action="{{ route('notice.index') }}" method="GET" style="display: flex; gap: 10px; min-width: 280px;">
                    @if($selectedCategory !== 'All')
                        <input type="hidden" name="category" value="{{ $selectedCategory }}">
                    @endif
                    <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Search notices..." style="padding: 10px 14px;">
                    <button type="submit" class="btn-primary" style="padding: 10px 18px; border: none; cursor: pointer;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            <!-- Notices List Table -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-sm);">
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <thead>
                            <tr style="background: #1e293b; color: #ffffff; font-size: 14px;">
                                <th style="padding: 16px 20px; width: 140px;">Publish Date</th>
                                <th style="padding: 16px 20px; width: 130px;">Category</th>
                                <th style="padding: 16px 20px;">Notice Title & Details</th>
                                <th style="padding: 16px 20px; width: 140px; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($notices as $n)
                                <tr style="border-bottom: 1px solid #f1f5f9; transition: background 0.2s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='transparent'">
                                    <td style="padding: 18px 20px; vertical-align: top;">
                                        <div style="font-weight: 700; color: #0f172a; font-size: 14px;">
                                            {{ $n->published_at->format('d M, Y') }}
                                        </div>
                                        <div style="font-size: 12px; color: #94a3b8;">{{ $n->published_at->diffForHumans() }}</div>
                                    </td>
                                    <td style="padding: 18px 20px; vertical-align: top;">
                                        <span style="background: rgba(2,132,199,0.1); color: #0284c7; padding: 4px 10px; border-radius: 30px; font-size: 12px; font-weight: 700; display: inline-block;">
                                            {{ $n->category }}
                                        </span>
                                    </td>
                                    <td style="padding: 18px 20px; vertical-align: top;">
                                        <a href="{{ route('notice.show', $n->slug) }}" style="font-size: 16px; font-weight: 700; color: #0f172a; display: block; margin-bottom: 6px; line-height: 1.4;">
                                            @if($n->is_pinned)
                                                <span style="background: #fee2e2; color: #dc2626; font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 800; margin-right: 6px;">PINNED</span>
                                            @endif
                                            {{ $n->title }}
                                        </a>
                                        <p style="color: #64748b; font-size: 13.5px; margin: 0; line-height: 1.6;">
                                            {{ Str::limit($n->description, 130) }}
                                        </p>
                                    </td>
                                    <td style="padding: 18px 20px; vertical-align: top; text-align: center;">
                                        <a href="{{ route('notice.show', $n->slug) }}" class="btn-outline" style="padding: 8px 16px; font-size: 13px; color: #0284c7; border-color: #0284c7; display: inline-flex;">
                                            Read More <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="padding: 40px; text-align: center; color: #64748b;">
                                        <i class="fa-solid fa-bullhorn" style="font-size: 36px; color: #cbd5e1; margin-bottom: 12px; display: block;"></i>
                                        No notices matched your criteria.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                @if($notices->hasPages())
                    <div style="padding: 20px; border-top: 1px solid #e2e8f0; display: flex; justify-content: center;">
                        {{ $notices->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
