<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Infographic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index(Request $request, $forHome = false)
    {
        $search = $request->input('search');

        // Query utama untuk berita yang berstatus publish
        $newsQuery = News::with('category')
            ->where('status', 'publish') // Only include published news
            ->orderByDesc('created_at');

        if ($search) {
            $newsQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        $news = $newsQuery->paginate(12);

        if ($request->wantsJson()) {
            return response()->json($news);
        }

        $topViewsNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('views')
            ->take(5)
            ->get();

        $recentNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('created_at')
            ->take(5)
            ->get();

        $recentNewsHeader = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('created_at')
            ->take(12)
            ->get();

        $categories = Category::withCount(['news as news_count'])->get();

        $newsByCategory = [];
        foreach ($categories as $category) {
            $newsByCategory[$category->id] = News::with('category')
                ->where('category_id', $category->id)
                ->where('status', 'publish')
                ->orderByDesc('created_at')
                ->take(8)
                ->get();
        }

        // Ambil data infografis dengan status active
        $activeInfographics = Infographic::where('status', true)
            ->latest() // Mengurutkan berdasarkan kolom `created_at` secara descending
            ->take(3) // Ambil 3 data terbaru
            ->get();


        if ($forHome) {
            return view('index', compact('news', 'categories', 'topViewsNews', 'recentNews', 'recentNewsHeader', 'newsByCategory', 'activeInfographics'));
        }

        return view('news.index', compact('news', 'categories', 'topViewsNews', 'recentNews', 'search', 'recentNewsHeader', 'newsByCategory', 'activeInfographics'));
    }


    // Menampilkan detail berita berdasarkan slug
    public function show(Request $request, $slug)
    {
        $recentNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $newsItem = News::where('slug', $slug)
            ->where('status', 'publish') // Only allow published news
            ->with('category')
            ->firstOrFail();

        $newsItem->increment('views');

        if ($request->wantsJson()) {
            return response()->json($newsItem);
        }

        $categories = Category::withCount('news')->get();

        $popularNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $randomNews = News::with('category')
            ->where('status', 'publish')
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('news.show', compact('newsItem', 'categories', 'popularNews', 'randomNews', 'recentNews'));
    }

    // Menampilkan berita berdasarkan kategori
    public function category(Request $request, $slug)
    {
        $popularNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $recentNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $search = $request->input('search');
        $category = Category::where('slug', $slug)->firstOrFail();

        $newsQuery = News::with('category')
            ->where('category_id', $category->id)
            ->where('status', 'publish') // Only include published news
            ->orderByDesc('created_at');

        if ($search) {
            $newsQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        $news = $newsQuery->paginate(12);

        if ($request->wantsJson()) {
            return response()->json([
                'category' => $category,
                'news' => $news,
                'popularNews' => $popularNews,
                'recentNews' => $recentNews,
            ]);
        }

        $categories = Category::withCount('news')->get();

        return view('news.category', compact('news', 'categories', 'category', 'search', 'popularNews', 'recentNews'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $newsQuery = News::with('category')
            ->where('status', 'publish') // Only include published news
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });

        $news = $newsQuery->paginate(12);

        $categories = Category::withCount('news')->get();

        $popularNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $recentNews = News::with('category')
            ->where('status', 'publish')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        if ($request->wantsJson()) {
            return response()->json([
                'news' => $news,
                'categories' => $categories,
                'popularNews' => $popularNews,
                'recentNews' => $recentNews,
            ]);
        }

        return view('news.search', compact('news', 'categories', 'search', 'recentNews', 'popularNews'));
    }

    public function getNewsData($search = null)
    {
        $newsQuery = News::with('category')
            ->where('status', 'publish') // Only include published news
            ->orderByDesc('created_at');

        if ($search) {
            $newsQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        return $newsQuery->paginate(12);
    }
}
