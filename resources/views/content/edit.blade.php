@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4">Edit Content</h1>
    <form action="{{ route('content.update', $content->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT') <!-- Method PUT untuk update -->
        
        <!-- Hidden Input for user_id -->
        <input type="hidden" name="user_id" value="{{ $content->user_id }}">

        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $content->user->name }}" readonly>
        </div>
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $content->title }}" required>
        </div>
        <div class="mb-4">
            <label for="concept" class="block text-gray-700 text-sm font-bold mb-2">Concept</label>
            <textarea name="concept" id="concept" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $content->concept }}</textarea>
        </div>
        <div class="mb-4">
            <label for="progress" class="block text-gray-700 text-sm font-bold mb-2">Progress</label>
            <select name="progress" id="progress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="being processed" {{ $content->progress == 'being processed' ? 'selected' : '' }}>Being Processed</option>
                <option value="unprocessed" {{ $content->progress == 'unprocessed' ? 'selected' : '' }}>Unprocessed</option>
                <option value="upload pending" {{ $content->progress == 'upload pending' ? 'selected' : '' }}>Upload Pending</option>
                <option value="uploaded" {{ $content->progress == 'uploaded' ? 'selected' : '' }}>Uploaded</option>
                <option value="all complete" {{ $content->progress == 'all complete' ? 'selected' : '' }}>All Complete</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <select name="status" id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="pending" {{ $content->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $content->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $content->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="notes" class="block text-gray-700 text-sm font-bold mb-2">Notes</label>
            <textarea name="notes" id="notes" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $content->notes }}</textarea>
        </div>

        <button type="submit" class="bg-[#195EAC] text-white px-4 py-2 rounded hover:bg-[#195190]">Update</button>
        <a href="{{ route('content.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Cancel</a>
    </form>
</div>
@endsection