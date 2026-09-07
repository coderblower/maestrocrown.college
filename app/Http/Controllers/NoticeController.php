<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the notices.
     */
    public function index(Request $request): View
    {
        $category = $request->query('category');
        $search = $request->query('search');

        $query = Notice::where('is_active', true);

        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $notices = $query->orderBy('is_pinned', 'desc')
            ->orderBy('published_at', 'desc')
            ->paginate(10)
            ->withQueryString();

        $categories = Notice::where('is_active', true)
            ->select('category')
            ->distinct()
            ->pluck('category');

        return view('pages.notices', [
            'notices' => $notices,
            'categories' => $categories,
            'selectedCategory' => $category ?? 'All',
            'search' => $search,
        ]);
    }

    /**
     * Display the specified notice.
     */
    public function show(string $slug): View
    {
        $notice = Notice::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $recentNotices = Notice::where('is_active', true)
            ->where('id', '!=', $notice->id)
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        return view('pages.notice-show', [
            'notice' => $notice,
            'recentNotices' => $recentNotices,
        ]);
    }
}
