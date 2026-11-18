<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Securitas - Sistema de Segurança Antifurto IoT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-blue-500 selection:text-white">
    <div class="min-h-screen flex flex-col justify-between">
        <header class="w-full p-6 flex justify-between items-center max-w-7xl mx-auto">
            <div class="flex items-center gap-3">
                <div class="bg-blue-600 p-2 rounded-xl text-white font-black text-xl shadow-lg shadow-blue-900/50">🛡️</div>
                <span class="text-2xl font-bold tracking-wider">Securitas</span>
            </div>
            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-500 rounded-xl font-medium transition shadow-lg shadow-blue-600/30">Painel</a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-200 rounded-xl font-medium transition mr-3">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-medium transition shadow-lg shadow-blue-600/30">Cadastrar</a>
                        @endif
                    @endauth
                @endif
            </div>
        </header>

        <main class="max-w-4xl mx-auto px-6 text-center my-auto py-12">
            <div class="inline-block mb-4 px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-full text-sm font-semibold tracking-wide uppercase">
                IoT • ESP32 • GPS • Sem Mensalidades
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-6">
                Segurança antifurto inteligente para <span class="text-blue-500">sua motocicleta</span>
            </h1>
            <p class="text-lg text-slate-400 mb-10 max-w-2xl mx-auto leading-relaxed">
                Sistema de telemetria veicular baseado em Internet das Coisas (IoT). Monitore sua localização em tempo real, execute bloqueios de ignição instantâneos e elimine taxas abusivas.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('register') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white rounded-2xl font-bold text-lg shadow-xl shadow-blue-600/40 transition">
                    Começar Agora
                </a>
            </div>
        </main>

        <footer class="text-center py-6 text-sm text-slate-600 border-t border-slate-900">
            Securitas TCC &copy; 2026 - Desenvolvido com Laravel Breeze & Tailwind CSS.
        </footer>
    </div>
</body>
</html>