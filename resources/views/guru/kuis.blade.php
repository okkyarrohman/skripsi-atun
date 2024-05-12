@extends('layouts.master')
@section('content')
<style>
    .bg-orange{ background: #FB8A3C;};
</style>
    <!--absen-->
    <div class="bg-white p-7 m-10 flex-col justify-center items-start gap-9 inline-flex">

        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ms-auto dark:border-gray-600">
            <button type="button" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 ms-auto px-8 py-4 h-14 gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve"><rect fill="none" height="24" width="24"/><line fill="none" stroke="#F6F7F9" stroke-miterlimit="10" stroke-width="4" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="#F6F7F9" stroke-miterlimit="10" stroke-width="4" x1="25" x2="25" y1="9" y2="41"/></svg>
                Tambah Kuis
                </button>
        </div>
        <div class="w-[1021px] h-[226px] py-11 flex-col justify-center items-center gap-2.5 inline-flex">
            <div class="w-[84px] h-[84px] justify-center items-center inline-flex">
            <div class="w-[84px] h-[84px] relative">
                <svg width="85" height="84" viewBox="0 0 85 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.5 48.125C41.065 48.125 39.875 46.935 39.875 45.5V27.125C39.875 25.69 41.065 24.5 42.5 24.5C43.935 24.5 45.125 25.69 45.125 27.125V45.5C45.125 46.935 43.935 48.125 42.5 48.125Z" fill="#292D32"/>
                    <path d="M42.5 60.3758C41.555 60.3758 40.6799 60.0258 40.0149 59.3608C39.6999 59.0108 39.455 58.6258 39.245 58.2058C39.07 57.7858 39 57.3308 39 56.8758C39 55.9658 39.3849 55.0557 40.0149 54.3907C41.3099 53.0957 43.6901 53.0957 44.9851 54.3907C45.6151 55.0557 46 55.9658 46 56.8758C46 57.3308 45.8949 57.7858 45.7199 58.2058C45.5449 58.6258 45.3001 59.0108 44.9851 59.3608C44.3201 60.0258 43.445 60.3758 42.5 60.3758Z" fill="#292D32"/>
                    <path d="M42.5006 79.6253C40.1556 79.6253 37.7756 79.0303 35.6756 77.8053L14.8856 65.8003C10.6856 63.3503 8.06055 58.8353 8.06055 53.9703V30.0304C8.06055 25.1654 10.6856 20.6504 14.8856 18.2004L35.6756 6.19541C39.8756 3.74541 45.0907 3.74541 49.3257 6.19541L70.1157 18.2004C74.3157 20.6504 76.9407 25.1654 76.9407 30.0304V53.9703C76.9407 58.8353 74.3157 63.3503 70.1157 65.8003L49.3257 77.8053C47.2257 79.0303 44.8456 79.6253 42.5006 79.6253ZM42.5006 9.62534C41.0656 9.62534 39.5956 10.0104 38.3006 10.7454L17.5106 22.7503C14.9206 24.2553 13.3105 27.0204 13.3105 30.0304V53.9703C13.3105 56.9453 14.9206 59.7453 17.5106 61.2503L38.3006 73.2553C40.8906 74.7603 44.1107 74.7603 46.6657 73.2553L67.4557 61.2503C70.0457 59.7453 71.6557 56.9803 71.6557 53.9703V30.0304C71.6557 27.0554 70.0457 24.2553 67.4557 22.7503L46.6657 10.7454C45.4057 10.0104 43.9356 9.62534 42.5006 9.62534Z" fill="#292D32"/>
                    </svg>

            </div>
            </div>
            <div class="justify-center items-start gap-2.5 inline-flex">
            <div class="text-center text-slate-400 text-[40px] font-semibold  leading-[44px]">Belum Terdapat Kuis</div>
            </div>
            </div>
        </div>
@endsection
