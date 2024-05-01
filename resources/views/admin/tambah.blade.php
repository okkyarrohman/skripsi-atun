@extends('partial.main')

@section('content')
<div class="px-4 rounded-lg mt-14">
    <div class="w-full p-7 bg-white rounded-xl flex-col items-start gap-9 inline-flex">
        <h1 class="text-2xl font-bold">
            Daftar Siswa
        </h1> 
        <form class="w-full items-start">
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Depan Siswa</label>
              <input type="email" id="email" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Belakang Siswa</label>
              <input type="password" id="password" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required />
            </div>
            <div class="mb-5">
              <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">Kelas</label>
              <input type="password" id="repeat-password" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required />
            </div>
            <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">No Absen</label>
                <input type="password" id="repeat-password" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required />
              </div>
              <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">Email Siswa</label>
                <input type="password" id="repeat-password" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required />
              </div>
              <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" id="repeat-password" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" required />
              </div>
              <div class="mb-5">
                <label for="photo-upload" class="block mb-2 text-sm font-medium text-gray-900">Upload Foto</label>
                <input type="file" id="photo-upload" accept="image/*" class="justify-center px-2 md:h-12 w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-3" required />
            </div>
            <div class="pt-2 flex justify-end w-full">
            <a href="{{ route('admin.tambah') }}"
                    class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                    Tambah Data
                </a>
            </div>
        </form>
    </div>
</div>
@endsection