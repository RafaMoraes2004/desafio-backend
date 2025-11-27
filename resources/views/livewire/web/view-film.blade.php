<div>
    <div class="max-w-screen-md mx-auto px-4 py-8 flex flex-col">
            <img src="{{ asset('storage/' . $filme->cover) }}" 
                 alt="{{ $filme->title }}"
                 class="aspect-video w-full h-auto mx-auto rounded-lg object-cover object-center mb-4 lg:mb-8 shadow-md">

        <h1 class="text-2xl lg:text-4xl font-bold text-gray-900">
            {{ $filme->title }}
        </h1>

        <h2 class="text-lg lg:text-2xl font-semibold mb-4 text-gray-500">
            Cadastrado em: {{ $filme->created_at->format('d/m/Y') }}
        </h2>

        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {{$filme->summary}}
        </div>

        <div class="mt-8">
            <a href="/" class="text-blue-600 hover:underline">← Voltar para a lista</a>
        </div>
    </div>
</div>