<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Posts') }}</h2>
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                href="#">
                {{ __('New Post') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="">
                @foreach ($posts->chunk(4) as $chunkedPosts)
                    <div class="mx-auto flex flex-wrap p-12 md:flex-nowrap">
                        @foreach ($chunkedPosts as $post)
                            <a href="">
                                <div class="flex w-full">
                                    <div
                                        class="relative m-1 flex transform flex-col items-start rounded-xl bg-white shadow-2xl transition delay-150 duration-300 ease-in-out md:-ml-16 md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                                        <img class="w-full rounded-t-xl object-cover object-center md:h-36 lg:h-48"
                                            src="{{ $post->image->url }}" alt="blog" />
                                        <div class="px-6 py-8">
                                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                                <span class="">{{ $post->name }}</span>
                                            </h4>
                                            <p class="leading-relax mt-4 text-base font-normal text-gray-500">

                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus
                                                quod, libero consequuntur dolores quis, provident placeat tenetur ullam
                                                distinctio in itaque aperiam! Debitis omnis aliquid, distinctio nulla
                                                doloribus obcaecati.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </section>
        </div>
</x-app-layout>
