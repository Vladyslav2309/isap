<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISAP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-5">
        <!-- Левое лого -->
        <img src="{{ asset('images/logo-left.png') }}" alt="Логотип ISAP" class="h-12 w-auto">

        <!-- Меню -->
        <nav class="flex items-center space-x-6 w-2/3 justify-end text-lg">
            <a href="#" class="hover:text-gray-900">Kontakt</a>
            <a href="#" class="hover:text-gray-900">O nas</a>
            <a href="#" class="hover:text-gray-900">Działalność naukowa</a>
            <a href="#" class="hover:text-gray-900">Wydarzenia</a>
            <a href="#" class="hover:text-gray-900">Projekty</a>
            <div class="relative group">
                <span class="hover:text-gray-900 cursor-pointer">Więcej ▾</span>
                <div class="absolute left-0 mt-2 w-40 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none group-hover:pointer-events-auto">
                    <span class="block px-4 py-2 text-gray-600 cursor-default">Link 1</span>
                    <span class="block px-4 py-2 text-gray-600 cursor-default">Link 2</span>
                </div>
            </div>
        </nav>

        <!-- Правое лого -->
        <a href="https://www.gov.pl/">
            <img src="{{ asset('images/logo-right.png') }}" alt="Gov Logo" class="h-12 w-auto ml-6">
        </a>
    </div>
</header>

<!-- Main -->
<main class="flex-grow flex items-center justify-center bg-gray-50">
    <h1 class="text-5xl md:text-7xl font-bold text-center text-gray-800">
        STRONA W TRAKCIE<br>AKTUALIZACJI
    </h1>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 text-center">
    ISAP 2025 &copy; Wszelkie prawa zastrzeżone
</footer>

</body>
</html>
