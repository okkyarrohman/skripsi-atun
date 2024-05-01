@extends('partial.main')

@section('content')
    <div class="px-4 rounded-lg mt-14">
        <div class=" p-6 bg-white rounded-md flex flex-col justify-start items-start gap-9">
            <div class="self-stretch flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Tugas</span>
                <span class="self-stretch text-zinc-800 text-lg font-normal font-Poppins leading-relaxed">Keamanan Jaringan dan Infrastruktur Komputer pada Lab</span>
            </div>
            <div class="self-stretch flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Deadline</span>
                <span class="self-stretch text-red-500 text-lg font-medium font-Poppins leading-relaxed">Sabtu, 32 Maret 2024 23.00</span>
            </div>
            <div class="self-stretch py-2.5 justify-start items-start gap-2.5 flex">
                <a href="#" class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 bg-custom-orange rounded-lg justify-center items-center gap-2.5">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Rumusan Masalah</h1>
                </a>
                <a href="#" class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 bg-gray-400 rounded-lg justify-center items-center gap-2.5">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Daftar Tugas</h1>
                </a>
                <a href="#" class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 bg-gray-400 rounded-lg justify-center items-center gap-2.5">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Laporan</h1>
                </a>
            </div>
            <div class="self-stretch h-[162px] flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Deskripsi</span>
                <span class="self-stretch text-slate-500 text-lg font-normal font-Poppins leading-relaxed">Figma ipsum component variant main layer. Effect boolean scrolling community plugin vertical select scale comment italic. Shadow edit team text list outline frame group bullet. Auto figma device boolean hand. Vector share bold background style layout. Bold flatten boolean comment ellipse comment. Ipsum draft move ipsum invite polygon shadow. Team outline draft flatten scrolling bold horizontal object shadow. Subtract union slice vector bullet group. Mask edit content overflow plugin invite layout layout content stroke.</span>
            </div>
            <div class="self-stretch h-[184px] flex flex-col justify-start items-start gap-2">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Rumusan Masalah</span>
                <div class=" flex w-full bg-neutral-50 rounded-lg text-left">
                    <input type="text" id="large-input"
                        class="block w-full p-4 py-12 text-gray-900 border justify-start border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" placeholder="Jelaskan Rumusan Masalah">
                </div>
            </div>
            <div class="pt-2 flex justify-end w-full">
                <a href="{{ route('siswa.kelompok.ketua.detail') }}"
                    class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                    Tambah Tugas
                </a>
            </div>
        </div>
        
    </div>
@endsection
