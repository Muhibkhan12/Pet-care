<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Professional Pet Care Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="" href="https://lottie.host/embed/dd5fcbbc-4898-4cb4-a012-285e2792faa8/iBKUBdrtok.lottie">
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
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
</head>
<script
  type="module"
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js">

</script>
<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js"
  type="module"
></script>
<body class="bg-white">

    <!-- Navigation -->
    @include('layouts.header');
    

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-fadeInUp">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Professional Care for Your Beloved Pets
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Trusted veterinary services and pet care solutions with experienced professionals dedicated to your pet's health and happiness.
                    </p>
                    <div class="flex space-x-4">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                            Schedule Visit
                        </button>
                        <a href="{{route('user-logout')}}">logout</a>
                        <button class="border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:border-blue-600 hover:text-blue-600 transition font-medium">
                            Learn More
                        </button>
                    </div>
                </div>
                
                <div class="animate-fadeInUp delay-200">
                    <!-- Fixed Lottie Animation Container -->
                    <dotlottie-wc
  src="https://lottie.host/dd5fcbbc-4898-4cb4-a012-285e2792faa8/iBKUBdrtok.lottie"
  style="width: 100%; height: 500px;"
  autoplay
  loop>
</dotlottie-wc>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600">Comprehensive pet care solutions tailored to your needs</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Health Checkups</h3>
                    <p class="text-gray-600">Regular health examinations and preventive care to keep your pet healthy and happy.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Vaccinations</h3>
                    <p class="text-gray-600">Complete vaccination services to protect your pet from common diseases and infections.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">24/7 Emergency Care</h3>
                    <p class="text-gray-600">Round-the-clock emergency services for urgent pet health situations and concerns.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Surgical Services</h3>
                    <p class="text-gray-600">Advanced surgical procedures performed by experienced veterinary surgeons.</p>
                </div>
                
                <!-- Service 5 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Pet Grooming</h3>
                    <p class="text-gray-600">Professional grooming services to keep your pet clean, comfortable, and looking great.</p>
                </div>
                
                <!-- Service 6 -->
                <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Pet Boarding</h3>
                    <p class="text-gray-600">Safe and comfortable boarding facilities with professional care while you're away.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <!-- Fixed Second Pet Animation Container -->
                    
                    <dotlottie-wc
  src="https://lottie.host/8e12c2cf-cd5a-4ccb-b8f8-ef30514764d6/nXUkQQoCM8.lottie"
  style="width: 500px;height: 500px"
  autoplay
  loop
></dotlottie-wc>
                </div>
                
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Why Choose PetCare?</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        With over 15 years of experience in veterinary care, we provide exceptional service with compassion and expertise. Our state-of-the-art facility and dedicated team ensure your pet receives the best possible care.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center  mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Experienced Veterinarians</h4>
                                <p class="text-gray-600">Highly qualified professionals with specialized training</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center  mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Modern Facilities</h4>
                                <p class="text-gray-600">Advanced equipment and comfortable environment</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center  mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Compassionate Care</h4>
                                <p class="text-gray-600">We treat every pet like family with love and attention</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-6 bg-blue-600">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-4xl font-bold mb-2">15+</div>
                    <div class="text-blue-100">Years of Experience</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">10,000+</div>
                    <div class="text-blue-100">Happy Clients</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-blue-100">Expert Staff</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-blue-100">Emergency Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
            <p class="text-xl text-gray-600 mb-12">Have questions? We're here to help and answer any questions you may have.</p>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Phone</h3>
                    <p class="text-gray-600">+1 (555) 123-4567</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600">info@petcare.com</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Location</h3>
                    <p class="text-gray-600">123 Pet Street, City, ST 12345</p>
                </div>
            </div>
            
            <a href="{{route('frontend-contact')}}">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium text-lg">
                Schedule an Appointment
            </button>
            </a>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer');
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>

<!-- FIXED ANIMATION CODE -->

<!-- YOUR ANIMATION CODE -->
<script>
    window.onload = function () {
        console.log('lottie:', window.lottie);

        lottie.loadAnimation({
            container: document.getElementById('petAnimation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://assets9.lottiefiles.com/packages/lf20_jcikwtux.json'
        });
    };
</script>

</body>
</html>


