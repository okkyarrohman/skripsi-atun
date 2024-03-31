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
    <div class="w-1/2    h-[400px] p-7 my-8 bg-white rounded-xl flex-col justify-start items-start gap-5 inline-flex">
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
            <div class="w-[178px] px-5 py-2 bg-orange-500 rounded-xl justify-center items-center gap-2 inline-flex">
                <div class="text-neutral-50 text-sm font-medium font-['Poppins'] leading-tight">Lihat Semua Materi</div>
            </div>
        </div>
    </div>
    <!--materi-->
    <div class="w-[478px] h-[400px] p-7 bg-white rounded-xl flex-col justify-start items-start gap-5 inline-flex">
        <div class="self-stretch h-[26px] flex-col justify-start items-start gap-1.5 flex">
            <div class="w-[228px] text-zinc-800 text-xl font-semibold font-['Poppins'] leading-relaxed">Materi Terbaru</div>
        </div>
        <div class="self-stretch h-[298px] flex-col justify-center items-center gap-6 flex">
            <div class="self-stretch h-[238px] rounded-md flex-col justify-start items-start gap-2 flex">
                <div class="self-stretch px-3 py-4 rounded-lg justify-start items-center gap-4 inline-flex">
                    <div class="w-[42px] h-[42px] p-2 bg-orange rounded-xl justify-center items-center gap-[7.27px] flex">
                        <div class="text-orange-500 text-xl font-semibold font-['Poppins'] leading-relaxed">01</div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-0.5 inline-flex">
                        <div class="self-stretch text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Tipe data dan Variabel</div>
                    </div>
                    <div class="w-6 h-6 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                        </div>
                    </div>
                </div>
                <div class="self-stretch px-3 py-4 rounded-lg justify-start items-center gap-4 inline-flex">
                    <div class="w-[42px] h-[42px] p-2 bg-orange-200 rounded-xl justify-center items-center gap-[7.27px] flex">
                        <div class="text-orange-500 text-xl font-semibold font-['Poppins'] leading-relaxed">01</div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-0.5 inline-flex">
                        <div class="self-stretch text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Tipe data dan Variabel</div>
                    </div>
                    <div class="w-6 h-6 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                        </div>
                    </div>
                </div>
                <div class="self-stretch px-3 py-4 rounded-lg justify-start items-center gap-4 inline-flex">
                    <div class="w-[42px] h-[42px] p-2 bg-orange-200 rounded-xl justify-center items-center gap-[7.27px] flex">
                        <div class="text-orange-500 text-xl font-semibold font-['Poppins'] leading-relaxed">01</div>
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-0.5 inline-flex">
                        <div class="self-stretch text-zinc-700 text-base font-medium font-['Poppins'] leading-snug">Tipe data dan Variabel</div>
                    </div>
                    <div class="w-6 h-6 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[178px] px-5 py-2 bg-orange-500 rounded-xl justify-center items-center gap-2 inline-flex">
                <div class="text-neutral-50 text-sm font-medium font-['Poppins'] leading-tight">Lihat Semua Materi</div>
            </div>
        </div>
    </div>
    <!--daftar siswa-->
    <table class="table-auto">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Views</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Intro to CSS</td>
            <td>Adam</td>
            <td>858</td>
          </tr>
          <tr class="bg-emerald-200">
            <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
            <td>Adam</td>
            <td>112</td>
          </tr>
          <tr>
            <td>Intro to JavaScript</td>
            <td>Chris</td>
            <td>1,280</td>
          </tr>
        </tbody>
      </table>
@endsection
