<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ArticleNews;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthorPDFController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('pdf_authors.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required',
            'thumbnail' => 'required|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'link_pdf' => 'required|url|max:255',
        ]);

        // Simpan thumbnail ke dalam storage (misalnya di folder 'thumbnails' di 'storage/app/public')
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

        // Generate slug otomatis dari nama artikel
        $slug = Str::slug($request->name);

        // Pastikan slug unik dengan menambahkan angka jika sudah ada slug yang sama
        $originalSlug = $slug;
        $counter = 1;
        while (ArticleNews::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Insert data ke tabel article_news
        ArticleNews::create([
            'name' => $request->name,
            'content' => $request->content,
            'thumbnail' => $thumbnailPath,
            'is_featured' => 'not_featured', // Atur is_featured default jika tidak dikirimkan
            'category_id' => $request->category_id,
            'author_id' => $request->author_id, // ID author yang didapat dari session
            'link_pdf' => $request->link_pdf,
            'status' => 'pending', // Status default
            'slug' => $slug, // Slug yang dihasilkan secara otomatis
        ]);

        return redirect()->route('front.index')->with('success', 'Article created successfully!');
    }
}
