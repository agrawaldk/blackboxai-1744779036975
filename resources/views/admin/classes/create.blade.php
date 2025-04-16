@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Add New Class</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.classes.store') }}" method="POST" class="max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Class Name</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('name') }}" />
        </div>
        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea id="description" name="description" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add Class</button>
    </form>
</div>
@endsection
