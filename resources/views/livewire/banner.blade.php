<div>
    @section('title')
        Banner Management
    @endsection
    <div class="bg-white rounded-md dark:bg-darker p-4 w-full">
        <div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-2 xl:grid-cols-3">
            @forelse ($banners as $banner)
                <div>
                    <img src="{{ $banner->image }}" alt="">
                </div>
            @empty
                <div>Data Kosong</div>
            @endforelse
        </div>

    </div>
</div>
