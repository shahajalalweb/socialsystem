@extends('admin.layout')

@section('admincontent')
    <!-- Header Section -->
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold text-gray-800">Welcome Back, Admin!</h1>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @elseif (session('deleted'))
        <div class="bg-red-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('deleted') }}
        </div>
    @endif


    <!-- Products Section -->
    <div id="products" class="bg-white p-6 rounded-xl shadow-md">


        <h3 class="text-xl font-bold text-gray-700 mb-4">Payment Method Add</h3>
        <!-- Add New Product Form -->
        <div class="mb-6">
            <form action="{{ route('createMethod') }}" method="POST" class="space-y-4">
                @csrf

                {{-- method name  --}}
                <div class="flex justify-between items-center">
                    <label for="method" class=" text-md w-[15%] text-center font-medium text-gray-700">Payment Method
                        :</label>
                    <input type="text" id="method" name="method"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter payment method" required>
                </div>
                {{-- method number  --}}
                <div class="flex justify-between items-center">
                    <label for="number" class=" text-md w-[15%] text-center font-medium text-gray-700">Payment Number
                        :</label>
                    <input type="number" id="number" name="number"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter payment number" required>
                </div>

                <div class="flex justify-between items-center">
                    <label for="logo" class=" text-md w-[15%] text-center font-medium text-gray-700">Method Logo
                        :</label>
                    <input type="text" id="logo" name="logo"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter method logo link" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Add
                        Payment Method</button>
                </div>
            </form>
        </div>



        <!-- Product Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Method</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Number</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Logo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paymentMethods as $method)
                        <!-- Example Product Row 1 -->
                        <tr class="border-t border-gray-200">
                            <td class="py-4 px-4 text-sm text-gray-700">{{ $method['method'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-700">{{ $method['number'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-700">
                                <img src="{{ $method['logo'] }}" alt="" class="w-14 h-14">
                            </td>
                            <td class="py-4 px-4 text-sm">
                                <a href="{{ route('methodDelte', $method['id']) }}"
                                    class="ml-4 text-green-600 hover:text-green-800">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
