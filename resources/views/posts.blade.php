<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

        <div class="py-8 mx-auto max-w-screen-7xl lg:py-16 lg:px-0">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:grid-cols-3">
            @foreach ($posts as $post)

                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/categories/{{ $post->category->slug }}">

                            <span
                                class="
                                @if($post->category->color == 'red') bg-red-100 text-red-800 dark:bg-red-200 dark:text-red-800
                                @elseif($post->category->color == 'green') bg-green-100 text-green-800 dark:bg-green-200 dark:text-green-800
                                @elseif($post->category->color == 'blue') bg-blue-100 text-blue-800 dark:bg-blue-200 dark:text-blue-800
                                @elseif($post->category->color == 'yellow') bg-yellow-100 text-yellow-800 dark:bg-yellow-200 dark:text-yellow-800
                                @else bg-gray-100 text-gray-800 dark:bg-gray-200 dark:text-gray-800
                                @endif
                                text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                               {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="/posts/{{ $post->slug }}" class="hover:underline">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $post->title }}</h2></a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{Str::limit($post->body,150)}}</p>
                    <div class="flex justify-between items-center">
                       <a href="/authors/{{ $post->author->username }}">
                         <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="{{ $post->author->name }}" />
                            <span class="font-medium text-xs dark:text-white">
                                {{ $post->author->name }}
                            </span>
                        </div>
                       </a>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-xs">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
            </div>
        </div>
        </div>
</x-layout>