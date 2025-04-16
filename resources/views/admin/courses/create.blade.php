@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Add New Course</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.courses.store') }}" method="POST" class="max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="class_id" class="block font-medium mb-1">Class</label>
            <select id="class_id" name="class_id" class="w-full border border-gray-300 rounded px-3 py-2">
                <option value="">Select Class</option>
                @foreach($classes as $class)
                <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>{{ $class->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="title" class="block font-medium mb-1">Course Title</label>
            <input type="text" id="title" name="title" required class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('title') }}" />
        </div>
        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea id="description" name="description" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="type" class="block font-medium mb-1">Type</label>
            <input type="text" id="type" name="type" required class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('type') }}" />
        </div>
        <div class="mb-4">
            <label for="duration" class="block font-medium mb-1">Duration</label>
            <input type="text" id="duration" name="duration" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('duration') }}" />
        </div>
        <div class="mb-4">
            <label for="fee" class="block font-medium mb-1">Fee</label>
            <input type="number" step="0.01" id="fee" name="fee" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('fee') }}" />
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add Course</button>
    </form>
</div>
@endsection
