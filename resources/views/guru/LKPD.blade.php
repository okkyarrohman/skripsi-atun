@extends('layouts.master')
@section('content')
<style>
    .bg-orange{ background: #FB8A3C;};
</style>
    <!--absen-->
    <div class="bg-white p-7 m-10">

        <div class="flex items-center justify-between p-4 md:p-5 rounded-t ms-auto dark:border-gray-600 mb-10">
          <a href="guru/Tugas/tambah-tugas" class="ms-auto py-4 h-14">
            <button type="button" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 ms-auto px-8 py-4 h-14 gap-3">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve"><rect fill="none" height="24" width="24"/><line fill="none" stroke="#F6F7F9" stroke-miterlimit="10" stroke-width="4" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="#F6F7F9" stroke-miterlimit="10" stroke-width="4" x1="25" x2="25" y1="9" y2="41"/></svg>
               Tambah Kuis
               </button>
          </a>
        </div>
        <div class="overflow-x-auto  w-full">
           <table class="table-auto w-full">
              <thead class="border-b">
                 <tr class="">
                    <th class="text-center p-4 font-medium">
                       No
                    </th>
                    <th class="text-left p-4 font-medium">
                       Judul Tugas
                    </th>
                    <th class="text-left p-4 font-medium">
                       Tenggat Waktu
                    </th>
                    <th class="text-center p-4 font-medium">
                        Hasil
                     </th>
                     <th class="text-left p-4 font-medium">
                        Aksi
                     </th>
                 </tr>
              </thead>
              <tbody>
                 <tr class="border-b hover:bg-gray-50">
                    <td class="p-4 text-center">
                       1
                    </td>
                    <td class="p-4">
                       basic@example.com
                    </td>
                    <td class="p-4">
                        22/12/2222
                     </td>
                    <td class="p-4 text-center">
                        <div class="w-[118px] h-9 px-5 py-2 bg-orange rounded-lg justify-center items-center gap-2 inline-flex">
                            <div class="text-white text-sm font-medium  leading-tight">Lihat Detail</div>
                        </div>
                     </td>
                     <td class="p-4">
                        <div class="w-[34px] h-[34px] p-2 bg-orange-50 rounded-md border border-orange-400 justify-start items-start gap-2.5 inline-flex">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2498 5.0476C16.2348 5.0476 16.2123 5.0476 16.1898 5.0476C12.2223 4.6501 8.26225 4.5001 4.33975 4.8976L2.80975 5.0476C2.49475 5.0776 2.21725 4.8526 2.18725 4.5376C2.15725 4.2226 2.38225 3.9526 2.68975 3.9226L4.21975 3.7726C8.20975 3.3676 12.2523 3.5251 16.3023 3.9226C16.6098 3.9526 16.8348 4.2301 16.8048 4.5376C16.7823 4.8301 16.5348 5.0476 16.2498 5.0476Z" fill="#FB8A3C"/>
                                <path d="M6.87458 4.29C6.84458 4.29 6.81458 4.29 6.77708 4.2825C6.47708 4.23 6.26708 3.9375 6.31958 3.6375L6.48458 2.655C6.60458 1.935 6.76958 0.9375 8.51708 0.9375H10.4821C12.2371 0.9375 12.4021 1.9725 12.5146 2.6625L12.6796 3.6375C12.7321 3.945 12.5221 4.2375 12.2221 4.2825C11.9146 4.335 11.6221 4.125 11.5771 3.825L11.4121 2.85C11.3071 2.1975 11.2846 2.07 10.4896 2.07H8.52458C7.72958 2.07 7.71458 2.175 7.60208 2.8425L7.42958 3.8175C7.38458 4.095 7.14458 4.29 6.87458 4.29Z" fill="#FB8A3C"/>
                                <path d="M11.9078 17.0624H7.09279C4.47529 17.0624 4.37029 15.6149 4.28779 14.4449L3.80029 6.89243C3.77779 6.58493 4.01779 6.31493 4.32529 6.29243C4.64029 6.27743 4.90279 6.50993 4.92529 6.81743L5.41279 14.3699C5.49529 15.5099 5.52529 15.9374 7.09279 15.9374H11.9078C13.4828 15.9374 13.5128 15.5099 13.5878 14.3699L14.0753 6.81743C14.0978 6.50993 14.3678 6.27743 14.6753 6.29243C14.9828 6.31493 15.2228 6.57743 15.2003 6.89243L14.7128 14.4449C14.6303 15.6149 14.5253 17.0624 11.9078 17.0624Z" fill="#FB8A3C"/>
                                <path d="M10.7446 12.9375H8.24707C7.93957 12.9375 7.68457 12.6825 7.68457 12.375C7.68457 12.0675 7.93957 11.8125 8.24707 11.8125H10.7446C11.0521 11.8125 11.3071 12.0675 11.3071 12.375C11.3071 12.6825 11.0521 12.9375 10.7446 12.9375Z" fill="#FB8A3C"/>
                                <path d="M11.375 9.9375H7.625C7.3175 9.9375 7.0625 9.6825 7.0625 9.375C7.0625 9.0675 7.3175 8.8125 7.625 8.8125H11.375C11.6825 8.8125 11.9375 9.0675 11.9375 9.375C11.9375 9.6825 11.6825 9.9375 11.375 9.9375Z" fill="#FB8A3C"/>
                                </svg>

                        </div>
                     </td>
                 </tr>
                 <tr class="border-b hover:bg-gray-50">
                    <td class="p-4 text-center  ">
                      2
                    </td>
                    <td class="p-4">
                       admin@example.com
                    </td>
                    <td class="p-4">
                        22/12/2222
                     </td>
                    <td class="p-4 text-center">
                        <div class="w-[118px] h-9 px-5 py-2 bg-orange rounded-lg justify-center items-center gap-2 inline-flex">
                            <div class="text-white text-sm font-medium  leading-tight">Lihat Detail</div>
                        </div>
                     </td>
                     <td class="p-4">
                        <div class="w-[34px] h-[34px] p-2 bg-orange-50 rounded-md border border-orange-400 justify-start items-start gap-2.5 inline-flex">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2498 5.0476C16.2348 5.0476 16.2123 5.0476 16.1898 5.0476C12.2223 4.6501 8.26225 4.5001 4.33975 4.8976L2.80975 5.0476C2.49475 5.0776 2.21725 4.8526 2.18725 4.5376C2.15725 4.2226 2.38225 3.9526 2.68975 3.9226L4.21975 3.7726C8.20975 3.3676 12.2523 3.5251 16.3023 3.9226C16.6098 3.9526 16.8348 4.2301 16.8048 4.5376C16.7823 4.8301 16.5348 5.0476 16.2498 5.0476Z" fill="#FB8A3C"/>
                                <path d="M6.87458 4.29C6.84458 4.29 6.81458 4.29 6.77708 4.2825C6.47708 4.23 6.26708 3.9375 6.31958 3.6375L6.48458 2.655C6.60458 1.935 6.76958 0.9375 8.51708 0.9375H10.4821C12.2371 0.9375 12.4021 1.9725 12.5146 2.6625L12.6796 3.6375C12.7321 3.945 12.5221 4.2375 12.2221 4.2825C11.9146 4.335 11.6221 4.125 11.5771 3.825L11.4121 2.85C11.3071 2.1975 11.2846 2.07 10.4896 2.07H8.52458C7.72958 2.07 7.71458 2.175 7.60208 2.8425L7.42958 3.8175C7.38458 4.095 7.14458 4.29 6.87458 4.29Z" fill="#FB8A3C"/>
                                <path d="M11.9078 17.0624H7.09279C4.47529 17.0624 4.37029 15.6149 4.28779 14.4449L3.80029 6.89243C3.77779 6.58493 4.01779 6.31493 4.32529 6.29243C4.64029 6.27743 4.90279 6.50993 4.92529 6.81743L5.41279 14.3699C5.49529 15.5099 5.52529 15.9374 7.09279 15.9374H11.9078C13.4828 15.9374 13.5128 15.5099 13.5878 14.3699L14.0753 6.81743C14.0978 6.50993 14.3678 6.27743 14.6753 6.29243C14.9828 6.31493 15.2228 6.57743 15.2003 6.89243L14.7128 14.4449C14.6303 15.6149 14.5253 17.0624 11.9078 17.0624Z" fill="#FB8A3C"/>
                                <path d="M10.7446 12.9375H8.24707C7.93957 12.9375 7.68457 12.6825 7.68457 12.375C7.68457 12.0675 7.93957 11.8125 8.24707 11.8125H10.7446C11.0521 11.8125 11.3071 12.0675 11.3071 12.375C11.3071 12.6825 11.0521 12.9375 10.7446 12.9375Z" fill="#FB8A3C"/>
                                <path d="M11.375 9.9375H7.625C7.3175 9.9375 7.0625 9.6825 7.0625 9.375C7.0625 9.0675 7.3175 8.8125 7.625 8.8125H11.375C11.6825 8.8125 11.9375 9.0675 11.9375 9.375C11.9375 9.6825 11.6825 9.9375 11.375 9.9375Z" fill="#FB8A3C"/>
                                </svg>

                        </div>
                     </td>
                 </tr>
              </tbody>
           </table>
        </div>
        </div>
@endsection
