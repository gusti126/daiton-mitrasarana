<div class="bg-white  dark:bg-darker p-4 rounded">
    @section('title')
        Edit Blog {{ $title }}
    @endsection

    <form action="{{ route('blog-update', $idBlog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-8">
            <img src="{{ $thumbnail }}" class="mx-auto">
            <div class="my-4">Pilih photo</div>
            <input type="file" name="thumbnail">
        </div>
        <div class="mt-4">
            <div>Judul</div>
            <div>
                <input type="text" class="rounded-lg px-2 text-gray-800 w-full" name="title"
                    value="{{ $title }}">
            </div>
        </div>

        <div class="mt-8">
            <div class="mb-8 text-xl">Deskripsi</div>
            <div class="mt-2">
                <textarea class="ckeditor form-control mt-8" name="body">{{ $body }}</textarea>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-primary px-4 py-2 rounded-lg">Simpan</button>
            {{-- <div class="px-4 py-2 rounded bg-primary inline-block" wire:click="update">Simpan</div> --}}
        </div>
    </form>

</div>

@push('script')
    <script src="{{ asset('ckeditor4/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
