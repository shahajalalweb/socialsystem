    <!-- Footer Section -->
    <footer class="fixed bottom-0 w-full h-20 bg-gray-50 flex items-center justify-center border-t shadow z-50">
        <div class="flex items-center justify-between w-full h-full p-5">
            <!-- Home Link (with conditional class) -->
            <div class="flex items-center justify-center flex-col {{ request()->routeIs('home') ? 'text-blue-400' : '' }}">
                <i class="fa-solid fa-house text-2xl"></i>
                <p class="font-bold">হোম পেজ</p>
            </div>

            <!-- Product Link -->
            <div class="flex items-center justify-center flex-col {{ request()->routeIs('product') ? 'text-blue-400' : '' }}">
                <i class="fa-solid fa-clipboard text-2xl"></i>
                <p class="font-bold">পণ্য</p>
            </div>

            <!-- Team Link -->
            <div class="flex items-center justify-center flex-col {{ request()->routeIs('team') ? 'text-blue-400' : '' }}">
                <i class="fa-solid fa-users text-2xl"></i>
                <p class="font-bold">দল</p>
            </div>

            <!-- User Link -->
            <div class="flex items-center justify-center flex-col {{ request()->routeIs('profile') ? 'text-blue-400' : '' }}">
                <i class="fa-solid fa-user text-2xl"></i>
                <p class="font-bold">আমার</p>
            </div>
        </div>

    </footer>