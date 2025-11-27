<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        
    @foreach ($filmes as $filme)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
            
            <div class="h-48 w-full bg-gray-200">
                @if($filme->cover)
                    <img src="{{ asset('storage/' . $filme->cover) }}" 
                         alt="{{ $filme->title }}" 
                         class="w-full h-full object-cover">
                @else
                    <div class="flex items-center justify-center h-full text-gray-500">
                        Sem Capa
                    </div>
                @endif
            </div>

            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2 truncate">
                        {{ $filme->title }}
                    </h2>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                        {{ $filme->summary }}
                    </p>
                </div>

                <a href="{{ route('see', $filme->id) }}" class="block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 transition">
                    Ver Detalhes
                </a>
            </div>
        </div>
       
    @endforeach
    <div>
        {{ $filmes->links() }}
    </div>

</div>