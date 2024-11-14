@extends('layout')

@section('content')

<div class="flex items-center justify-center flex-col m-3 mb-24">

    <!-- card design  -->
    @foreach ($products as $product)

    <div class="w-full rounded-lg overflow-hidden shadow border border-gray-200 m-5">
        <div class="text-start py-4">
            <h2 class="text-md font-bold text-gray-800 ml-4">{{ $product['title']}}</h2>
        </div>
        <!--  in card  -->
        <div class="px-4 flex w-full h-full justify-between items-center">
            <!-- text part -->
            <div class="w-1/2 h-full mr-5 ">
                <div class="flex justify-between items-center">
                    <p> মূল্যঃ </p>
                    <p>{{ $product['price']}} টাকা </p>
                </div>
                <div class="flex justify-between items-center">
                    <p> চক্রঃ </p>
                    <p>{{ $product['validity']}} দিন</p>
                </div>
                <div class="flex justify-between items-center">
                    <p> দৈনিক লাভঃ </p>
                    <p>{{ $product['price'] * 0.10 }} টাকা</p>
                </div>
                <div class="flex justify-between items-center">
                    <p> মোট লাভঃ </p>
                    <p>{{ $product['price'] * $product['validity'] * 0.10}} টাকা </p>
                </div>
            </div>
            <!-- img part -->
            <div class="w-1/2 h-full">
                <img src="{{ $product['imgLink']}}" alt="" class="w-full h-full object-cover rounded-md">
            </div>
        </div>

        <div class="bg-gray-50 p-4 text-center">
            <a href="{{ route('showProduct', $product->id)}}" class="bg-blue-600 text-white w-full text-center  py-1 px-2 rounded-lg hover:bg-blue-700 transition">আরো জানুন</a>
        </div>
    </div>
    @endforeach

</div>

@endsection
