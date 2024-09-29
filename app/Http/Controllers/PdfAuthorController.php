<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PdfAuthor;
use Illuminate\Http\Request;

class PdfAuthorController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('pdf_authors.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'link_pdf' => 'required|string|max:255',
        ]);

        PdfAuthor::create([
            'category_id' => $request->category_id,
            'link_pdf' => $request->link_pdf,
        ]);

        return redirect()->route('pdf_authors.create')->with('success', 'PDF Author created successfully.');
    }
}
