<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blue: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    @include('layouts.adminSidebar')

    <!-- Main Content Area -->
    <main class="md:ml-64 pt-20 px-4 md:px-6 py-6">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Manage Products</h1>
            <p class="text-gray-600 mt-2">View, edit, and manage all products in your inventory</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Products</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{count($products)}}</p>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-full">
                        <i class="fas fa-box text-blue-500 text-xl"></i>
                    </div>
                </div>
                <p class="text-green-500 text-sm mt-4">
                    <i class="fas fa-arrow-up mr-1"></i> 12% from last month
                </p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">In Stock</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{$products->where('stock','>',0)->count()}}</p>
                    </div>
                    <div class="bg-green-50 p-3 rounded-full">
                        <i class="fas fa-check-circle text-green-500 text-xl"></i>
                    </div>
                </div>
                <p class="text-green-500 text-sm mt-4">
                    <i class="fas fa-arrow-up mr-1"></i> 8% from last month
                </p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Low Stock</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{$products->where('stock','<=',4)->count()}}</p>
                    </div>
                    <div class="bg-yellow-50 p-3 rounded-full">
                        <i class="fas fa-exclamation-triangle text-yellow-500 text-xl"></i>
                    </div>
                </div>
                <p class="text-red-500 text-sm mt-4">
                    <i class="fas fa-arrow-down mr-1"></i> 3% from last month
                </p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-red-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Out of Stock</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{$products->where('stock','<',0)->count()}}</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-full">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                    </div>
                </div>
                <p class="text-red-500 text-sm mt-4">
                    <i class="fas fa-arrow-up mr-1"></i> 5% from last month
                </p>
            </div>
        </div>

        <!-- Product Management Section -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
            <!-- Toolbar -->
            <div class="px-6 py-4 border-b flex flex-col md:flex-row md:items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-semibold text-gray-900">Product Inventory</h2>
                    <p class="text-gray-500 text-sm">Manage all your products from one place</p>
                </div>
                
                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                    <a href="{{route('add-products')}}">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center justify-center">
                            <i class="fas fa-plus mr-2"></i> Add Product
                        </button>
                    </a>
                    

                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition flex items-center justify-center">
                        <i class="fas fa-filter mr-2"></i> Filter
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition flex items-center justify-center">
                        <i class="fas fa-download mr-2"></i> Export
                    </button>
                </div>
            </div>
            
            <!-- Search Bar -->
            <div class="px-6 py-4 border-b">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input 
    type="text" 
    id="productSearch"
    class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
    placeholder="Search products by name, category, price or stock...">

                </div>
            </div>
            
            <!-- Products Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Product 1 -->
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-20 w-20  bg-blue-100 rounded-lg flex items-center justify-center">
                                            <img src="{{asset('storage/'.$product->image)}}" alt="Product Image" class="h-full w-full">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{$product->name}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{$product->category}}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 font-semibold">${{$product->price}}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{$product->stock}}</div>
                                </td>
                                @if($product->stock > 0)
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                            In Stock
                                        </span>
                                    </td>
                                @else
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                            Out of Stock
                                        </span>
                                    </td>
                                @endif
                                <td class="px-6 py-4 text-sm font-medium">
                                    <a href="{{ route('edit-products-page', $product->id) }}"
                                       class="text-blue-600 hover:text-blue-900 mr-4">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    
                                    <form action="{{ route('delete-product', $product->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')                                                            
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="px-6 py-4 border-t flex flex-col md:flex-row md:items-center justify-between">
                <div class="text-sm text-gray-500 mb-4 md:mb-0">
                    Showing <span class="font-semibold">1</span> to <span class="font-semibold">5</span> of <span class="font-semibold">156</span> products
                </div>
                
            </div>
        </div>
        
       
    </main>

    <!-- Minimal JavaScript -->
    <script>  
        // Product search functionality
        document.getElementById('productSearch').addEventListener('keyup', function () {
            let searchValue = this.value.toLowerCase();
            let rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                let productName = row.children[0].innerText.toLowerCase();
                let category    = row.children[1].innerText.toLowerCase();
                let price       = row.children[2].innerText.toLowerCase();
                let stock       = row.children[3].innerText.toLowerCase();
                let status      = row.children[4].innerText.toLowerCase();

                if (
                    productName.includes(searchValue) ||
                    category.includes(searchValue) ||
                    price.includes(searchValue) ||
                    stock.includes(searchValue) ||
                    status.includes(searchValue)
                ) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Toggle mobile sidebar
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            
            if (window.innerWidth < 768 && 
                !sidebar.contains(event.target) && 
                !mobileMenuBtn.contains(event.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        });
        
        // Simple delete confirmation
        document.querySelectorAll('.fa-trash-alt').forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this product?')) {
                    // In a real app, you would send a delete request here
                    this.closest('tr').style.display = 'none';
                }
            });
        });
        
        // Simple edit action
        document.querySelectorAll('.fa-edit').forEach(button => {
            button.addEventListener('click', function() {
                // In a real app, you would navigate to an edit page or show a modal
                alert('Edit functionality would open here');
            });
        });
    </script>
</body>
</html>