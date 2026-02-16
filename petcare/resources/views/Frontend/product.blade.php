<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Products</title>
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
        
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-white">

    <!-- Navigation -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-6  from-blue-50 to-blue-100">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Premium Pet Products</h1>
            <p class="text-xl text-gray-600 mb-8">Everything your pet needs for a healthy and happy life</p>
            
            <!-- Category Filter -->
            <div class="flex flex-wrap justify-center gap-3">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    All Products
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">
                    Dog Products
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">
                    Cat Products
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">
                    Food & Treats
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">
                    Toys & Accessories
                </button>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                @foreach($product as $data)
                    <div class=" rounded-xl overflow-hidden product-card">
                        <div class="h-64 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $data->image) }}"alt="Product Image" class="h-full w-full object-cover">
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mt-3 mb-2"> {{$data->name }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{$data->description}}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">${{$data->price}}</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More -->
            <div class="text-center mt-12">
                <button class="bg-gray-100 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-200 transition font-medium">
                    Load More Products
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Free Shipping</h3>
                    <p class="text-gray-600 text-sm">On orders over $50</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Quality Guarantee</h3>
                    <p class="text-gray-600 text-sm">Premium products only</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Easy Returns</h3>
                    <p class="text-gray-600 text-sm">30-day return policy</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">24/7 Support</h3>
                    <p class="text-gray-600 text-sm">Always here to help</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 px-6 bg-blue-600">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Get Exclusive Deals</h2>
            <p class="text-xl text-blue-100 mb-8">Subscribe to our newsletter for special offers and pet care tips</p>
            <div class="flex max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-l-lg focus:outline-none">
                <button class="bg-gray-900 text-white px-8 py-3 rounded-r-lg hover:bg-gray-800 transition font-medium">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>