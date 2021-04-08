<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{$post->name}}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>
        <div class="grid grid-cols-1 lg:col-span-2 gap-6">

            {{-- Contenido pricipal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img src="{{asset('storage/' . $post->image->url)}}" class="w-full h-80 object-cover object-centes" alt="imagen">
                    @else
                        <img src="https://images.pexels.com/photos/4916559/pexels-photo-4916559.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-full h-80 object-cover object-centes" alt="imagen">
                    @endif

                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{ asset('storage/' . $similar->image->url) }}" alt="similar">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://images.pexels.com/photos/4916559/pexels-photo-4916559.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="imagen">
                                @endif
                                <span class="ml-1 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
