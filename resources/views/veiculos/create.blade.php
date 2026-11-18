<x-app-layout>
    <div class="py-12 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center gap-3 px-4 sm:px-0">
                <a href="{{ route('dashboard') }}" class="text-slate-400 hover:text-white font-bold text-lg">←</a>
                <h2 class="text-2xl font-black tracking-tight">Cadastrar Veículo</h2>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-8 rounded-3xl shadow-xl">
                <form action="{{ route('veiculos.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Placa *</label>
                        <input type="text" name="placa" placeholder="Ex: ABC1D23" value="{{ old('placa') }}" required class="w-full bg-slate-950 border border-slate-800 rounded-2xl px-4 py-3.5 text-slate-100 focus:outline-none focus:border-blue-500 transition uppercase">
                        @error('placa') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Marca *</label>
                        <input type="text" name="marca" placeholder="Ex: Honda" value="{{ old('marca') }}" required class="w-full bg-slate-950 border border-slate-800 rounded-2xl px-4 py-3.5 text-slate-100 focus:outline-none focus:border-blue-500 transition">
                        @error('marca') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Modelo *</label>
                        <input type="text" name="modelo" placeholder="Ex: CB 300F Twister" value="{{ old('modelo') }}" required class="w-full bg-slate-950 border border-slate-800 rounded-2xl px-4 py-3.5 text-slate-100 focus:outline-none focus:border-blue-500 transition">
                        @error('modelo') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Ano *</label>
                            <input type="number" name="ano" placeholder="2024" value="{{ old('ano') }}" required class="w-full bg-slate-950 border border-slate-800 rounded-2xl px-4 py-3.5 text-slate-100 focus:outline-none focus:border-blue-500 transition">
                            @error('ano') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Cor *</label>
                            <input type="text" name="cor" placeholder="Preto Fosco" value="{{ old('cor') }}" required class="w-full bg-slate-950 border border-slate-800 rounded-2xl px-4 py-3.5 text-slate-100 focus:outline-none focus:border-blue-500 transition">
                            @error('cor') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 bg-blue-500 hover:bg-blue-400 text-slate-950 rounded-2xl font-black text-base shadow-xl shadow-blue-500/20 transition">
                        Cadastrar Veículo
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>