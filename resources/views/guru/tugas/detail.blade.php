@extends('partial.main')

@section('content')
<div class="px-4 rounded-lg mt-14">
<div class="flex items-center justify-center mb-4 rounded-xl bg-white border p-7">
    <table class="w-full text-base text-left rtl:text-right text-black">
        <caption
            class=" pb-8 text-3xl font-bold text-left rtl:text-right text-black bg-white">
            Tugas Buat Candi
        </caption>
        <thead class="bg-white border-b border-gray-400">
            <tr>
                <th scope="col" class="px-8 py-3 text-center">
                    No
                </th>
                <th scope="col" class="px-28 py-3">
                    Nama Siswa
                </th>
                <th scope="col" class="px-20 py-3">
                    Waktu Pengumpulan
                </th>
                <th scope="col" class="px-12 py-3 text-center">
                    Nilai
                </th>
                <th scope="col" class="px-12 py-3 text-center">
                    Hasil
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    1
                </th>
                <td class="px-28 py-4">
                    Achmad
                </td>
                <td class="px-20 py-4">
                    22.23
                </td>
                <td class="px-12 py-4 text-center">
                    89
                </td>
                <td class="px-12 py-4 text-center">
                    <a href="{{ route('guru.tugas.hasil') }}" class="w-28 h-9 px-5 py-2 bg-custom-orange rounded-lg text-white text-sm font-medium  leading-tight">
                        Lihat Hasil
                </a>
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    2
                </th>
                <td class="px-28 py-4">
                    Andi
                </td>
                <td class="px-20 py-4">
                    23.59
                </td>
                <td class="px-12 py-4 text-center">
                    -
                </td>
                <td class="px-12 py-4 text-center">
                    <a href="{{ route('guru.tugas.hasil') }}" class="w-28 h-9 px-5 py-2 bg-custom-orange rounded-lg text-white text-sm font-medium  leading-tight">
                        Lihat Hasil
                </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection
