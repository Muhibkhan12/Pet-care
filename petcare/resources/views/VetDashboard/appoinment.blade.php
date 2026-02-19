    {{-- @dd($appointments) --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointment Confirmation | Vet Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .sidebar-item {
                transition: all 0.2s ease;
            }
            .sidebar-item:hover {
                background-color: #f3f4f6;
            }
            .confirmation-card {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
            .pet-avatar {
                background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            }
            @media (max-width: 768px) {
                .sidebar {
                    transform: translateX(-100%);
                    transition: transform 0.3s ease;
                }
                .sidebar.active {
                    transform: translateX(0);
                }
            }
        </style>
    </head>
    <body class="bg-gray-50">
        <!-- Navigation -->
        @include('layouts.VetSidebar');

        <!-- Main Content -->
        <main class="md:ml-64 pt-20">
            <div class="p-4 md:p-6">
                <!-- Page Header -->
                <div class="mb-6 md:mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Appointment Confirmation</h1>
                            <p class="text-gray-600 mt-2">Details for the appointment you just created</p>
                        </div>
                        <div class="mt-4 md:mt-0 flex items-center space-x-3">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium flex items-center">
                                <i class="fas fa-print mr-2"></i> Print
                            </button>
                            <button class="px-4 py-2 bg-white text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 transition font-medium flex items-center">
                                <i class="fas fa-calendar-plus mr-2"></i> New Appointment
                            </button>
                        </div>
                    </div>
                    
                    <!-- Success Alert -->
                    <div class="mt-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-lg">
                        <div class="flex">
                            <div class="">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-green-800 font-medium">Appointment successfully created!</p>
                                <p class="text-green-700 mt-1">Confirmation has been sent to the client via email and SMS.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Appointment Details Card -->
                @foreach($appointments as $data)
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Appointment Card -->
                    <div class="lg:col-span-2">
                        <div class="confirmation-card bg-white rounded-xl p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-xl font-bold text-gray-900">Appointment Details</h2>
                                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">
                                    <i class="fas fa-clock mr-1"></i> Upcoming
                                </span>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Left Column -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Appointment Information</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-calendar-alt text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">{{$data->date}}</p>
                                                    <p class="font-medium text-gray-900">Friday, October 27, 2023 • 2:30 PM</p>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-user-md text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Assigned Veterinarian</p>
                                                    <p class="font-medium text-gray-900">{{$appointment->name}}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-stethoscope text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Appointment Type</p>
                                                    <p class="font-medium text-gray-900">Annual Checkup</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Pet Information -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Pet Information</h3>
                                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                            <div class="w-16 h-16 rounded-full pet-avatar flex items-center justify-center text-white text-2xl font-bold mr-4">
                                                B
                                            </div>
                                            <div>
                                                <p class="font-bold text-gray-900">Bailey</p>
                                                <div class="flex items-center mt-1 space-x-4">
                                                    <span class="text-sm text-gray-600">Golden Retriever • 4 years old</span>
                                                </div>
                                                <div class="mt-2">
                                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Microchipped</span>
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">Vaccinated</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Right Column -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Owner Information</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-user text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Client Name</p>
                                                    <p class="font-medium text-gray-900">Michael Thompson</p>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-phone text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Phone Number</p>
                                                    <p class="font-medium text-gray-900">(555) 123-4567</p>
                                                </div>
                                            </div>
                                            
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-4">
                                                    <i class="fas fa-envelope text-blue-600"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Email Address</p>
                                                    <p class="font-medium text-gray-900">michael.t@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Notes Section -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Notes & Instructions</h3>
                                        <div class="p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded-r-lg">
                                            <p class="text-sm text-gray-800">Owner reports decreased appetite over the past week. Bailey has also been less active than usual. Please check for any dental issues or possible digestive problems.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Actions -->
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <div class="flex flex-col md:flex-row md:items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600">Appointment ID: <span class="font-mono font-bold text-gray-900">APT-2023-10-789</span></p>
                                        <p class="text-sm text-gray-600 mt-1">Created: Today at 10:15 AM</p>
                                    </div>
                                    <div class="mt-4 md:mt-0 flex space-x-3">
                                        <button class="px-4 py-2 bg-white text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 transition font-medium">
                                            <i class="fas fa-edit mr-2"></i> Edit Details
                                        </button>
                                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                                            <i class="fas fa-check-circle mr-2"></i> Mark as Completed
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar Cards -->
                    <div class="space-y-6">
                        <!-- Upcoming Appointments -->
                        <div class="confirmation-card bg-white rounded-xl p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Today's Appointments</h3>
                            <div class="space-y-4">
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-dog text-blue-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-900">9:00 AM</p>
                                        <p class="text-sm text-gray-600">Rex - German Shepherd</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Checkup</span>
                                </div>
                                
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-cat text-blue-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-900">11:15 AM</p>
                                        <p class="text-sm text-gray-600">Whiskers - Domestic Shorthair</p>
                                    </div>
                                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Vaccination</span>
                                </div>
                                
                                <div class="flex items-center p-3 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-dog text-blue-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-900">2:30 PM</p>
                                        <p class="text-sm text-gray-600">Bailey - Golden Retriever</p>
                                    </div>
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Checkup</span>
                                </div>
                                
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-rabbit text-blue-600"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-medium text-gray-900">4:00 PM</p>
                                        <p class="text-sm text-gray-600">Cotton - Holland Lop</p>
                                    </div>
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Dental</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quick Actions -->
                        <div class="confirmation-card bg-white rounded-xl p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <button class="p-3 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition text-center">
                                    <i class="fas fa-file-medical text-xl mb-2"></i>
                                    <p class="text-sm font-medium">Medical History</p>
                                </button>
                                <button class="p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition text-center">
                                    <i class="fas fa-prescription text-xl mb-2"></i>
                                    <p class="text-sm font-medium">Add Prescription</p>
                                </button>
                                <button class="p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition text-center">
                                    <i class="fas fa-vial text-xl mb-2"></i>
                                    <p class="text-sm font-medium">Lab Tests</p>
                                </button>
                                <button class="p-3 bg-yellow-50 text-yellow-700 rounded-lg hover:bg-yellow-100 transition text-center">
                                    <i class="fas fa-file-invoice-dollar text-xl mb-2"></i>
                                    <p class="text-sm font-medium">Create Invoice</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </main>

        <!-- Minimal JavaScript -->
        <script>
            // Mobile sidebar toggle (minimal JS as requested)
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuBtn = document.getElementById('mobileMenuBtn');
                const sidebar = document.getElementById('sidebar');
                
                if (mobileMenuBtn && sidebar) {
                    mobileMenuBtn.addEventListener('click', function() {
                        sidebar.classList.toggle('active');
                    });
                }
                
                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(event) {
                    if (window.innerWidth < 768) {
                        const isClickInsideSidebar = sidebar.contains(event.target);
                        const isClickOnMenuButton = mobileMenuBtn.contains(event.target);
                        
                        if (!isClickInsideSidebar && !isClickOnMenuButton) {
                            sidebar.classList.remove('active');
                        }
                    }
                });
            });
        </script>
    </body>
    </html>