<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Demo</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center flex-col h-full bg-gray-100">
    <header class="h-16 w-full bg-gray-200 flex items-center justify-center font-bold relative">
        <!-- Back button with icon -->
        <a href="{{ route('home') }}" class="absolute left-4 text-gray-700">
            <i class="fas fa-arrow-left"></i> <!-- Font Awesome back icon -->
        </a>

        <!-- Header text -->
        <h2>পণ্যের বিবরণ</h2>
    </header>

    <div class="max-w-3xl mx-auto my-4 p-6 bg-white rounded-lg shadow-lg border border-gray-200 space-y-8">
        <!-- Product Title -->
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-6">{{ $showProduct['title'] }}</h2>

        <!-- Image Section -->
        <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg">
            <img src="{{ $showProduct['imgLink'] }}" alt="{{ $showProduct['title'] }}"
                class="w-full h-full object-cover">
        </div>

        <!-- Product Details -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="p-4 bg-blue-50 rounded-lg border border-blue-200 shadow flex justify-between items-center">
                <p class="text-gray-600 font-semibold">মূল্য :</p>
                <p class="text-lg text-gray-900 font-bold">{{ $showProduct['price'] }} টাকা</p>
            </div>

            <div class="p-4 bg-green-50 rounded-lg border border-green-200 shadow flex justify-between items-center">
                <p class="text-gray-600 font-semibold">চক্র :</p>
                <p class="text-lg text-gray-900 font-bold">{{ $showProduct['validity'] }} দিন</p>
            </div>

            <div class="p-4 bg-yellow-50 rounded-lg border border-yellow-200 shadow flex justify-between items-center">
                <p class="text-gray-600 font-semibold">দৈনিক লাভ :</p>
                <p class="text-lg text-gray-900 font-bold">{{ $showProduct['price'] * 0.1 }} টাকা</p>
            </div>

            <div class="p-4 bg-red-50 rounded-lg border border-red-200 shadow flex justify-between items-center">
                <p class="text-gray-600 font-semibold">মোট লাভ :</p>
                <p class="text-lg text-gray-900 font-bold">{{ $showProduct['price'] * $showProduct['validity'] * 0.1 }}
                    টাকা</p>
            </div>
        </div>

        <!-- Product Buy Section Form -->
        <form action="{{ route('payment') }}" method="POST"
            class="p-5 bg-gray-50 rounded-lg border border-gray-200 flex flex-col items-center justify-center space-y-4">
            @csrf <!-- Include CSRF token for security if using Laravel -->

            <h3 class="text-xl font-semibold text-gray-700">পণ্যের কিনুন:</h3>
            <p class="text-gray-600">পেমেন্ট পদ্ধতি নির্বাচন করুন এবং ক্রয় করুন</p>

            <!-- Payment Method Dropdown -->
            <div class="w-full max-w-xs">
                <label for="paymentMethod" class="block text-gray-700 font-medium mb-2">পেমেন্ট পদ্ধতি:</label>
                <select id="paymentMethod" name="paymentMethod" class="w-full p-2 border border-gray-300 rounded-lg">
                    @foreach ($paymentMethods as $method)
                        <option value="{{$method['id']}}">{{$method['method']}}</option>
                    @endforeach

                </select>
            </div>

            <!-- Buy Button -->
            <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
                কিনুন
            </button>
        </form>

        <!-- Back to Products Button -->
        <div class="text-center">
            <a href="{{ route('home') }}"
                class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition-all">
                প্রোডাক্ট তালিকায় ফিরে যান
            </a>
        </div>
    </div>



</body>


</html>
