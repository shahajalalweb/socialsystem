@extends('admin.layout')

@section('admincontent')

            <!-- Header Section -->
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome Back, Admin!</h1>
                <div class="flex items-center space-x-4">
                    <button class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md">Logout</button>
                    <button class="text-white bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded-md">Profile</button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">Total Users</h3>
                        <p class="text-2xl font-bold text-blue-600">1,234</p>
                    </div>
                    <div class="text-blue-600 text-4xl">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">Revenue</h3>
                        <p class="text-2xl font-bold text-green-600">$12,340</p>
                    </div>
                    <div class="text-green-600 text-4xl">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">Orders</h3>
                        <p class="text-2xl font-bold text-yellow-600">56</p>
                    </div>
                    <div class="text-yellow-600 text-4xl">
                        <i class="fas fa-box-open"></i>
                    </div>
                </div>
            </div>

            <!-- Line Chart Section (Example) -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Sales Overview</h3>
                <div class="h-64 bg-gray-200 rounded-xl"></div> <!-- Placeholder for chart -->
            </div>

            <!-- Recent Activity -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Recent Activity</h3>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-4">
                        <div class="bg-blue-200 text-blue-800 p-2 rounded-full">
                            <i class="fas fa-plus"></i>
                        </div>
                        <p class="text-gray-700">New product added: Smartwatch</p>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div class="bg-green-200 text-green-800 p-2 rounded-full">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Order #234 completed successfully</p>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div class="bg-yellow-200 text-yellow-800 p-2 rounded-full">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <p class="text-gray-700">Product review pending approval</p>
                    </li>
                </ul>
            </div>

            
@endsection