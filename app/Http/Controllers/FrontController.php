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
        

        // 🔥 Query untuk mengambil data dosen
        $dosens = Dosen::all();

        return view('front.index', compact(
            
            'articles',
            'featured_articles',
            
            'dosens'
        ));
    }


    public function details(ArticleNews $articleNews)
    {
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
