<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Main Content with Left Margin for Sidebar -->


    @include('layouts.vetSidebar')
    <div class="md:ml-64 pt-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <a href="#" class="hover:text-blue-600">Dashboard</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <a href="#" class="hover:text-blue-600">Doctor Management</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <span class="text-gray-900">Add/Update Doctor</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Doctor Information</h1>
                <p class="text-gray-600 mt-2">Enter doctor's professional details</p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-900">Professional Details</h2>
                    <p class="text-sm text-gray-500 mt-1">Complete the doctor's profile information</p>
                </div>

                <form method="POST" action="{{route('add-vet-data')}}" class="p-6 space-y-6">
                    @csrf
                    <!-- Specialization Field -->
                    <div>
                        <label for="specialization" class="block text-sm font-medium text-gray-700 mb-2">
                            Specialization <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-stethoscope text-gray-400"></i>
                            </div>
                            <input type="text" id="specialization" name="specialization" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="e.g., Cardiology, Pediatrics, Orthopedics">
                        </div>
                    </div>

                    <!-- Experience Field -->
                    <div>
                        <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">
                            Years of Experience <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-briefcase text-gray-400"></i>
                            </div>
                            <input type="number" id="experience" name="experience" min="0" max="50"
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="Enter years of experience">
                        </div>
                    </div>

                    <!-- Clinic Name Field -->
                    <div>
                        <label for="clinic_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Clinic Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-hospital text-gray-400"></i>
                            </div>
                            <input type="text" id="clinic_name" name="clinic_name" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="Enter clinic or hospital name">
                        </div>
                    </div>

                    <!-- Availability Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Availability <span class="text-red-500">*</span>
                        </label>
                        <div class="space-y-3">
                            <!-- Days Selection -->
                            <div>
                                <p class="text-xs text-gray-600 mb-2">Select Available Days:</p>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Monday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Monday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Tuesday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Tuesday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Wednesday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Wednesday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Thursday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Thursday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Friday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Friday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Saturday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Saturday</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="days[]" value="Sunday" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700">Sunday</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Time Selection -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="start_time" class="block text-xs text-gray-600 mb-1">Start Time:</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-clock text-gray-400"></i>
                                        </div>
                                        <input type="time" id="start_time" name="start_time" 
                                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                                    </div>
                                </div>
                                <div>
                                    <label for="end_time" class="block text-xs text-gray-600 mb-1">End Time:</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-clock text-gray-400"></i>
                                        </div>
                                        <input type="time" id="end_time" name="end_time" 
                                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                        <button type="button" 
                                class="px-6 py-3 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                            <i class="fas fa-times mr-2"></i>
                            Cancel
                        </button>
                        <button type="submit" 
                                class="px-6 py-3 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow-sm">
                            <i class="fas fa-save mr-2"></i>
                            Save Doctor Info
                        </button>
                    </div>
                </form>
            </div>

            <!-- Additional Info Card -->
            <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                    <div>
                        <h3 class="text-sm font-medium text-blue-900">Availability Information</h3>
                        <p class="text-sm text-blue-700 mt-1">Select the days and time slots when the doctor is available for appointments. This information will be displayed to patients when booking.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form Validation
        
    </script>
</body>
</html>