<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarian Dashboard - PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { font-family: 'Inter', sans-serif; }
        
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-item {
            transition: all 0.2s ease;
        }
        
        .sidebar-item:hover {
            transform: translateX(5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    @include('layouts.vetSidebar')

    <!-- Main Content Area -->
    <div class="md:ml-64 pt-20">
        <!-- Your main content goes here -->
        <div class="p-6">
            <!-- Dashboard Content -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back, Dr. Smith</h1>
                <p class="text-gray-600">Today's summary: 8 appointments, 3 new patients</p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Today's Appointments</p>
                            <h3 class="text-3xl font-bold text-gray-900">8</h3>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Active Patients</p>
                            <h3 class="text-3xl font-bold text-gray-900">48</h3>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-paw text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Pending Prescriptions</p>
                            <h3 class="text-3xl font-bold text-gray-900">8</h3>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-prescription-bottle-alt text-yellow-600 text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600">Revenue Today</p>
                            <h3 class="text-3xl font-bold text-gray-900">$2,450</h3>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Today's Schedule -->
            <div class="bg-white rounded-xl shadow-sm p-6 border mb-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Today's Schedule</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-dog text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Max - Golden Retriever</h4>
                                <p class="text-sm text-gray-600">Annual Checkup</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">9:00 AM</p>
                            <p class="text-sm text-gray-600">Room 3</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-cat text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Luna - Persian Cat</h4>
                                <p class="text-sm text-gray-600">Vaccination</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">10:30 AM</p>
                            <p class="text-sm text-gray-600">Room 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>