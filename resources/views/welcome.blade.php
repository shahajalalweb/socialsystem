@extends('layout')

@section('content')

<div class="flex items-center justify-center flex-col m-3">

    <!-- card design  -->
    <div class="w-full rounded-lg overflow-hidden shadow border border-gray-200 m-5">
        <div class="text-start py-4">
            <h2 class="text-md font-bold text-gray-800 ml-5">গাছ লাগান পরিবেশ বাচান</h2>
        </div>
        <!--  in card  -->
        <div class="px-4 flex w-full h-full justify-between items-center">
            <!-- text part -->
            <div class="w-1/2 h-full mr-5 ">
                <div class="flex justify-between items-center">
                    <p> মূল্য </p>
                    <p>1324</p>
                </div>
                <div class="flex justify-between items-center">
                    <p> চক্র </p>
                    <p>1324</p>
                </div>
                <div class="flex justify-between items-center">
                    <p> দৈনিক লাভ </p>
                    <p>1324</p>
                </div>
                <div class="flex justify-between items-center">
                    <p> মোট লাভ </p>
                    <p>1324</p>
                </div>
            </div>
            <!-- img part -->
            <div class="w-1/2 h-full">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ0jgOLtKTA0Y3_PkSbFW4aPEjPrZbCAHHHQ&s" alt="" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="bg-gray-50 p-4 text-center">
            <button class="bg-blue-600 text-white w-full text-center  py-1 px-2 rounded-lg hover:bg-blue-700 transition">আরো জানুন</button>
        </div>
    </div>

</div>

@endsection