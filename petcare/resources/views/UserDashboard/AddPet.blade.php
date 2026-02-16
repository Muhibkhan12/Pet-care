<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Pet - PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navigation -->
    @include('layouts.user-sidebar')

    
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-8 pt-24">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Add New Pet</h1>
                    <p class="text-xl text-gray-600">Register your pet in the system</p>
                </div>
                <a href="{{ route('user-dashboard') }}" class="text-gray-600 hover:text-gray-900 transition flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Dashboard
                </a>
            </div>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
            <form action="{{route('add-pet-data')}}" method="POST">
                @csrf
                
                <div class="space-y-8">
                    <!-- Basic Information Section -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6 pb-4 border-b border-gray-200">Basic Information</h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Pet Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Pet Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" required maxlength="100"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Enter pet name">
                                <p class="text-xs text-gray-500 mt-1">Maximum 100 characters</p>
                            </div>
                            
                            <!-- Species -->
                            <div>
                                <label for="species" class="block text-sm font-medium text-gray-700 mb-2">
                                    Species <span class="text-red-500">*</span>
                                </label>
                                <select id="species" name="species" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                    <option value="">Select species</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                    <option value="bird">Bird</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <!-- Breed -->
                            <div>
                                <label for="breed" class="block text-sm font-medium text-gray-700 mb-2">
                                    Breed
                                </label>
                                <input type="text" id="breed" name="breed" maxlength="100"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Enter breed (e.g., Golden Retriever)">
                                <p class="text-xs text-gray-500 mt-1">Maximum 100 characters</p>
                            </div>
                            
                            <!-- Gender -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Gender
                                </label>
                                <div class="flex space-x-6">
                                    <label class="flex items-center">
                                        <input type="radio" name="gender" value="male"
                                               class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        <span class="ml-2 text-gray-700">Male</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="gender" value="female"
                                               class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        <span class="ml-2 text-gray-700">Female</span>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Age -->
                            <div>
                                <label for="age" class="block text-sm font-medium text-gray-700 mb-2">
                                    Age
                                </label>
                                <div class="flex items-center space-x-4">
                                    <input type="number" id="age" name="age" min="0" max="30"
                                           class="w-32 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                           placeholder="Years">
                                    <span class="text-gray-600">years old</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Enter age in years</p>
                            </div>
                            
                            <!-- Weight -->
                            <div>
                                <label for="weight" class="block text-sm font-medium text-gray-700 mb-2">
                                    Weight
                                </label>
                                <div class="relative">
                                    <input type="number" id="weight" name="weight" min="0" max="999" step="0.01"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition pr-12"
                                           placeholder="0.00">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500">kg</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Enter weight in kilograms (max 999.99 kg)</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Medical Notes Section -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6 pb-4 border-b border-gray-200">Medical Information</h3>
                        
                        <div>
                            <label for="medical_notes" class="block text-sm font-medium text-gray-700 mb-2">
                                Medical Notes
                            </label>
                            <textarea id="medical_notes" name="medical_notes" rows="4"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                      placeholder="Enter any medical notes, conditions, allergies, or special care instructions"></textarea>
                            <p class="text-xs text-gray-500 mt-1">Add any important medical information about your pet</p>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                        <button type="button" onclick="window.history.back()"
                                class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:border-gray-400 hover:bg-gray-50 transition font-medium">
                            Cancel
                        </button>
                        <button type="submit"
                                class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                            Save Pet
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Success Message -->
        
    </main>

    <!-- Footer -->


</body>
</html>