{{-- @dd(get_defined_vars()) --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Care Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            * { font-family: 'Inter', sans-serif; }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fadeInUp {
                animation: fadeInUp 0.6s ease-out;
            }
        </style>
    </head>
    <body class="bg-white">
    
    <!-- Navigation (Same as Home Page) -->
        @include('layouts.user-sidebar');
    <!-- Main Content -->

        

    
        <main class="max-w-7xl mx-auto px-6 py-8 pt-24">
        <!-- Welcome Section -->
        <div class="mb-8 animate-fadeInUp">
            
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Welcome Back, {{ session('name') }}</h1>
            <p class="text-xl text-gray-600">Manage your pet's health and appointments in one place</p>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Pets Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition border border-gray-100 animate-fadeInUp">
                <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600 mb-1">Total Pets</p>
                            <h3 class="text-3xl font-bold text-gray-900">{{$pet->count()}}</h3>
                        </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-green-600 font-medium">All Active</span>
                </div>
            </div>

            <!-- Appointments Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition border border-gray-100 animate-fadeInUp" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Appointments</p>
                        <h3 class="text-3xl font-bold text-gray-900">2</h3>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-gray-600">This week</span>
                </div>
            </div>

            <!-- Medications Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition border border-gray-100 animate-fadeInUp" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Medications</p>
                        <h3 class="text-3xl font-bold text-gray-900">1</h3>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-orange-600 font-medium">Due today</span>
                </div>
            </div>

            <!-- Health Records Card -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition border border-gray-100 animate-fadeInUp" style="animation-delay: 0.3s">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 mb-1">Health Records</p>
                        <h3 class="text-3xl font-bold text-gray-900">12</h3>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-gray-600">Total documents</span>
                </div>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- My Pets -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">My Pets</h2>
                    <a href="{{route('add-pet')}}">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-medium text-sm">
                            + Add New Pet
                        </button>
                    </a>
                </div>
                @foreach($pet as $pets)
                <div class="space-y-4">
                    <!-- Pet Card 1 -->
                    <div class="flex items-center justify-between p-4  from-blue-50 to-cyan-50 rounded-lg border border-blue-100 hover:shadow-sm transition">
                        <div class="flex items-center space-x-4">
                            @if(str_contains(strtolower($pets->species), 'dog'))
                                <div class="w-16 h-16 from-orange-100 to-orange-200 rounded-full flex items-center justify-center text-3xl">
                                    🐕
                                </div>
                            @elseif(str_contains(strtolower($pets->species), 'cat'))
                                <div class="w-16 h-16 from-orange-100 to-orange-200 rounded-full flex items-center justify-center text-3xl">
                                    🐱
                                </div>
                            @elseif(str_contains(strtolower($pets->species), 'bird'))
                                <div class="w-16 h-16 from-orange-100 to-orange-200 rounded-full flex items-center justify-center text-3xl">
                                    🐦
                                </div>
                            @else
                                <div class="w-16 h-16 from-orange-100 to-orange-200 rounded-full flex items-center justify-center text-3xl">
                                    🐾
                                </div>
                            @endif
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">{{$pets->name}}</h4>
                                <p class="text-sm text-gray-600">{{$pets->species}} • {{$pets->age}} years old</p>
                                <div class="flex items-center space-x-2 mt-1">
                                    <span class="text-xs  text-black-700 px-3 py-1 rounded-full">{{$pets->breed}}</span>
                                    <span class="text-xs  text-blue-700 px-3 py-1 rounded-full"></span>
                                </div>
                            </div>
                        </div>
                        <button class="text-gray-400 hover:text-blue-600 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                </div>
                @endforeach
            </div>

            <!-- Upcoming Events -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Upcoming Appointments</h2>
                
                <div class="space-y-4">
                    <!-- Appointment 1 -->
                    <div class="p-4 bg-blue-50 rounded-lg border border-blue-200 hover:shadow-sm transition">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Vet Checkup</h4>
                                    <p class="text-sm text-gray-600 mt-1">Max • Dr. Johnson</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-blue-200">
                            <span class="text-sm text-gray-600">Dec 18, 2024</span>
                            <span class="text-sm font-medium text-blue-700">10:00 AM</span>
                        </div>
                    </div>

                    <!-- Appointment 2 -->
                    <div class="p-4 bg-purple-50 rounded-lg border border-purple-200 hover:shadow-sm transition">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Grooming Session</h4>
                                    <p class="text-sm text-gray-600 mt-1">Luna • Pet Spa</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-purple-200">
                            <span class="text-sm text-gray-600">Dec 20, 2024</span>
                            <span class="text-sm font-medium text-purple-700">2:30 PM</span>
                        </div>
                    </div>

                    <!-- Appointment 3 -->
                    <div class="p-4 bg-green-50 rounded-lg border border-green-200 hover:shadow-sm transition">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Vaccination</h4>
                                    <p class="text-sm text-gray-600 mt-1">Max • Dr. Johnson</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-green-200">
                            <span class="text-sm text-gray-600">Dec 22, 2024</span>
                            <span class="text-sm font-medium text-green-700">11:00 AM</span>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-4 py-2.5 text-sm font-medium text-blue-600 hover:text-blue-700 border-2 border-gray-300 rounded-lg hover:border-blue-600 hover:bg-blue-50 transition">
                    View All Appointments
                </button>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-6 bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Quick Actions</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Book Appointment -->
                <button class="flex flex-col items-center justify-center p-4 border-2 border-gray-200 rounded-xl hover:border-blue-600 hover:bg-blue-50 transition group">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-3 group-hover:bg-blue-600 transition">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-700">Book Appointment</span>
                </button>

                <!-- Add Medication -->
                <button class="flex flex-col items-center justify-center p-4 border-2 border-gray-200 rounded-xl hover:border-green-600 hover:bg-green-50 transition group">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-3 group-hover:bg-green-600 transition">
                        <svg class="w-6 h-6 text-green-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 group-hover:text-green-700">Add Medication</span>
                </button>

                <!-- Health Records -->
                <button class="flex flex-col items-center justify-center p-4 border-2 border-gray-200 rounded-xl hover:border-purple-600 hover:bg-purple-50 transition group">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-3 group-hover:bg-purple-600 transition">
                        <svg class="w-6 h-6 text-purple-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 group-hover:text-purple-700">Health Records</span>
                </button>

                <!-- Order Supplies -->
                <button class="flex flex-col items-center justify-center p-4 border-2 border-gray-200 rounded-xl hover:border-orange-600 hover:bg-orange-50 transition group">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-3 group-hover:bg-orange-600 transition">
                        <svg class="w-6 h-6 text-orange-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-700 group-hover:text-orange-700">Order Supplies</span>
                </button>
            </div>
        </div>
        </main>

    </body>
</html>