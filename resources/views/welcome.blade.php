<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISA P Lublin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
        <!-- Левое лого -->
        <a href="#">
            <img src="{{ asset('images/logo-left.png') }}" alt="Left Logo" class="h-16">
        </a>

        <!-- Меню -->
        <nav class="flex space-x-6 text-lg md:text-xl">
            <a href="#">Kontakt</a>
            <a href="#">O nas</a>
            <a href="#">Działalność naukowa</a>
            <a href="#">Wydarzenia</a>
            <a href="#">Projekty</a>
            <div class="relative group">
                <span class="cursor-pointer">Więcej ▼</span>
                <div class="absolute hidden group-hover:block bg-white shadow-lg mt-1">
                    <span class="block px-4 py-2 text-gray-500 cursor-default">link 1</span>
                    <span class="block px-4 py-2 text-gray-500 cursor-default">link 2</span>
                </div>
            </div>
        </nav>

        <!-- Правое лого -->
        <a href="https://www.gov.pl/" target="_blank">
            <img src="{{ asset('images/logo-right.png') }}" alt="Right Logo" class="h-16">
        </a>
    </div>
</header>


<!-- Центрированный текст -->
<main class="flex items-center justify-center h-screen bg-gray-50">
    <div class="text-center">
        <h1 class="text-6xl md:text-8xl font-bold text-gray-800 uppercase tracking-wide">STRONA W TRAKCIE</h1>
        <h2 class="text-4xl md:text-6xl font-semibold text-gray-600 mt-4 uppercase tracking-wide">AKTUALIZACJI</h2>
    </div>
</main>
<footer class="bg-gray-100 text-gray-600 body-font mt-20">
    <div class="container mx-auto py-6 px-5 flex flex-col items-center">
        <p class="text-sm text-center">
            ISAP 2025 &copy; Wszystkie prawa zastrzeżone.
        </p>
    </div>
</footer>

</body>
</html>
