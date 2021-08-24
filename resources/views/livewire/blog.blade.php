<div>
    @section('title')
        Blog Managements
    @endsection
    <div class="bg-white rounded-md dark:bg-darker p-4 w-full">
        <div class="mb-4 ">
            <div class="flex px-4">
                <div class="py-1 dark:bg-dark bg-gray-100 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-white text-gray-500 " fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <input type="text"
                    class=" py-1  mr-2 border-none bg-gray-100 focus:outline-none outline-none rounded-r-xl dark:bg-dark dark:border-transparent dark:text-light"
                    placeholder="cari judul artikel ..." wire:model="keywordCari" />
            </div>
        </div>
        <hr class="mb-4">
        <div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-2 xl:grid-cols-4">
            @foreach ($blogs as $item)
                <div class=" items-center justify-between p-4 bg-white rounded-md dark:bg-dark">
                    <div><img src="{{ $item->thumbnail }}" alt="" class="rounded-md mb-4"></div>
                    <div class="mt-4 mb-4">{{ Str::limit($item->title, 46) }}</div>

                    <div class="flex bottom-0 justify-between">

                        <a href="{{ route('livewire-edit-blog', $item->id) }}"
                            class="bg-primary border-2 border-primary p-1 rounded-md  text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>

                        <a href="{{ route('livewire-blog-detail', $item->id) }}"
                            class="bg-gray-50 p-1 rounded-md text-gray-800 border-2 border-gray-50  text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>

                        <a href="{{ route('hapus-blog', $item->id) }}" class="border-2 border-primary p-1 rounded-lg"
                            onclick="return confirm('Hapus Artikel Ini ?')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-52">
            {{ $blogs->links() }}
        </div>
    </div>

</div>
