<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\User;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('content.index', compact('contents'));
    }

    public function create()
    {
        $users = User::all();
        return view('content.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'concept' => 'required|string',
            'progress' => 'required|in:being processed,unprocessed,upload pending,uploaded,all complete',
            'status' => 'required|in:pending,approved,rejected',
            'notes' => 'nullable|string',
        ]);

        Content::create($validated);

        return redirect()->route('content.index')->with('success', 'Content created successfully.');
    }

    public function show(Content $content)
    {
        // 
    }

    public function edit(Content $content)
    {
        return view('content.edit', compact('content'));
    }

    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'concept' => 'required|string',
            'progress' => 'required|string',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $content->update($request->all());

        return redirect()->route('content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return redirect()->route('content.index')->with('success', 'Content deleted successfully.');
    }
}
