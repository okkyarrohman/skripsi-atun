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
            <div class="flex items-center justify-start mb-4 rounded-xl bg-white border p-7">
                <table class="w-full text-base text-left rtl:text-right text-black">
                    <caption class="text-left font-bold text-2xl mb-4">
                        Kelompok
                    </caption>
                    <thead class="bg-white border-b border-gray-400">
                        <tr>
                            <th scope="col" class="px-12 py-4 text-center">
                                Nomor
                            </th>
                            <th scope="col" class="px-6 py-4 w-full">
                                Nama Anggota
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-center">
                                1
                            </th>
                            <td class="px-6 py-4">
                                Febrian Daffa
                            </td>
                        </tr>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-center">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Febrian Daffa
                            </td>
                        </tr>\
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-center">
                                3
                            </th>
                            <td class="px-6 py-4">
                                Pitcinini Cantika Haurum Fitria Ningsih
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-start mb-4 rounded-xl bg-white border p-7">
                <table class="w-full text-base text-left rtl:text-right text-black">
                    <caption class="text-left font-bold text-2xl mb-4">
                        Tugas Kelompok
                    </caption>
                    <thead class="bg-white border-b border-gray-400">
                        <tr>
                            <th scope="col" class="px-8 py-3 text-center">
                                No
                            </th>
                            <th scope="col" class="px-28 py-3">
                                Nama Kelompok
                            </th>
                            <th scope="col" class="px-20 py-3">
                                Dikerjakan oleh
                            </th>
                            <th scope="col" class="px-12 py-3 text-center">
                                Deadline
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-8 py-4 text-center">
                                1
                            </th>
                            <td class="px-28 py-4">
                                Mencari biksu tong
                            </td>
                            <td class="px-20 py-4">
                                Febrian Daffa (ketua kelompok)
                            </td>
                            <td class="px-12 py-4 text-center font-semibold">
                                22/1/2024
                            </td>
                        </tr>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-8 py-4 text-center">
                                2
                            </th>
                            <td class="px-28 py-4">
                                Mencari biksu tong
                            </td>
                            <td class="px-20 py-4">
                                Febrian Daffa (ketua kelompok)
                            </td>
                            <td class="px-12 py-4 text-center font-semibold">
                                22/1/2024
                            </td>
                        </tr>
                        <tr class="bg-white dark:border-gray-700">
                            <th scope="row" class="px-8 py-4 text-center">
                                3
                            </th>
                            <td class="px-28 py-4">
                                Mencari biksu tong
                            </td>
                            <td class="px-20 py-4">
                                Febrian Daffa (ketua kelompok)
                            </td>
                            <td class="px-12 py-4 text-center font-semibold">
                                22/1/2024
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
@endsection
