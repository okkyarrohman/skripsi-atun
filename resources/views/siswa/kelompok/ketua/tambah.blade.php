@extends('partial.main')

@section('content')
    <div class="px-4 rounded-lg mt-14">
        <div class="w-full p-7 bg-white rounded-xl flex-col items-start gap-2 inline-flex">
            <h1 class="text-2xl font-bold">
                Tugas Kelompok
            </h1>
            <form class="w-full items-start">
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Tugas</label>
                    <input type="text" id="large-input"
                        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="Anggota" class="block mb-2 text-sm font-medium text-gray-900">Anggota</label>
                    <select id="Anggota" name="Anggota"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select an option</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Deadline</label>
                    <input type="date" id="task-date"
                        class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                        required />
                </div>
                <div class="pt-2 flex justify-end w-full">
                    <a href="{{ route('siswa.kelompok.ketua.detail') }}"
                        class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                        Tambah Tugas
                    </a>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
