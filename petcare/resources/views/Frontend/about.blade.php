<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - About Us</title>
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
        
        .team-card {
            transition: all 0.3s ease;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
 <script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js"
  type="module"
></script>
<body class="bg-white">

    <!-- Navigation -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-6  from-blue-50 to-blue-100">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">About PetCare</h1>
            <p class="text-xl text-gray-600 mb-8">Dedicated to providing exceptional care for your beloved pets since 2009</p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Founded in 2009, PetCare began with a simple mission: to provide compassionate, high-quality veterinary care to pets in our community. What started as a small clinic has grown into a comprehensive pet care facility serving thousands of families.
                    </p>
                    <p class="text-lg text-gray-600 mb-4">
                        Our founder, Dr. Sarah Mitchell, established PetCare after recognizing the need for a veterinary practice that treats every pet like family. With over 15 years of experience and a team of dedicated professionals, we've built a reputation for excellence in pet healthcare.
                    </p>
                    <p class="text-lg text-gray-600">
                        Today, we're proud to be a trusted partner in pet wellness, offering everything from routine checkups to advanced surgical procedures, all delivered with the care and attention your pet deserves.
                    </p>
                </div>
                
                <div>
                    <!-- Lottie Animation -->
                    <dotlottie-wc
                      src="https://lottie.host/6144b519-ec69-4756-9d9b-75e7cd769857/a8Efwz3iMs.lottie"
                      style="width: 700px;height: 700px"
                      autoplay
                      loop
                    ></dotlottie-wc>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Mission & Values</h2>
                <p class="text-xl text-gray-600">Guiding principles that shape everything we do</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                        To provide exceptional veterinary care and support to pets and their families, enhancing the human-animal bond through compassion, expertise, and innovation.
                    </p>
                </div>

                <!-- Compassion -->
                <div class="bg-white rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Compassion</h3>
                    <p class="text-gray-600">
                        We treat every pet with the same love and care we give our own, understanding the special bond between pets and their families.
                    </p>
                </div>

                <!-- Excellence -->
                <div class="bg-white rounded-xl p-8 text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600">
                        We maintain the highest standards of veterinary medicine through continuous education, advanced technology, and best practices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600">Experienced professionals dedicated to your pet's wellbeing</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                
                <!-- Team Member 1 -->
                @foreach($users as $user)
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm team-card">
                        <div class="bg-blue-100 h-64 flex items-center justify-center">
                            <img src="{{asset('storage/' . $user->image)}}" alt="" class="h-full w-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-1">Dr.{{$user->name}}</h3>
                            <p class="text-blue-600 font-medium mb-3">Chief Veterinarian</p>
                            <p class="text-gray-600 text-sm">DVM, 20 years of experience in small animal medicine and surgery.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-6 bg-blue-600">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-5xl font-bold mb-2">15+</div>
                    <div class="text-xl text-blue-100">Years of Service</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">10,000+</div>
                    <div class="text-xl text-blue-100">Happy Pets</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">25+</div>
                    <div class="text-xl text-blue-100">Expert Staff</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-2">24/7</div>
                    <div class="text-xl text-blue-100">Emergency Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facility Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our State-of-the-Art Facility</h2>
                <p class="text-xl text-gray-600">Modern equipment and comfortable spaces for your pet</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Modern Examination Rooms</h3>
                    <p class="text-gray-600">Comfortable and well-equipped rooms for thorough examinations and consultations.</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Advanced Surgical Suite</h3>
                    <p class="text-gray-600">Fully equipped operating rooms with the latest surgical technology and monitoring equipment.</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">In-House Laboratory</h3>
                    <p class="text-gray-600">On-site diagnostic laboratory for quick and accurate test results during your visit.</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Comfortable Boarding</h3>
                    <p class="text-gray-600">Climate-controlled boarding facilities with spacious accommodations and 24/7 monitoring.</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Grooming Salon</h3>
                    <p class="text-gray-600">Professional grooming area with specialized equipment for all breeds and sizes.</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Digital Imaging</h3>
                    <p class="text-gray-600">Digital X-ray and ultrasound equipment for comprehensive diagnostic imaging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Join Our PetCare Family</h2>
            <p class="text-xl text-gray-600 mb-8">Experience the difference that compassionate, professional care can make</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium text-lg">
                    Schedule a Visit
                </button>
                <button class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-50 transition font-medium text-lg">
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

   

