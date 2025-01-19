<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BannerAdvertisement;

class FrontController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();

        // Mengambil artikel biasa yang tidak featured dan statusnya 'accept'
        $articles = ArticleNews::with(['category'])
            ->where('is_featured', 'not_featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->latest()
            ->take(3)
            ->get();

        // Mengambil artikel featured dan statusnya 'accept'
        $featured_articles = ArticleNews::with(['category'])
            ->where('is_featured', 'featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->inRandomOrder()
            ->take(3)
            ->get();

        $authors = Author::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            ->first();

        // Artikel untuk kategori Entertainment dengan status 'accept'
        $entertainment_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Tasawuf');
        })
            ->where('is_featured', 'not_featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->latest()
            ->take(3)
            ->get();

        $entertainment_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Tasawuf');
        })
            ->where('is_featured', 'featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->inRandomOrder()
            ->first();

        // Artikel untuk kategori Business dengan status 'accept'
        $business_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Aqidah');
        })
            ->where('is_featured', 'not_featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->latest()
            ->take(3)
            ->get();

        $business_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Aqidah');
        })
            ->where('is_featured', 'featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->inRandomOrder()
            ->first();

        // Artikel untuk kategori Automotive dengan status 'accept'
        $automotive_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Tafsir');
        })
            ->where('is_featured', 'not_featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->latest()
            ->take(3)
            ->get();

        $automotive_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Tafsir');
        })
            ->where('is_featured', 'featured')
            ->where('status', 'accept') // Filter hanya artikel dengan status 'accept'
            ->inRandomOrder()
            ->first();

        // Mengembalikan data ke view
        return view('front.index', compact(
            'categories',
            'articles',
            'featured_articles',
            'authors',
            'bannerads',
            'entertainment_articles',
            'entertainment_featured_articles',
            'business_articles',
            'business_featured_articles',
            'automotive_articles',
            'automotive_featured_articles'
        ));
    }


    public function category(Category $category)
    {
        $categories = Category::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            // ->take(1)
            // ->get();
            ->first();

        return view('front.category', compact('category', 'categories', 'bannerads'));
    }

    public function author(Author $author)
    {
        $categories = Category::all();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            // ->take(1)
            // ->get();
            ->first();

        return view('front.author', compact('categories', 'author', 'bannerads'));
    }

    public function search(Request $request)
    {
        // Validasi input keyword
        $request->validate([
            'keyword' => ['required', 'string', 'max:255'],
        ]);

        $categories = Category::all();

        $keyword = $request->keyword;

        // Mencari artikel berdasarkan keyword dan hanya menampilkan yang statusnya 'active'
        $articles = ArticleNews::with(['category', 'author'])
            ->where('name', 'like', '%' . $keyword . '%')
            ->where('status', 'accept') // Tambahkan filter hanya untuk artikel dengan status 'active'
            ->paginate(6);

        return view('front.search', compact('articles', 'keyword', 'categories'));
    }


    public function details(ArticleNews $articleNews)
    {
        // Tambah jumlah view
        $articleNews->increment('view');

        $categories = Category::all();

        $articles = ArticleNews::with(['category'])
            ->where('is_featured', 'not_featured')
            ->where('id', '!=', $articleNews->id)
            ->where('status', 'accept') // Tambahkan filter
            ->latest()
            ->take(3)
            ->get();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
            ->where('type', 'banner')
            ->inRandomOrder()
            // ->take(1)
            // ->get();
            ->first();

        $square_ads = BannerAdvertisement::where('type', 'square')
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(2)
            ->get();

        if ($square_ads->count() < 2) {
            $square_ads_1 = $square_ads->first();
            $square_ads_2 = null;
        } else {
            $square_ads_1 = $square_ads->get(0);
            $square_ads_2 = $square_ads->get(1);
        }

        $author_news = ArticleNews::where('author_id', $articleNews->author_id)
            ->where('id', '!=', $articleNews->id)
            ->where('status', 'accept') // Tambahkan filter
            ->inRandomOrder()
            ->get();

        if ($articleNews->status !== 'accept') {
            abort(404); // Mengembalikan halaman 404 jika artikel tidak diterima
        }

        return view('front.details', compact('articleNews', 'categories', 'articles', 'bannerads', 'square_ads_1', 'square_ads_2', 'author_news'));
    }

    public function news()
{
    return view('front.news');
}
}
