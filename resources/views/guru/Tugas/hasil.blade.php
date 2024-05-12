@extends('partial.main')

@section('content')
<div class="w-full items-center py-7">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('admin.tugas.tugas') }}"
                    class="inline-flex items-center text-lg font-medium text-gray-500">
                    Tugas
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-lg font-medium text-gray-500 md:ms-2">Hasil Tugas</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-lg font-medium text-custom-orange md:ms-2">detail Tugas</a>
                </div>
            </li>
        </ol>
    </nav>
</div>

<div class="px-4 rounded-lg">
    <div class="p-6 bg-white rounded-md flex flex-col justify-start items-start gap-9">
        <div class="flex flex-col justify-center items-start gap-1.5">
            <span class="text-zinc-800 text-lg font-medium leading-relaxed">Nama Siswa</span>
            <span class="text-zinc-800 text-lg font-normal leading-relaxed">Jalaluldin Siswanto Putra Aditama Sarjo</span>
        </div>
        <div class="flex flex-col justify-center items-start gap-1.5">
            <span class="text-zinc-800 text-lg font-medium leading-relaxed">Tugas</span>
            <span class="text-zinc-800 text-lg font-normal leading-relaxed">Keamanan Jaringan dan Infrastruktur Komputer pada Lab</span>
        </div>
        <div class="flex flex-col justify-center items-start gap-1.5">
            <span class="text-zinc-800 text-lg font-medium leading-relaxed">Deadline</span>
            <span class="text-red-500 text-lg font-medium leading-relaxed">Sabtu, 32 Maret 2024 23.00</span>
        </div>
        <div class="flex flex-col justify-center items-start gap-1.5">
            <span class="text-zinc-800 text-lg font-medium leading-relaxed">Rumusan Masalah</span>
            <span class="text-slate-500 text-lg font-normal leading-relaxed">Figma ipsum component variant main layer. Effect boolean scrolling community plugin vertical select scale comment italic. Shadow edit team text list outline frame group bullet. Auto figma device boolean hand. Vector share bold background style layout. Bold flatten boolean comment ellipse comment. Ipsum draft move ipsum invite polygon shadow. Team outline draft flatten scrolling bold horizontal object shadow. Subtract union slice vector bullet group. Mask edit content overflow plugin invite layout layout content stroke.</span>
        </div>
        <div class="w-full flex flex-col justify-start items-start gap-2">
            <div class="text-zinc-800 text-lg font-medium leading-relaxed">Berkas Presentasi</div>
            <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
                <label for="file-upload" class="px-4 py-3 bg-gray-100 rounded cursor-pointer">
                    <div class="text-zinc-800 text-base font-medium leading-snug">Lihat File</div>
                    <input id="file-upload" type="file" class="hidden" />
                </label>
                <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">No file selected</div>
            </div>
        </div>
        <div class="w-full flex flex-col justify-start items-start gap-2">
            <div class="text-zinc-800 text-lg font-medium leading-relaxed">Laporan</div>
            <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
                <label for="file-upload" class="px-4 py-3 bg-gray-100 rounded cursor-pointer">
                    <div class="text-zinc-800 text-base font-medium leading-snug">Lihat File</div>
                    <input id="file-upload" type="file" class="hidden" />
                </label>
                <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">No file selected</div>
            </div>
        </div>
        <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Nilai</span>
            <div class=" flex w-full bg-neutral-50 rounded-lg text-left">
                <input
                    class="block w-full p-4 py-4 text-gray-900 border justify-start border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" placeholder="89"></input>
            </div>
        </div>
        <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Feedback Tugas</span>
            <div class=" flex w-full bg-neutral-50 rounded-lg text-left">
                <input
                    class="block w-full p-4 py-12 text-gray-900 border justify-start border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" placeholder="sudah bagus"></input>
            </div>
        </div>
        <div class="pt-2 flex justify-end w-full" x-data="{ showButtons: false, submitted: false }">
            <a href="#"
                x-show="!submitted"
                @click="showButtons = true; submitted = true;"
                class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center me-2">
                Submit
            </a>
            <div x-show="showButtons" class="flex space-x-2">
                <button class="text-custom-orange border border-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center">
                    Kembali
                </button>
                <button class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center">
                    Edit
                </button>
            </div>
        </div>
        
</div>


@endsection