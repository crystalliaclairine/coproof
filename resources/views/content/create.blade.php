@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4">Create Content</h1>
    <form action="{{ route('content.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" readonly>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="concept" class="block text-gray-700 text-sm font-bold mb-2">Concept</label>
            <textarea name="concept" id="concept" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>
        <div class="mb-4">
            <label for="progress" class="block text-gray-700 text-sm font-bold mb-2">Progress</label>
            <select name="progress" id="progress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="being processed">Being Processed</option>
                <option value="unprocessed">Unprocessed</option>
                <option value="upload pending">Upload Pending</option>
                <option value="uploaded">Uploaded</option>
                <option value="all complete">All Complete</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <select name="status" id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="notes" class="block text-gray-700 text-sm font-bold mb-2">Notes</label>
            <textarea name="notes" id="notes" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

            <button type="submit" class="bg-[#195EAC] text-white px-4 py-2 rounded hover:bg-[#195190]">Create</button>
            <a href="{{ route('content.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Cancel</a>
    </form>
</div>
@endsection