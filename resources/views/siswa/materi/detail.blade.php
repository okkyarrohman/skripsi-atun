@extends('partial.main')

@section('content')
    <div class="px-4 rounded-lg mt-14">
        <div class="flex-col items-center justify-center mb-4 rounded-xl bg-gray-50 border p-7">
            <h1 class="text-zinc-800 text-xl font-semibold leading-loose">Ini judul Figma ipsum component variant main laye
            </h1>
            <h2 class="text-zinc-800 text-lg font-medium leading-relaxed">Deskripsi</h2>
            <h3 class="w-[1029px] h-[167px] color-grey text-xl font-normal font-['Poppins'] leading-7">Figma ipsum component
                variant main layer. Effect boolean scrolling community plugin vertical select scale comment italic. Shadow
                edit team text list outline frame group bullet. Auto figma device boolean hand. Vector share bold background
                style layout. Bold flatten boolean comment ellipse comment. Ipsum draft move ipsum invite polygon shadow.
                Team outline draft flatten scrolling bold horizontal object shadow. Subtract union slice vector bullet
                group. Mask edit content overflow plugin invite layout layout content stroke.</h3>
            <div class="w-full pt-4 items-center justify-center flex">
                <iframe src ="{{ asset('/laraview/#../pdf/test.pdf') }}" width="1000px" height="600px"></iframe>
            </div>
        </div>
    </div>
@endsection
