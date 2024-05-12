@extends('siswa.tugas.detail')

@section('section')
<div class="self-stretch h-[184px] flex flex-col justify-start items-start gap-2">
    <span class="text-zinc-800 text-lg font-medium font-Poppins leading-relaxed">Rumusan Masalah</span>
    <div class=" flex w-full bg-neutral-50 rounded-lg text-left">
        <input type="text" id="large-input"
            class="block w-full p-4 py-12 text-gray-900 border justify-start border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" placeholder="Jelaskan Rumusan Masalah">
    </div>
</div>
<div class="pt-2 flex justify-end w-full">
    <a href="{{ route('siswa.tugas.detailTugas.DaftarTugas') }}"
        class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
        Selanjutnya
    </a>
</div>
@endsection