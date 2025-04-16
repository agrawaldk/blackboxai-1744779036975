@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Manage Courses</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.courses.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">Add New Course</a>

    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Class</th>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Type</th>
                <th class="py-2 px-4 border-b">Duration</th>
                <th class="py-2 px-4 border-b">Fee</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td class="py-2 px-4 border-b">{{ $course->id }}</td>
                <td class="py-2 px-4 border-b">{{ $course->class ? $course->class->name : '-' }}</td>
                <td class="py-2 px-4 border-b">{{ $course->title }}</td>
                <td class="py-2 px-4 border-b">{{ $course->type }}</td>
                <td class="py-2 px-4 border-b">{{ $course->duration }}</td>
                <td class="py-2 px-4 border-b">₹{{ $course->fee }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.courses.edit', $course->id) }}" class="text-blue-600 hover:underline mr-4">Edit</a>
                    <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this course?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
