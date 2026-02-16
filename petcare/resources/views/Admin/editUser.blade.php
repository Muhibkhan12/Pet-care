<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">



    @include('layouts.adminSidebar')
    <!-- Main Content with Left Margin for Sidebar -->
    <div class="md:ml-64 pt-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <a href="#" class="hover:text-blue-600">Dashboard</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <a href="#" class="hover:text-blue-600">User Management</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <span class="text-gray-900">Update User</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Update User</h1>
                <p class="text-gray-600 mt-2">Modify user information and settings</p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-900">User Information</h2>
                    <p class="text-sm text-gray-500 mt-1">Update the user's profile details</p>
                </div>

                <form enctype="multipart/form-data" action="{{route('edit-user-data',$user->id)}}" method="POST" class="p-6 space-y-6">
                    @csrf 
                    @method('PUT')
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="name" name="name" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="Enter full name"
                                   value="{{$user->name}}">
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="Enter email address"
                                   value="{{$user->email}}">
                        </div>
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                   placeholder="Enter phone number"
                                   value="{{$user->phone}}">
                        </div>
                    </div>

                    <!-- Role Field -->
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                            User Role <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user-shield text-gray-400"></i>
                            </div>
                           <select id="role" name="role"
                                class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition appearance-none bg-white">

                                <option value="" disabled>Select a role</option>

                                <option value="admin"   {{ $user->role === 'admin' ? 'selected' : '' }}>Administrator</option>
                                <option value="vet" {{ $user->role === 'vet' ? 'selected' : '' }}>vet</option>
                                <option value="user"    {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Profile Image
                        </label>
                        <div class="flex items-center space-x-6">
                            <!-- Current Image Preview -->
                            <div class="">
                                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-gray-300">
                                    <img id="imagePreview" 
                                         src="{{asset('storage/'.$user->image)}}" 
                                         alt="Profile" 
                                         class="w-full h-full object-cover">
                                </div>
                            </div>
                            
                            <!-- Upload Button -->
                            <div class="flex-1">
                                <label for="image" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 cursor-pointer transition">
                                    <i class="fas fa-upload mr-2"></i>
                                    Choose New Image
                                </label>
                                <input type="file" id="image" name="image" accept="image/*" class="hidden">
                                <p class="text-xs text-gray-500 mt-2">JPG, PNG or GIF (max. 2MB)</p>
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
                            Update User
                        </button>

                    </div>
                </form>
            </div>

            <!-- Additional Info Card -->
            <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                    <div>
                        <h3 class="text-sm font-medium text-blue-900">Important Note</h3>
                        <p class="text-sm text-blue-700 mt-1">Changes to user roles may affect their access permissions across the system. Please verify the role assignment before saving.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image Preview Functionality
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });


    </script>
</body>
</html>
    
</body>
</html>