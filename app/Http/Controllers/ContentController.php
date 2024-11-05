<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content; // Pastikan model Content sudah ada

class ContentController extends Controller
{
    /**
     * Display a listing of the content.
     */
    public function index()
    {
        $contents = Content::paginate(10); // Sesuaikan jumlah per halaman
        return view('content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new content.
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created content in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'concept' => 'required|string',
            'status' => 'required|string'
        ]);

        // Simpan data baru
        Content::create([
            'user_id' => auth()->id(), // Simpan ID user yang membuat konten
            'title' => $request->title,
            'concept' => $request->concept,
            'status' => $request->status
        ]);

        return redirect()->route('content.index')->with('message', 'Content created successfully!');
    }

    /**
     * Show the form for editing the specified content.
     */
    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('content.edit', compact('content'));
    }

    /**
     * Update the specified content in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'concept' => 'required|string',
            'status' => 'required|string'
        ]);

        // Update data
        $content = Content::findOrFail($id);
        $content->update([
            'title' => $request->title,
            'concept' => $request->concept,
            'status' => $request->status
        ]);

        return redirect()->route('content.index')->with('message', 'Content updated successfully!');
    }

    /**
     * Remove the specified content from storage.
     */
    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->route('content.index')->with('message', 'Content deleted successfully!');
    }
}
