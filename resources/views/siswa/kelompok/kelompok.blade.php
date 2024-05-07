@extends('partial.main')

@section('content')
    <div class="px-4 rounded-lg mt-14">
        <div class="flex items-center p-4 h-48 mb-4 rounded-xl bg-gray-50 bg-custom-orange justify-between">
            <div class="flex-col items-center text-white p-4">
                <h1 class="text-3xl font-semibold pb-2">Jangan Lupa Pahami Materi</h1>
                <p class="text-base font-reguler">Cek selalu tugas, dan kerjakan dengan sesuai perintah</p>
            </div>
            <div class="flex ml-auto p-4">
            </div>
        </div>
            <div class="flex items-center justify-center mb-4 rounded-xl bg-white border p-7">
                <table class="w-full text-base text-left rtl:text-right text-black">
                    <thead class="bg-white border-b border-gray-400">
                        <tr>
                            <th scope="col" class="px-8 py-3 text-center">
                                No
                            </th>
                            <th scope="col" class="px-28 py-3">
                                Nama Kelompok
                            </th>
                            <th scope="col" class="px-20 py-3">
                                Kuota
                            </th>
                            <th scope="col" class="px-12 py-3 text-center">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-8 py-4 text-center">
                                1
                            </th>
                            <td class="px-28 py-4">
                                JavaScript
                            </td>
                            <td class="px-20 py-4">
                                1/5
                            </td>
                            <td class="px-12 py-4 text-center">
                                <a href="{{ route('siswa.kelompok.detail') }}" class="w-28 h-9 px-5 py-2 bg-custom-orange rounded-lg text-white text-sm font-medium font-['Poppins'] leading-tight">
                                        Gabung
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-8 py-4 text-center">
                                2
                            </th>
                            <td class="px-28 py-4">
                                HTML
                            </td>
                            <td class="px-20 py-4">
                                2/5
                            </td>
                            <td class="px-12 py-4 text-center">
                                <a href="{{ route('siswa.kelompok.ketua.detail') }}" class="w-28 h-9 px-5 py-2 bg-custom-orange rounded-lg text-white text-sm font-medium font-['Poppins'] leading-tight">
                                        Gabung
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
@endsection
