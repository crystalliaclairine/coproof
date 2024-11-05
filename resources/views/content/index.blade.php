@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        @if(Session::has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="bg-[#368B31] text-white px-6 py-4 flex justify-between items-center">
            <h2 class="font-semibold text-lg">All Contents</h2>
            <a href="{{ route('content.create') }}">
                <button class="bg-[#499C31] hover:bg-[#177032] text-white font-bold py-2 px-4 rounded">
                    Add Content
                </button>
            </a>
        </div>

        <div class="p-6">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 text-left">
                        <th class="py-3 px-6 font-semibold">Title</th>
                        <th class="py-3 px-6 font-semibold">Concept</th>
                        <th class="py-3 px-6 font-semibold">Status</th>
                        <th class="py-3 px-6 font-semibold">Edit</th>
                        <th class="py-3 px-6 font-semibold">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @if(optional($contents)->count() > 0)
                        @foreach($contents as $content)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">{{ $content->title }}</td>
                            <td class="py-4 px-6">{{ $content->concept }}</td>
                            <td class="py-4 px-6">{{ $content->status }}</td>
                            <td class="py-4 px-6">
                                <a href="{{ route('content.edit', [$content->id]) }}">
                                    <button class="bg-[#1C53AE] hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                </a>
                            </td>
                            <td class="py-4 px-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="bg-[#B81B21] hover:bg-red-600 text-white font-bold py-1 px-3 rounded" data-bs-toggle="modal" data-bs-target="#deleteModal{{$content->id}}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="deleteModal{{$content->id}}">
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <form action="{{ route('content.destroy', [$content->id]) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Content</h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus item ini?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Delete
                                                    </button>
                                                    <button type="button" onclick="document.getElementById('deleteModal{{$content->id}}').classList.add('hidden')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm">
                                                        Close
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center py-4 px-6">Tidak ada kategori yang dapat ditampilkan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-4">
                {{ $contents->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
