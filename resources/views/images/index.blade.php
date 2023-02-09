<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Images') }}</h2>
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                href="#">
                {{ __('Upload Image') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <div class="relative overflow-x-auto">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-2">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Images
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Uploaded at
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Image link
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2">
                                            {{ $image->id }}
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <div class="flex items-center gap-x-2">
                                                    <img class="object-cover w-10 h-10 rounded-full"
                                                        src="{{ $image->url }}" alt="">
                                                    <div>
                                                        @if ($image->imageable_type === 'App\Models\User')
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                {{ $image->imageable->name }}
                                                            </h2>
                                                            <p
                                                                class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                Type: Image
                                                            </p>
                                                        @else
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                {{ $image->imageable->name }}
                                                            </h2>
                                                            <p
                                                                class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                Type: Post
                                                            </p>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2">
                                            {{ $image->created_at }}
                                        </td>
                                        <td class="px-6 py-2">
                                            <code>
                                                {{ $image->url }}
                                            </code>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6">
                            {{ $images->links() }}
                        </div>
                    </div>
                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
