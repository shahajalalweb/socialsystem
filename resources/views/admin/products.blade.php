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
    @elseif (session('updated'))
        <div class="bg-yellow-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('updated') }}
        </div>
    @endif


    <!-- Products Section -->
    <div id="products" class="bg-white p-6 rounded-xl shadow-md">
        @if (isset($editProduct))

        <h3 class="text-xl font-bold text-gray-700 mb-4">Edit Products</h3>
        <!-- Add New Product Form -->
        <div class="mb-6">
            <form action="{{ route('productUpdate', $editProduct->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="flex justify-between items-center">
                    <label for="title" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Title
                        :</label>
                    <input type="text" id="title" name="title"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        value="{{ $editProduct->title}}" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="price" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Price
                        :</label>
                    <input type="text" id="price" name="price"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        value="{{ $editProduct->price}}" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="validity" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Validity
                        :</label>
                    <input type="text" id="valitidy" name="validity"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        value="{{ $editProduct->validity}}" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="imgLink" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Image link
                        :</label>
                    <input type="text" id="imgLink" name="imgLink"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        value="{{ $editProduct->imgLink}}" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Update
                        Product</button>
                </div>
            </form>
        </div>
        @else

        <h3 class="text-xl font-bold text-gray-700 mb-4">Add Products</h3>
        <!-- Add New Product Form -->
        <div class="mb-6">
            <form action="{{ route('createProduct') }}" method="POST" class="space-y-4">
                @csrf

                <div class="flex justify-between items-center">
                    <label for="title" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Title
                        :</label>
                    <input type="text" id="title" name="title"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter product title" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="price" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Price
                        :</label>
                    <input type="text" id="price" name="price"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter product price" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="validity" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Validity
                        :</label>
                    <input type="text" id="valitidy" name="validity"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter product validity" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="imgLink" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Image link
                        :</label>
                    <input type="text" id="imgLink" name="imgLink"
                        class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="Enter product img link" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Add
                        Product</button>
                </div>
            </form>
        </div>
        @endif


        <!-- Product Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500"> Title</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Price</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Validity</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Image</th>
                        <th class="py-3 px-4 text-left text-sm font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <!-- Example Product Row 1 -->
                        <tr class="border-t border-gray-200">
                            <td class="py-4 px-4 text-sm text-gray-700">{{ $product['title'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-700">{{ $product['price'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-700">{{ $product['validity'] }}</td>
                            <td class="py-4 px-4 text-sm text-gray-700">
                                <img src="{{ $product['imgLink'] }}" alt="" class="w-14 h-14">
                            </td>
                            <td class="py-4 px-4 text-sm">
                                <a href="{{ route('productEdit', $product['id']) }}"
                                    class="text-blue-600 hover:text-blue-800">Edit</a>
                                <a href="{{ route('productDelete', $product['id']) }}"
                                    class="ml-4 text-green-600 hover:text-green-800">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="w-full flex flex-row justify-center py-6">
                <!-- Pagination links using Laravel's default styling -->
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
