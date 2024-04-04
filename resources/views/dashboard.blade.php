@extends('layouts.master')
@section('content')
<style>
    .bg-orange{ background: #FB8A3C;};
</style>
<!-- component -->
<div class="p-12">
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
<div class="w-full">
  <!--Detail Siswa -->
<div class="w-1/2 h-96 p-7 mr-8 my-8 bg-white rounded-xl flex-col justify-start items-start gap-5 inline-flex">
    <div class="self-stretch h-7 flex-col justify-start items-start gap-1.5 flex">
        <div class="w-56 text-zinc-800 text-xl font-semibold font-['Poppins'] leading-relaxed">Detail Diri Siswa</div>
    </div>
    <div class="justify-start items-start gap-7 inline-flex">
        <img class="w-[166px] h-[166px] rounded-xl" src="https://via.placeholder.com/166x166" />
        <div class="flex-col justify-start items-start gap-2 inline-flex">
            <div class="flex-col justify-center items-start gap-0.5 flex">
                <div class="text-black text-base font-normal font-['Poppins'] leading-snug tracking-tight">Nama</div>
                <div class="text-black text-xl font-semibold font-['Poppins'] leading-relaxed">Alberrt Enstain</div>
            </div>
            <div class="flex-col justify-center items-start gap-0.5 flex">
                <div class="text-black text-base font-normal font-['Poppins'] leading-snug tracking-tight">Kelas</div>
                <div class="text-black text-xl font-semibold font-['Poppins'] leading-relaxed">11 TKJ A</div>
            </div>
            <div class="flex-col justify-center items-start gap-0.5 flex">
                <div class="text-black text-base font-normal font-['Poppins'] leading-snug tracking-tight">No. Absen</div>
                <div class="text-black text-xl font-semibold font-['Poppins'] leading-relaxed">123</div>
            </div>
        </div>
    </div>
</div>
<!-- nilai -->
<div class="w-1/3 h-[310px] p-7 bg-white rounded-xl flex-col justify-center items-start gap-3 inline-flex">
    <div class="self-stretch h-[54px] flex-col justify-start items-start gap-1.5 flex">
        <div class="w-[105px] text-zinc-800 text-xl font-semibold font-['Poppins'] leading-relaxed">Nilai Anda</div>
        <div class="self-stretch text-slate-500 text-base font-normal font-['Poppins'] leading-snug tracking-tight">Berdasarkan Tugas Terakhir</div>
    </div>
    <div class="self-stretch px-2 py-3 justify-start items-start gap-4 inline-flex">
        <div class="p-[6.15px] bg-orange-400 rounded-[4.92px] justify-center items-center gap-[6.15px] flex">
            <div class="w-[19.69px] h-[19.69px] justify-center items-center flex">
                <div class="w-[19.69px] h-[19.69px] relative">
                </div>
            </div>
        </div>
        <div class="flex-col justify-center items-start gap-2 inline-flex">
            <div class="text-black text-base font-normal font-['Poppins'] leading-snug tracking-tight">Tugas Mandiri  Keamanan Jaringan</div>
            <div class="text-black text-[28px] font-semibold font-['Poppins'] leading-[33.60px] tracking-wide">80</div>
        </div>
    </div>
    <div class="self-stretch px-2 py-3 justify-start items-start gap-4 inline-flex">
        <div class="p-[6.15px] bg-orange-400 rounded-[4.92px] justify-center items-center gap-[6.15px] flex">
            <div class="w-[19.69px] h-[19.69px] justify-center items-center flex">
                <div class="w-[19.69px] h-[19.69px] relative">
                </div>
            </div>
        </div>
        <div class="flex-col justify-center items-start gap-2 inline-flex">
            <div class="text-black text-base font-normal font-['Poppins'] leading-snug tracking-tight">Tugas Kelompok  analisis Jaringan</div>
            <div class="text-black text-[28px] font-semibold font-['Poppins'] leading-[33.60px] tracking-wide">90</div>
        </div>
    </div>
</div>  
</div>
@endsection
