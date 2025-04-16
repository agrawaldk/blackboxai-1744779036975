<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - Maa Saraswati Tribal Open Board Mandla</title>
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
                    <li><a href="{{ route('courses') }}" class="hover:text-blue-600">Courses Offered</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-blue-600">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-600 font-bold">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contact Us Content -->
    <section class="container mx-auto mt-8 bg-white p-6 rounded shadow max-w-lg">
        <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block font-medium mb-1">Name</label>
                <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2" />
            </div>
            <div>
                <label for="email" class="block font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2" />
            </div>
            <div>
                <label for="message" class="block font-medium mb-1">Message</label>
                <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Send Message</button>
        </form>

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-2">Contact Details</h3>
            <p><i class="fas fa-map-marker-alt mr-2"></i>123 Tribal Road, Mandla, MP, India</p>
            <p><i class="fas fa-phone mr-2"></i>+91 12345 67890</p>
            <p><i class="fas fa-envelope mr-2"></i>info@maasaraswati.org</p>
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
