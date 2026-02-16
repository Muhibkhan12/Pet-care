<nav class="fixed w-full bg-white shadow-sm z-50">
    <div class="max-w-full mx-auto px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Left: Menu Button for Mobile & Logo -->
            <div class="flex items-center space-x-4">
                <!-- Mobile Menu Button -->
                <button id="mobileMenuButton" class="md:hidden text-gray-600 hover:text-blue-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5">
                        </path>
                    </svg>
                    <span class="text-2xl font-semibold text-gray-900 hidden md:inline">User Dashboard</span>
                    <span class="text-2xl font-semibold text-gray-900 md:hidden">AD</span>
                </div>
            </div>

            <!-- Center: Navigation Links for Desktop -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="text-blue-600 border-b-2 border-blue-600 transition font-medium">
                    <i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                    <i class="fas fa-calendar-alt mr-2"></i>My Appointments
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                    <i class="fas fa-paw mr-2"></i>My Pets
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                    <i class="fas fa-file-medical mr-2"></i>Medical Records
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">
                    <i class="fas fa-shopping-cart mr-2"></i>Shop
                </a>
            </div>

            <!-- Right: User Profile & Notifications -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button class="text-gray-600 hover:text-blue-600 relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                    </button>
                </div>

                <!-- Messages -->
                <div class="relative">
                    <button class="text-gray-600 hover:text-blue-600 relative">
                        <i class="fas fa-envelope text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>

                <!-- User Profile -->
                <div class="relative">
                    <div class="flex items-center space-x-2">
                         @if(Auth::check())
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-blue-600">
                                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image">
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500">Pet Owner</p>
                            </div>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg z-40 pt-20 transform -translate-x-full transition-transform duration-300 md:hidden">
    <!-- Mobile Sidebar Content -->
    

    <div class="px-4 py-6">
        <ul class="space-y-2">
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 border-l-4 border-blue-600">
                    <i class="fas fa-home w-6 mr-3 text-blue-600"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-calendar-alt w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">My Appointments</span>
                    <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">2</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-paw w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">My Pets</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-medical w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Medical Records</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-shopping-cart w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Pet Shop</span>
                </a>
            </li>
            
            <li class="pt-4 border-t">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Quick Actions</p>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-plus-circle w-6 mr-3 text-green-500"></i>
                    <span class="font-medium">Book Appointment</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-paw w-6 mr-3 text-orange-500"></i>
                    <span class="font-medium">Add New Pet</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-credit-card w-6 mr-3 text-purple-500"></i>
                    <span class="font-medium">Make Payment</span>
                </a>
            </li>
            
            <li class="pt-4 border-t">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Support</p>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-headset w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">24/7 Vet Chat</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-alt w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Resources</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Desktop Sidebar -->
<div class="sidebar fixed left-0 top-0 h-full w-64 bg-white shadow-lg z-40 pt-20 hidden md:block">
    <!-- Sidebar Header -->
    

    <!-- Sidebar Menu -->
    <div class="px-4 py-6">
        <ul class="space-y-2">
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 border-l-4 border-blue-600">
                    <i class="fas fa-home w-6 mr-3 text-blue-600"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-calendar-alt w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">My Appointments</span>
                    <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">2</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-paw w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">My Pets</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-medical w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Medical Records</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-shopping-cart w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Pet Shop</span>
                </a>
            </li>
            
            <li class="pt-4 border-t">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Quick Actions</p>
            </li>
            
            <li>
                <a href="{{route('book-appoinment')}}" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-plus-circle w-6 mr-3 text-green-500"></i>
                    <span class="font-medium">Book Appointment</span>
                </a>
            </li>
            
            <li>
                <a href="{{route('add-pet')}}" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-paw w-6 mr-3 text-orange-500"></i>
                    <span class="font-medium">Add New Pet</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-credit-card w-6 mr-3 text-purple-500"></i>
                    <span class="font-medium">Make Payment</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-truck w-6 mr-3 text-blue-500"></i>
                    <span class="font-medium">Order Tracking</span>
                </a>
            </li>
            
            <li class="pt-4 border-t">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Support</p>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-headset w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">24/7 Vet Chat</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-alt w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Resources</span>
                </a>
            </li>
            
            <li>
                <a href="#" class="sidebar-item flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-question-circle w-6 mr-3 text-gray-500"></i>
                    <span class="font-medium">Help Center</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Sidebar Footer -->
    
</div>

<!-- Backdrop for Mobile Menu -->
<div id="mobileBackdrop" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>

<!-- Main Content -->


<script>
    // Mobile Menu Toggle
    document.getElementById('mobileMenuButton').addEventListener('click', function() {
        const sidebar = document.getElementById('mobileSidebar');
        const backdrop = document.getElementById('mobileBackdrop');
        
        sidebar.classList.toggle('-translate-x-full');
        backdrop.classList.toggle('hidden');
    });

    // Close mobile menu when clicking backdrop
    document.getElementById('mobileBackdrop').addEventListener('click', function() {
        const sidebar = document.getElementById('mobileSidebar');
        this.classList.add('hidden');
        sidebar.classList.add('-translate-x-full');
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('#mobileSidebar a').forEach(link => {
        link.addEventListener('click', function() {
            const sidebar = document.getElementById('mobileSidebar');
            const backdrop = document.getElementById('mobileBackdrop');
            
            sidebar.classList.add('-translate-x-full');
            backdrop.classList.add('hidden');
        });
    });

    // Add hover effect to sidebar items
    document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.classList.add('bg-gray-50');
        });
        
        item.addEventListener('mouseleave', function() {
            if(!this.classList.contains('bg-blue-50')) {
                this.classList.remove('bg-gray-50');
            }
        });
    });
</script>

<style>
    /* Additional custom styles */
    .sidebar-item {
        transition: all 0.2s ease;
    }
    
    .sidebar-item:hover {
        transform: translateX(4px);
    }
    
    #mobileSidebar {
        transition: transform 0.3s ease-in-out;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .sidebar {
            display: none;
        }
    }
</style>