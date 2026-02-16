<nav class="fixed w-full bg-white shadow-sm z-50">
        <div class="max-w-full mx-auto px-4 sm:px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Left: Menu Button for Mobile & Logo -->
                <div class="flex items-center space-x-4">
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-gray-600 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5">
                            </path>
                        </svg>
                        <span class="text-2xl font-semibold text-gray-900 hidden md:inline">Vet Dashboard</span>
                        <span class="text-2xl font-semibold text-gray-900 md:hidden">VD</span>
                    </div>
                </div>

                <!-- Center: Navigation Links for Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-blue-600 border-b-2 border-blue-600 transition font-medium">
                        <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                        <i class="fas fa-calendar-check mr-2"></i>Appointments
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                        <i class="fas fa-paw mr-2"></i>Patients
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                        <i class="fas fa-prescription-bottle-alt mr-2"></i>Prescriptions
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                        <i class="fas fa-chart-bar mr-2"></i>Reports
                    </a>
                </div>

                <!-- Right: User Profile & Notifications -->
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <div class="relative">
                        <button class="text-gray-600 hover:text-blue-600 relative">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                        </button>
                    </div>

                    <!-- Messages -->
                    <div class="relative">
                        <button class="text-gray-600 hover:text-blue-600 relative">
                            <i class="fas fa-envelope text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">5</span>
                        </button>
                    </div>

                    <!-- User Profile -->
                    <div class="relative">
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-blue-600">
                                <img src="https://ui-avatars.com/api/?name=Dr+Smith&background=3B82F6&color=fff&bold=true" 
                                     alt="Veterinarian" class="w-full h-full object-cover">
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-semibold text-gray-900">Dr. Smith</p>
                                <p class="text-xs text-gray-500">Veterinarian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar for Desktop -->
    <div class="sidebar fixed left-0 top-0 h-full w-64 bg-white shadow-lg z-40 pt-20 hidden md:block">
        <!-- Sidebar Header -->
        <div class="px-6 py-4 border-b">
            <h2 class="text-lg font-bold text-gray-900">Veterinarian Panel</h2>
            <p class="text-sm text-gray-500 mt-1">Manage clinic operations</p>
        </div>

        <!-- Sidebar Menu -->
        <div class="px-4 py-6">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 border-l-4 border-blue-600">
                        <i class="fas fa-tachometer-alt w-6 mr-3 text-blue-600"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('vet-info-form')}}" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-calendar-check w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Add Info</span>
                        <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">12</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('show-vet-appointment')}}" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-calendar-check w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Appointments</span>
                        <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">12</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-paw w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Patients</span>
                        <span class="ml-auto bg-blue-500 text-white text-xs rounded-full px-2 py-1">48</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-prescription-bottle-alt w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Prescriptions</span>
                        <span class="ml-auto bg-yellow-500 text-white text-xs rounded-full px-2 py-1">8</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-chart-bar w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Reports</span>
                    </a>
                </li>
                
                <li class="pt-4 border-t">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Medical Tools</p>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-stethoscope w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Diagnostics</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-flask w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Lab Results</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-syringe w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Surgery Schedule</span>
                    </a>
                </li>
                
                <li class="pt-4 border-t">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Administration</p>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-users w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Staff Management</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-boxes w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Inventory</span>
                    </a>
                </li>
                
                <li>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-file-invoice-dollar w-6 mr-3 text-gray-500"></i>
                        <span class="font-medium">Billing</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sidebar Footer -->
        <div class="absolute bottom-0 w-full border-t p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-900">Clinic Status</p>
                    <p class="text-xs text-green-600 flex items-center">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        Open
                    </p>
                </div>
                <button class="text-gray-500 hover:text-blue-600">
                    <i class="fas fa-question-circle text-xl"></i>
                </button>
            </div>
        </div>
    </div>