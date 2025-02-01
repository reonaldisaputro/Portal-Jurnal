<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BannerAdvertisement;

class FrontController extends Controller
{
    //
    public function index()
{
    $categories = Category::all();

    $articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->where('status', 'accept')
        ->latest()
        ->take(3)
        ->get();

    $featured_articles = ArticleNews::with(['category'])
        ->where('is_featured', 'featured')
        ->where('status', 'accept')
        ->inRandomOrder()
        ->take(3)
        ->get();

    $authors = Author::all();

    $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        ->first();

    // Menggunakan array kategori untuk menghindari query berulang
    $categories_articles = [];
    $categories_featured_articles = [];
    $categoryNames = ['Tasawuf', 'Aqidah', 'Tafsir'];

    foreach ($categoryNames as $category) {
        $categories_articles[$category] = ArticleNews::whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })
            ->where('is_featured', 'not_featured')
            ->where('status', 'accept')
            ->latest()
            ->take(3)
            ->get();

        $categories_featured_articles[$category] = ArticleNews::whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })
            ->where('is_featured', 'featured')
            ->where('status', 'accept')
            ->inRandomOrder()
            ->first();
    }

    // 🔥 Query untuk mengambil data dosen
    $dosens = Dosen::all();

    return view('front.index', compact(
        'categories',
        'articles',
        'featured_articles',
        'authors',
        'bannerads',
        'categories_articles',
        'categories_featured_articles',
        'dosens'
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
    // Tambah jumlah view setiap kali artikel dikunjungi
    $articleNews->increment('view');

    $categories = Category::all();

    // Ambil 3 artikel lain selain yang sedang dibuka
    $related_articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->where('id', '!=', $articleNews->id)
        ->where('status', 'accept')
        ->latest()
        ->take(3)
        ->get();

    $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        ->first();

    $square_ads = BannerAdvertisement::where('type', 'square')
        ->where('is_active', 'active')
        ->inRandomOrder()
        ->take(2)
        ->get();

    // Pastikan ada dua square ads
    $square_ads_1 = $square_ads->first();
    $square_ads_2 = $square_ads->count() > 1 ? $square_ads->get(1) : null;

    // Ambil artikel lain dari penulis yang sama
    $author_news = ArticleNews::where('author_id', $articleNews->author_id)
        ->where('id', '!=', $articleNews->id)
        ->where('status', 'accept')
        ->inRandomOrder()
        ->take(3)
        ->get();

    // Jika artikel tidak memiliki status 'accept', kembalikan 404
    if ($articleNews->status !== 'accept') {
        abort(404);
    }
    

    return view('front.details-news', compact(
        'articleNews',
        'categories',
        'related_articles',
        'bannerads',
        'square_ads_1',
        'square_ads_2',
        'author_news'
    ));
}


public function news()
{
    $categories = Category::all();

    $articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->where('status', 'accept')
        ->latest()
        ->paginate(6); // ➜ Menggunakan pagination agar tidak berat

    $featured_articles = ArticleNews::with(['category'])
        ->where('is_featured', 'featured')
        ->where('status', 'accept')
        ->inRandomOrder()
        ->take(3)
        ->get();

    return view('front.news', compact(
        'categories',
        'articles',
        'featured_articles'
    ));
}

    public function about()
    {
    return view('front.about');
    }

    public function detailsNews()
    {
    return view('front.details-news');
    }
}
