@extends('layouts.master')
@section('content')
<style>
    .bg-orange{ background: #FB8A3C;};
</style>
    <!-- component -->
    <div class="w-full h-52 px-16 py-4 bg-orange rounded-xl justify-between items-center inline-flex">
        <div class="flex-col justify-start items-start gap-3 inline-flex">
            <div class="text-neutral-100 text-3xl font-semibold text-white leading-[33.60px] tracking-wide">Selamat  Datang, Bambang!</div>
            <div class="w-[364px] text-neutral-100 text-base font-normal text-white font-['Poppins'] leading-snug tracking-tight">Jangan lupa cek tugas siswa setiap saat</div>
        </div>
        <div class="w-[209px] h-[182.76px] relative">
            <div>
                <img src="{{ URL('asset/image/cuate.svg')}}" alt="Placeholder Image" class="w-full h-full">
            </div>
        </div>
    </div>
    <!--tugas-->
    <div class="w-1/2 h-96 p-7 my-8 bg-white rounded-xl flex-col justify-start items-start gap-5 inline-flex">
        <div class="self-stretch h-[26px] flex-col justify-start items-start gap-1.5 flex">
            <div class="w-[228px] text-zinc-800 text-xl font-semibold font-['Poppins'] leading-relaxed">Tugas Terdekat</div>
        </div>
        <div class="self-stretch grow shrink basis-0 flex-col justify-between items-center flex">
            <div class="self-stretch h-[186px] flex-col justify-end items-start gap-6 flex">
                <div class="self-stretch px-3 border-l-2 border-orange-500 justify-between items-center inline-flex">
                    <div class="text-zinc-700 text-lg font-medium font-['Poppins'] leading-relaxed">Pengumpulan Tugas buat candi</div>
                    <div class="flex-col justify-start items-end gap-0.5 inline-flex">
                        <div class="text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Berakhir </div>
                        <div class="text-gray-600 text-base font-normal font-['Poppins'] leading-snug tracking-tight">12 Mar 2024 12.00</div>
                    </div>
                </div>
                <div class="self-stretch px-3 border-l-2 border-orange-500 justify-between items-center inline-flex">
                    <div class="text-zinc-700 text-lg font-medium font-['Poppins'] leading-relaxed">Pengumpulan Tugas buat candi</div>
                    <div class="flex-col justify-start items-end gap-0.5 inline-flex">
                        <div class="text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Berakhir </div>
                        <div class="text-gray-600 text-base font-normal font-['Poppins'] leading-snug tracking-tight">12 Mar 2024 12.00</div>
                    </div>
                </div>
                <div class="self-stretch px-3 border-l-2 border-orange-500 justify-between items-center inline-flex">
                    <div class="text-zinc-700 text-lg font-medium font-['Poppins'] leading-relaxed">Pengumpulan Tugas buat candi</div>
                    <div class="flex-col justify-start items-end gap-0.5 inline-flex">
                        <div class="text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Berakhir </div>
                        <div class="text-gray-600 text-base font-normal font-['Poppins'] leading-snug tracking-tight">12 Mar 2024 12.00</div>
                    </div>
                </div>
            </div>
            <div class="w-44 px-5 py-3 bg-orange rounded-xl justify-center items-center gap-2 inline-flex">
                <div class="text-white text-sm font-medium font-['Poppins'] leading-tight">Lihat Semua Materi</div>
            </div>
        </div>
    </div>
    
@endsection
