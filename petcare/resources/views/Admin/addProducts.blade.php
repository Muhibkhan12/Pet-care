<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    @include('layouts.adminSidebar')

 
    
    <!-- Main Content -->
    <div class="md:ml-64 pt-20">
        <div class="p-6">
            <!-- Page Header with Back Button -->
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Add New Product</h1>
                    <p class="text-gray-600 mt-2">Create a new product in the inventory system</p>
                </div>
                <a href="{{ route('frontend-products') }}" class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Products
                </a>
            </div>

            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Product Form -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <form method="POST" action="{{route('insert-products')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div class="space-y-6">
                            <!-- Product Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Product Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Enter product name">
                                <p class="mt-1 text-sm text-gray-500">Enter the full product name</p>
                            </div>

                            <!-- Price -->
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                                    Price <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                                    <input type="number" id="price" name="price" step="0.01" min="0" 
                                           value="{{ old('price') }}" required
                                           class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                           placeholder="0.00">
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Enter price in USD</p>
                            </div>

                            <!-- Stock Quantity -->
                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700 mb-2">
                                    Stock Quantity <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="stock" name="stock" min="0" value="{{ old('stock') }}" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Enter quantity">
                                <p class="mt-1 text-sm text-gray-500">Available units in stock</p>
                            </div>

                            <!-- Category -->
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                                    Category <span class="text-red-500">*</span>
                                </label>
                            
                                <select id="category" name="category" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Select category</option>
                                    <option value="FOOD" {{ old('category') == 'FOOD' ? 'selected' : '' }}>Food</option>
                                    <option value="CARE" {{ old('category') == 'CARE' ? 'selected' : '' }}>Care</option>
                                    <option value="TOYS" {{ old('category') == 'TOYS' ? 'selected' : '' }}>Toys</option>
                                    <option value="ACCESSORIES" {{ old('category') == 'ACCESSORIES' ? 'selected' : '' }}>Accessories</option>
                                </select>
                            
                                <p class="mt-1 text-sm text-gray-500">Select product category</p>
                            </div>

                            <!-- Image Upload -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                                    Product Image
                                </label>
                                <input type="file" id="image" name="image" accept="image/*"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <p class="mt-1 text-sm text-gray-500">PNG, JPG, WEBP up to 5MB</p>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-6">
                            <!-- Description -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Description
                                </label>
                                <textarea id="description" name="description" rows="8"
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="Enter product description">{{ old('description') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500">Describe the product features and specifications</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end">
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">
                            <i class="fas fa-check mr-2"></i>Add Product
                        </button>
                    </div>
                </form>
            </div>

            <!-- Form Requirements -->
            <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
                <h3 class="text-sm font-semibold text-blue-800 mb-2">
                    <i class="fas fa-info-circle mr-2"></i>Form Requirements
                </h3>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li><i class="fas fa-circle text-xs mr-2"></i>Fields marked with <span class="text-red-500">*</span> are required</li>
                    <li><i class="fas fa-circle text-xs mr-2"></i>Image must be less than 5MB in size</li>
                    <li><i class="fas fa-circle text-xs mr-2"></i>Price must be a positive number</li>
                    <li><i class="fas fa-circle text-xs mr-2"></i>Stock quantity must be 0 or greater</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>