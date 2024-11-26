@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container mx-auto px-4">
    <a href="{{ route('content.create') }}" class="bg-[#499C31] text-white px-4 py-2 rounded mb-4 inline-block hover:bg-[#377924]">Create New Content</a>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Concept</th>
                    <th class="border border-gray-300 px-4 py-2">Progress</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2">Notes</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->user->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->concept }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->progress }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->status }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $content->notes }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('content.edit', $content->id) }}" class="text-yellow-500 hover:underline">Edit</a> |
                        <form action="{{ route('content.destroy', $content->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
