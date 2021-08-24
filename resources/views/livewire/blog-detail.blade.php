<div>
    @section('title')
        Detail Blog {{ $title }}
    @endsection
    <div class="bg-white  dark:bg-darker p-4 rounded">
        <div class="grid grid-cols-12 ">
            <div class="col-span-10 col-start-2">
                <div>
                    <img src="{{ $thumbnail }}" alt="" class="w-full rounded mb-4">
                </div>
                <div>{!! $deskripsi !!}
                    @if (strlen($deskripsi) > 400)
                        @if ($isSelengkapnya)
                            <span class="font-bold text-blue-400 cursor-pointer" wire:click="selengkapnya">baca lebih
                                lengkap</span>

                        @else
                            <span class="font-bold text-blue-400 cursor-pointer" wire:click="selengkapnya">lebih
                                sedikit</span>
                        @endif
                    @endif
                </div>
                <div class="mt-6  text-lg font-medium">Komentar pada blog</div>
                <hr>
                @forelse ($komentar as $k)
                    <div class="dark:bg-dark p-4 rounded my-6 ">
                        <div class="flex">
                            <div>
                                <img src="{{ asset('gambar/default-user.png') }}" class="w-20 rounded-full mr-6">
                            </div>

                            <div class="ml-6">
                                <div class="text-sm mb-4">
                                    <div class="flex justify-between">
                                        <div class="font-bold">{{ $k->nama }}</div>
                                        <div class="font-bold dark:bg-primary px-4 py-1 rounded-lg"><a
                                                onclick="return confirm('Hapus Komentar Ini?')"
                                                href="{{ route('hapus-komentar', $k->id) }}">Hapus</a>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>{{ $k->email }}</div>
                                        <div>{{ $k->created_at }}</div>
                                    </div>
                                </div>

                                <div>{{ $k->body }}</div>

                                <div class="mt-4">
                                    Balasan {{ App\Models\ReplyKomen::where('komentar_id', $k->id)->count() }}
                                    <hr>
                                    @forelse ($k->reply as $r)
                                        <div class="mt-4 ">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 ml-auto mb-2 cursor-pointer" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                            </svg>
                                        </div>
                                        <div class="ml-6">

                                            <div class="">
                                                {{ $r->body }}
                                            </div>
                                            <hr>
                                        </div>
                                    @empty
                                        <div class="text-center">Tidak ada balasan</div>
                                    @endforelse
                                    <div class="flex mt-4">
                                        <input type="text" placeholder="balas komentar ..."
                                            wire:model="message_komentar"
                                            class="py-1 px-7 mr-2 border rounded-lg dark:bg-darker dark:border-transparent dark:text-light focus:outline-none focus:ring ">
                                        <div wire:click="tambah({{ $k->id }})"
                                            class="text-white rounded-lg bg-primary py-1 px-4 cursor-pointer hover:bg-purple-600">
                                            Post</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="dark:bg-dark p-4 rounded my-6">
                        <div class="text-center text-xl font-semibold">Tidak ada komantar pada artikel ini</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
