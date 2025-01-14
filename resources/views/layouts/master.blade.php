<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Custom CSS (if any) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-gray-800 to-gray-900 text-gray-100">
    <div class="container mx-auto px-4 py-8">

        <!-- Header Section -->
        <header class="mb-8">
            @yield('header')
        </header>

        <!-- Main Content Section -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Left Column: Content Section (3/4 width) -->
            <div class="lg:col-span-3">
                @yield('contenu')
            </div>

            <!-- Right Column: Sidebar Section (1/4 width) -->
            <div class="lg:col-span-1">
                @yield('aside')
            </div>
        </div>

        <!-- Footer Section -->
        <footer class="mt-8 bg-gray-700 p-6 rounded-lg shadow-lg">
            <div class="text-center text-gray-300">
                <p class="text-sm">&copy; 2024 Laravel Product Management. All rights reserved.</p>
            </div>
        </footer>

    </div>

    <!-- Alpine.js for interactivity (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>