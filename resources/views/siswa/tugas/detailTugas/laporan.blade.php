@extends('siswa.tugas.show')

@section('section')
<form action="{{ route('tugas.store') }}" method="POST" enctype="multipart/form-data" class="w-full">
    @csrf
    @method('POST')
    <div class="w-full flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Berkas Presentasi</div>
        <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <label for="file-input-presentasi"
                class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300 overflow-hidden cursor-pointer">
                <div class="px-4 py-2.5 bg-gray-100">
                    <div class="text-zinc-800 text-base font-medium leading-snug">Upload File</div>
                    <input id="file-input-presentasi" name="file_presentasi" type="file" class="hidden"
                        value="{{ old('file_presentasi') }}" />
                </div>
                <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight" id="file-name-presentasi">
                    Belum ada file yang dipilih
                </div>
            </label>
        </div>
    </div>
    <div class="h-[94px] w-full flex flex-col justify-start items-start gap-2">
        <div class="text-zinc-800 text-lg font-medium leading-relaxed">Laporan</div>
        <div class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300">
            <label for="file-input-laporan"
                class="flex-shrink-0 w-full flex items-center gap-2.5 bg-neutral-50 rounded-lg border border-gray-300 overflow-hidden cursor-pointer">
                <div class="px-4 py-2.5 bg-gray-100">
                    <div class="text-zinc-800 text-base font-medium leading-snug">Upload File</div>
                    <input id="file-input-laporan" name="file_laporan" type="file" class="hidden"
                        value="{{ old('file_laporan') }}" />
                </div>
                <div class="flex-grow text-zinc-800 text-base font-normal leading-snug tracking-tight" id="file-name-laporan">
                    Belum ada file yang dipilih
                </div>
            </label>
        </div>
    </div>
    <div class="flex justify-between w-full">
        <div class="pt-2 flex justify-start">
            <a href="{{ route('tugas.daftarTugas', $tugases->id) }}"
                class="text-custom-orange bg-white border-2 border-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                Sebelumnya
            </a>
        </div>
        <div class="pt-2 flex justify-end">
            <a href="{{ route('tugas.feedback', $tugases->id) }}"
                class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                Selanjutnya
            </a>
        </div>
    </div>
    <button type="Submit"
        class="text-white bg-custom-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center justify-center w-fit mt-6 mx-auto">Simpan</button>
</form>

<script>
    var filePresentasiInput = document.getElementById('file-input-presentasi');
    var fileLaporanInput = document.getElementById('file-input-laporan');

    filePresentasiInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        var fileLabel = document.getElementById('file-name-presentasi');
        fileLabel.textContent = fileName;
    });
    fileLaporanInput.addEventListener('change', function() {
        var fileName = this.files[0].name;
        var fileLabel = document.getElementById('file-name-laporan');
        fileLabel.textContent = fileName;
    });
</script>
@endsection
