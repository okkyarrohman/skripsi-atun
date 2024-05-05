@extends('partial.main')

@section('content')
<div class="w-[1077px] h-[1192px] p-6 bg-neutral-50 rounded-md flex flex-col justify-start items-start gap-9">
    <div class="h-[58px] flex flex-col justify-center items-start gap-1.5">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Nama Siswa</div>
        <div class="text-zinc-800 text-lg font-normal leading-relaxed">Jalaluldin Siswanto Putra Aditama Sarjo</div>
    </div>
    <div class="h-[58px] flex flex-col justify-center items-start gap-1.5">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Tugas</div>
        <div class="text-zinc-800 text-lg font-normal leading-relaxed">Keamanan Jaringan dan Infrastruktur Komputer pada Lab</div>
    </div>
    <div class="h-[58px] flex flex-col justify-center items-start gap-1.5">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Deadline</div>
        <div class="text-red-500 text-lg font-medium leading-relaxed">Sabtu, 32 Maret 2024 23.00</div>
    </div>
    <div class="h-[162px] flex flex-col justify-center items-start gap-1.5">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Rumusan Masalah</div>
        <div class="text-slate-500 text-lg font-normal leading-relaxed">Figma ipsum component variant main layer. Effect boolean scrolling community plugin vertical select scale comment italic. Shadow edit team text list outline frame group bullet. Auto figma device boolean hand. Vector share bold background style layout. Bold flatten boolean comment ellipse comment. Ipsum draft move ipsum invite polygon shadow. Team outline draft flatten scrolling bold horizontal object shadow. Subtract union slice vector bullet group. Mask edit content overflow plugin invite layout layout content stroke.</div>
    </div>
    <div class="h-[94px] flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Berkas Presentasi</div>
        <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <div class="px-4 py-3 bg-gray-100 rounded">
                <div class="text-zinc-800 text-base font-medium leading-snug">Lihat File</div>
            </div>
            <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">Tugas_Daffa_220103.pdf</div>
        </div>
    </div>
    <div class="h-[94px] flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Laporan</div>
        <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <div class="px-4 py-3 bg-gray-100 rounded">
                <div class="text-zinc-800 text-base font-medium leading-snug">Lihat File</div>
            </div>
            <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">Tugas_Daffa_220103.pdf</div>
        </div>
    </div>
    <div class="h-[94px] flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Nilai</div>
        <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <div class="flex-grow text-gray-400 text-base font-normal leading-snug tracking-tight">Masukan nilai</div>
        </div>
    </div>
    <div class="h-[184px] flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Feedback Tugas</div>
        <div class="flex-shrink-0 w-full flex items-start gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <div class="flex-grow text-gray-400 text-base font-normal leading-snug tracking-tight">Masukan Feedback Tugas</div>
        </div>
    </div>
    <div class="h-[54px] flex flex-col justify-center items-end gap-2.5">
        <div class="w-[200px] px-8 py-4 bg-orange-500 rounded-xl justify-center items-center gap-3 inline-flex">
            <div class="text-neutral-50 text-base font-medium leading-snug">Submit</div>
        </div>
    </div>
</div>

@endsection