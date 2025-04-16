<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Courses Offered - Maa Saraswati Tribal Open Board Mandla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-roboto bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center space-x-4">
                <img src="/images/logo.png" alt="Maa Saraswati Logo" class="h-12 w-12" />
                <h1 class="text-xl font-bold">Maa Saraswati Tribal Open Board Mandla</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-600">About Us</a></li>
                    <li><a href="{{ route('courses') }}" class="hover:text-blue-600 font-bold">Courses Offered</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-blue-600">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Courses Offered Content -->
    <section class="container mx-auto mt-8 bg-white p-6 rounded shadow">
        <h2 class="text-3xl font-semibold mb-6">Courses Offered</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($courses as $course)
            <div class="border rounded p-4 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold mb-2">{{ $course->title }}</h3>
                <p class="text-gray-700 mb-2">{{ $course->description }}</p>
                <p class="text-sm text-gray-600">Type: {{ $course->type }}</p>
                <p class="text-sm text-gray-600">Duration: {{ $course->duration }}</p>
                <p class="text-sm text-gray-600">Fee: ₹{{ $course->fee }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white mt-12 py-6 shadow-inner">
        <div class="container mx-auto text-center text-gray-600">
            &copy; {{ date('Y') }} Maa Saraswati Tribal Open Board Mandla. All rights reserved.
        </div>
    </footer>

</body>
</html>
