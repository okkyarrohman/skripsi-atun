@extends('siswa.tugas.detail')

@section('section')
<div class="h-[94px] w-full flex flex-col justify-start items-start gap-2">
    <div class="text-zinc-800 text-lg font-medium leading-relaxed">Berkas Presentasi</div>
    <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
        <label for="file-upload" class="px-4 py-3 bg-gray-100 rounded cursor-pointer">
            <div class="text-zinc-800 text-base font-medium leading-snug">Upload File</div>
            <input id="file-upload" type="file" class="hidden" />
        </label>
        <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">No file selected</div>
    </div>
</div>
<div class="h-[94px] w-full flex flex-col justify-start items-start gap-2">
    <div class="text-zinc-800 text-lg font-medium leading-relaxed">Laporan</div>
    <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
        <label for="file-upload" class="px-4 py-3 bg-gray-100 rounded cursor-pointer">
            <div class="text-zinc-800 text-base font-medium leading-snug">Upload File</div>
            <input id="file-upload" type="file" class="hidden" />
        </label>
        <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight">No file selected</div>
    </div>
</div>
<div class="flex justify-between w-full">
    <div class="pt-2 flex justify-start">
        <a href="{{ route('siswa.tugas.detailTugas.DaftarTugas') }}"
            class="text-custom-orange bg-white border-2 border-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            sebelumnya
        </a>
    </div> 
    <div class="pt-2 flex justify-end">
        <a href="{{ route('siswa.tugas.detailTugas.Feedback') }}"
            class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
            Selanjutnya
        </a>
    </div> 
</div>
@endsection