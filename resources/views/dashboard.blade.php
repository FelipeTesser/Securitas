<x-app-layout>
    <div class="py-12 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-8 px-4 sm:px-0 flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-black tracking-tight">Olá, {{ Auth::user()->name }}!</h2>
                    <p class="text-slate-400 mt-1">Sua moto está segura agora.</p>
                </div>
                <a href="{{ route('veiculos.create') }}" class="bg-blue-500 hover:bg-blue-400 text-slate-950 px-5 py-3 rounded-2xl font-bold flex items-center gap-2 shadow-lg shadow-blue-500/20 transition">
                    <span class="text-xl">+</span> Novo Veículo
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 px-4 sm:px-0">
                <div class="bg-slate-900 border border-slate-800/80 p-6 rounded-3xl relative overflow-hidden shadow-xl">
                    <div class="text-blue-400 text-2xl mb-3">🚗</div>
                    <div class="text-3xl font-black">{{ $totalVeiculos ?? 0 }}</div>
                    <div class="text-slate-400 text-sm font-medium mt-1">Veículos</div>
                </div>

                <div class="bg-slate-900 border border-slate-800/80 p-6 rounded-3xl relative overflow-hidden shadow-xl">
                    <div class="text-purple-400 text-2xl mb-3">🛡️</div>
                    <div class="text-3xl font-black">{{ $totalProtegidos ?? 0 }}</div>
                    <div class="text-slate-400 text-sm font-medium mt-1">Protegidos</div>
                </div>

                <div class="bg-slate-900 border border-slate-800/80 p-6 rounded-3xl relative overflow-hidden shadow-xl">
                    <div class="text-red-400 text-2xl mb-3">⚠️</div>
                    <div class="text-3xl font-black">{{ $totalAlertas ?? 0 }}</div>
                    <div class="text-slate-400 text-sm font-medium mt-1">Alertas</div>
                </div>
            </div>

            <div class="px-4 sm:px-0">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold">Meus veículos</h3>
                    <span class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Bloqueio via IoT Ativo</span>
                </div>

                @if(isset($veiculos) && $veiculos->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($veiculos as $veiculo)
                            <div class="bg-slate-900 border border-slate-800 p-6 rounded-3xl relative shadow-xl flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-4">
                                        <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-xs font-bold rounded-full border border-blue-500/20">
                                            {{ $veiculo->placa }}
                                        </span>
                                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full {{ $veiculo->status == 'Protegido' ? 'bg-emerald-500/10 text-emerald-400' : 'bg-amber-500/10 text-amber-400' }}">
                                            {{ $veiculo->status }}
                                        </span>
                                    </div>
                                    <h4 class="text-lg font-bold text-slate-100">{{ $veiculo->marca }} {{ $veiculo->modelo }}</h4>
                                    <p class="text-sm text-slate-400 mt-1">Ano: {{ $veiculo->ano }} • Cor: {{ $veiculo->cor }}</p>
                                </div>
                                <div class="mt-6 pt-4 border-t border-slate-800/80 flex justify-between items-center">
                                    <span class="text-xs text-slate-500">ESP32 Conectado</span>
                                    <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" onsubmit="return confirm('Deseja realmente remover este veículo?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-300 text-xs font-bold transition">Remover</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="bg-slate-900 border border-slate-800/80 rounded-3xl p-12 text-center shadow-xl">
                        <div class="w-16 h-16 bg-slate-800 text-slate-400 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">
                            🏍️
                        </div>
                        <h4 class="text-lg font-bold text-slate-200">Nenhum veículo cadastrado ainda</h4>
                        <p class="text-sm text-slate-400 mt-1">Toque em + para adicionar seu primeiro veículo</p>
                        <a href="{{ route('veiculos.create') }}" class="inline-block mt-6 px-6 py-2.5 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm shadow-lg shadow-blue-600/30 transition">
                            Adicionar Veículo
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>