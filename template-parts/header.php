<!DOCTYPE html>
<html class="scroll-smooth m-0 p-0 box-border" lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="fixed top-0 w-full z-50 bg-background/80 backdrop-blur-md shadow-[0_10px_40px_rgba(26,28,28,0.04)]">
        <div class="flex justify-between items-center px-6 md:px-12 py-6 max-w-[1440px] mx-auto">
            <a class="font-noto-serif text-2xl font-bold italic text-primary" href="/">The Path of Stillness</a>
            <nav class="hidden md:flex items-center space-x-8 font-noto-serif text-lg tracking-tight">
                <a class="text-secondary hover:text-primary transition-opacity duration-300" href="#">Diensten</a>
                <a class="text-primary border-b-2 border-primary pb-1" href="#">Tarieven</a>
                <a class="text-secondary hover:text-primary transition-opacity duration-300" href="#">Over mij</a>
                <a class="text-secondary hover:text-primary transition-opacity duration-300" href="#">Contact</a>
            </nav>
            <button class="bg-primary text-on-primary px-8 py-3 rounded-full font-medium tracking-wide hover:opacity-80 transition-all duration-300 active:scale-95">
                <a href="#">Afspraak maken</a>
            </button>
        </div>
    </header>