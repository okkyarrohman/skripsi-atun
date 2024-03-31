@extends('layouts.master')
@section('content')
@push('css')
<style>
    .bg-sidebar { background: #FB8A3C;}
    .cta-btn { color: #3d68ff; }
    .upgrade-btn { background: #FB8A3C; }
    .upgrade-btn:hover { background:#FB8A3C; }
    .active-nav-link { background: #FB8A3C; }
    .nav-item:hover { background: #ffffff;}
    .account-link:hover { background: #3d68ff;}
    .text-color:hover {color: #FB8A3C}
    .text-size{font-size: 18px;}
</style>
@endpush
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
        <!--materi-->
        <div class="w-1/3 h-auto p-7 ml-10 mb-10 bg-white rounded-xl flex-col justify-start items-start gap-5 inline-flex">
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
                </div>
                <div class="w-[178px] px-5 py-2 bg-orange rounded-xl justify-center items-center gap-2 inline-flex">
                    <div class="text-neutral-50 text-sm font-medium font-['Poppins'] leading-tight">Lihat Semua Materi</div>
                </div>
            </div>
        </div>
        <!--absen-->
        <div class="bg-white">
    
            <div>
                <h1 class="text-xl font-semibold font-['Poppins'] leading-relaxed p-7 mb-2">Daftar Siswa</h1>
            </div>
            <div class="overflow-x-auto border-x w-full">
               <table class="table-auto w-full">
                  <thead class="border-b">
                     <tr class="">
                        <th class="text-left p-4 font-medium">
                           No Absen
                        </th>
                        <th class="text-left p-4 font-medium">
                           Nama Siswa
                        </th>
                        <th class="text-left p-4 font-medium">
                           NIM
                        </th>
                        <th class="text-left p-4 font-medium">
                            Detail
                         </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                           Prof. Lucie Waters 
                        </td>
                        <td class="p-4">
                           basic@example.com 
                        </td>
                        <td class="p-4">
                           Administrator
                        </td>
                        <td class="p-4">
                            <div class="w-[118px] h-9 px-5 py-2 bg-orange rounded-lg justify-center items-center gap-2 inline-flex">
                                <div class="text-white text-sm font-medium font-['Poppins'] leading-tight">Lihat Detail</div>
                            </div>
                         </td>
                     </tr>
                     <tr class="border-b hover:bg-gray-50">
                        <td class="p-4">
                           Anahi Bashirian (You) 
                        </td>
                        <td class="p-4">
                           admin@example.com  
                        </td>
                        <td class="p-4">
                           Super Administrator 
                        </td>
                        <td class="p-4">
                            <div class="w-[118px] h-9 px-5 py-2 bg-orange rounded-lg justify-center items-center gap-2 inline-flex">
                                <div class="text-white text-sm font-medium font-['Poppins'] leading-tight">Lihat Detail</div>
                            </div>
                         </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            </div>
    </div>
    
@endsection
