        <!-- Sidebar -->
        <div class="bg-blue-800 text-white w-64 p-5 space-y-6">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white">Dashboard</h2>
            </div>

            <!-- Sidebar Menu -->
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-lg hover:text-blue-400">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-lg hover:text-blue-400 {{ request()->routeIs('adminProduct') ? 'text-blue-400' : '' }}">
                            <i class="fas fa-box"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-lg hover:text-blue-400">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-lg hover:text-blue-400">
                            <i class="fas fa-chart-line"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-lg hover:text-blue-400">
                            <i class="fas fa-cogs"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>