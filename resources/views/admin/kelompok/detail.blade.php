@extends('partial.main')

@section('content')
<div class="px-4 rounded-lg">
        <div class="w-full items-center py-7">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.kelompok.kelompok') }}"
                            class="inline-flex items-center text-lg font-medium text-gray-500">
                            Kelompok
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-lg font-medium text-custom-orange md:ms-2">Detail Kelompok</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
<div class="flex items-center justify-center mb-4 rounded-xl bg-white border p-7">
    <table class="w-full text-base text-left rtl:text-right text-black">
        <thead class="bg-white border-b border-gray-400">
            <tr>
                <th scope="col" class="px-8 py-3 text-center">
                    No Absen
                </th>
                <th scope="col" class="px-28 py-3">
                    Nama Anggota
                </th>
                <th scope="col" class="px-20 py-3">
                    Waktu Belajar
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    1
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa 
                </td>
                <td class="px-20 py-4">
                    0 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    2
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    3
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    4
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    5
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    6
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
            <tr class="bg-white border-b border-black dark:border-gray-700">
                <th scope="row" class="px-8 py-4 text-center">
                    7   
                </th>
                <td class="px-28 py-4">
                    Febrian Daffa Febrian DaffaFebrian Daffa
                </td>
                <td class="px-20 py-4">
                    30 Menit
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection