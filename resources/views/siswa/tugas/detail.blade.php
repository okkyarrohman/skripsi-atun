@extends('partial.main')

@section('content')
    <div class="px-4 rounded-lg mt-14">
        <div class=" p-6 bg-white rounded-md flex flex-col justify-start items-start gap-9">
            <div class="self-stretch flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Tugas</span>
                <span class="self-stretch text-zinc-800 text-lg font-normal font-Poppins leading-relaxed">Keamanan Jaringan
                    dan Infrastruktur Komputer pada Lab</span>
            </div>
            <div class="self-stretch flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Deadline</span>
                <span class="self-stretch text-red-500 text-lg font-medium font-Poppins leading-relaxed">Sabtu, 32 Maret 2024
                    23.00</span>
            </div>
            <div class="self-stretch py-2.5 justify-start items-start gap-2.5 flex">
                <div
                    class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 rounded-lg justify-center items-center gap-2.5 text-white
                       {{ Request::routeIs('siswa.tugas.detailTugas.RumusanMasalah') ? 'bg-custom-orange' : 'bg-gray-400' }}">
                    <h1 class="font-medium font-Poppins text-base leading-snug">Rumusan Masalah</h1>
                </div>
                <div
                                       class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 rounded-lg justify-center items-center gap-2.5 text-white
                       {{ Request::routeIs('siswa.tugas.detailTugas.DaftarTugas') ? 'bg-custom-orange' : 'bg-gray-400' }}">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Daftar Tugas</h1>
                </div>
                <div
                                       class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 rounded-lg justify-center items-center gap-2.5 text-white
                       {{ Request::routeIs('siswa.tugas.detailTugas.Laporan') ? 'bg-custom-orange' : 'bg-gray-400' }}">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Laporan</h1>
                </div>
                <div
                                       class="flex-grow flex-shrink flex-basis-0 px-5 py-3.5 rounded-lg justify-center items-center gap-2.5 text-white
                       {{ Request::routeIs('siswa.tugas.detailTugas.Feedback') ? 'bg-custom-orange' : 'bg-gray-400' }}">
                    <h1 class="text-white text-base font-medium font-Poppins leading-snug">Feedback</h1>
                </div>
            </div>
            <div class="self-stretch h-[162px] flex flex-col justify-center items-start gap-1.5">
                <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Deskripsi</span>
                <span class="self-stretch text-slate-500 text-lg font-normal font-Poppins leading-relaxed">Figma ipsum
                    component variant main layer. Effect boolean scrolling community plugin vertical select scale comment
                    italic. Shadow edit team text list outline frame group bullet. Auto figma device boolean hand. Vector
                    share bold background style layout. Bold flatten boolean comment ellipse comment. Ipsum draft move ipsum
                    invite polygon shadow. Team outline draft flatten scrolling bold horizontal object shadow. Subtract
                    union slice vector bullet group. Mask edit content overflow plugin invite layout layout content
                    stroke.</span>
            </div>
            @yield('section')
        </div>

    </div>
@endsection
