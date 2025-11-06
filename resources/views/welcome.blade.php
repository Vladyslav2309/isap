<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISAP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Левое лого -->
        <a href="#" class="flex items-center">
            <img src="{{ asset('storage/images/logo-left.png') }}" alt="Логотип ISAP" class="h-12 w-auto">
        </a>

        <!-- Меню -->
        <nav class="flex-1 flex justify-center space-x-6 text-lg font-semibold">
            <a href="#" class="hover:text-indigo-600">Kontakt</a>
            <a href="#" class="hover:text-indigo-600">O nas</a>
            <a href="#" class="hover:text-indigo-600">Działalność naukowa</a>
            <a href="#" class="hover:text-indigo-600">Wydarzenia</a>
            <a href="#" class="hover:text-indigo-600">Projekty</a>
            <!-- Выпадашка Więcej -->
            <div class="relative group">
                <span class="hover:text-indigo-600 cursor-pointer">Więcej ▼</span>
                <div class="absolute left-0 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto z-10">
                    <span class="block px-4 py-2 text-gray-500 cursor-default">Link 1</span>
                    <span class="block px-4 py-2 text-gray-500 cursor-default">Link 2</span>
                </div>
            </div>
        </nav>

        <!-- Правое лого -->
        <a href="https://www.gov.pl/" target="_blank">
            <img src="{{ asset('storage/images/logo-right.png') }}" alt="Gov Logo" class="h-12 w-auto">
        </a>
    </div>
</header>

<!-- Контент -->
<main class="flex-1 flex items-center justify-center">
    <h1 class="text-center text-5xl md:text-6xl font-bold text-gray-800">
        STRONA W TRAKCIE<br>
        AKTUALIZACJI
    </h1>
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white text-center py-4">
    ISAP 2025 - Wszystkie prawa zastrzeżone
</footer>

</body>
</html>
