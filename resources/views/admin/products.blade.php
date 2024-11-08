@extends('admin.layout')

@section('admincontent')

<!-- Header Section -->
<div class="flex justify-between items-center">
    <h1 class="text-3xl font-semibold text-gray-800">Welcome Back, Admin!</h1>
</div>

<!-- Products Section -->
<div id="products" class="bg-white p-6 rounded-xl shadow-md">
    <h3 class="text-xl font-bold text-gray-700 mb-4">Products</h3>

    <!-- Add New Product Form -->
    <div class="mb-6">

        <form action="#" method="POST" class="space-y-4">
            <div class="flex justify-between items-center">
                <label for="product-name" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Title :</label>
                <input type="text" id="product-name" name="product-name" class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter product title" required>
            </div>
            <div class="flex justify-between items-center">
                <label for="product-name" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Price :</label>
                <input type="text" id="product-name" name="product-name" class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter product price" required>
            </div>
            <div class="flex justify-between items-center">
                <label for="product-name" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Validity  :</label>
                <input type="text" id="product-name" name="product-name" class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter product validity" required>
            </div>
            <div class="flex justify-between items-center">
                <label for="product-name" class=" text-md w-[15%] text-center font-medium text-gray-700">Product Image link  :</label>
                <input type="text" id="product-name" name="product-name" class="mt-1  w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter product img link" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Add Product</button>
            </div>
        </form>

    </div>

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
                <!-- Example Product Row 1 -->
                <tr class="border-t border-gray-200">
                    <td class="py-4 px-4 text-sm text-gray-700">Smartphone</td>
                    <td class="py-4 px-4 text-sm text-gray-700">$699</td>
                    <td class="py-4 px-4 text-sm text-gray-700">120</td>
                    <td class="py-4 px-4 text-sm text-gray-700">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwRLzFuwM-ZPtZhp2YSX_swTk8SyUZvLRwHw&s" alt="" class="w-14 h-14">
                    </td>
                    <td class="py-4 px-4 text-sm">
                        <button class="text-blue-600 hover:text-blue-800">Edit</button>
                        <button class="ml-4 text-green-600 hover:text-green-800">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection