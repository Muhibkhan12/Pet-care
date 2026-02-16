<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Services</title>
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
        
        .service-card {
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .faq-item {
            transition: all 0.3s ease;
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        
        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
        
        .faq-icon {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Navigation -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-6  from-blue-50 to-blue-100">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Our Services</h1>
            <p class="text-xl text-gray-600 mb-8">Comprehensive care solutions for your beloved pets</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service 1 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Health Checkups</h3>
                    <p class="text-gray-600 mb-4">Comprehensive health examinations to ensure your pet stays healthy and happy.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Physical examination
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Blood tests & diagnostics
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Health reports
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">$75</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Book Now
                    </button>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Vaccinations</h3>
                    <p class="text-gray-600 mb-4">Essential vaccinations to protect your pet from common diseases and infections.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Core vaccinations
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Rabies vaccination
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Vaccination records
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">$45</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Book Now
                    </button>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Pet Grooming</h3>
                    <p class="text-gray-600 mb-4">Professional grooming services to keep your pet looking and feeling their best.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Bath & brush
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Nail trimming
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Hair styling
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">$60</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Book Now
                    </button>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Emergency Care</h3>
                    <p class="text-gray-600 mb-4">24/7 emergency services for urgent pet health situations and concerns.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 availability
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Immediate treatment
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Emergency surgery
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Starting at $150</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Contact Now
                    </button>
                </div>

                <!-- Service 5 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Pet Boarding</h3>
                    <p class="text-gray-600 mb-4">Safe and comfortable boarding facilities with professional care while you're away.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Climate-controlled rooms
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 supervision
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Daily updates
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">$40/night</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Book Now
                    </button>
                </div>

                <!-- Service 6 -->
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 service-card">
                    <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Surgical Services</h3>
                    <p class="text-gray-600 mb-4">Advanced surgical procedures performed by experienced veterinary surgeons.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Spay/neuter services
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Soft tissue surgery
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Post-operative care
                        </li>
                    </ul>
                    <div class="text-2xl font-bold text-gray-900 mb-4">Custom Quote</div>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                        Request Quote
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about our services</p>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">What are your operating hours?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">We are open Monday through Friday from 8:00 AM to 6:00 PM, and Saturday from 9:00 AM to 4:00 PM. We also offer 24/7 emergency services for urgent pet care needs.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">Do I need an appointment?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Yes, we recommend scheduling an appointment to ensure minimal wait times. However, we do accept walk-ins based on availability. For emergency situations, we provide immediate care without an appointment.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">What payment methods do you accept?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">We accept cash, credit cards (Visa, MasterCard, American Express), debit cards, and pet insurance. We also offer payment plans for larger procedures. Please contact us for more information about financing options.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">How often should my pet have a checkup?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">We recommend annual checkups for healthy adult pets. Puppies, kittens, and senior pets may need more frequent visits. Regular checkups help us detect and prevent health issues early, ensuring your pet lives a long and healthy life.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">Do you offer grooming services for all breeds?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Yes, our professional groomers are experienced with all breeds and sizes. We customize our grooming services based on your pet's specific needs, coat type, and temperament. Special accommodations can be made for anxious or senior pets.</p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">What should I bring to my first appointment?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Please bring any previous medical records, vaccination history, current medications, and a list of any concerns or questions you have. If your pet has dietary restrictions or allergies, please inform us during registration.</p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">Is boarding safe for my pet?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Absolutely! Our boarding facilities are clean, climate-controlled, and monitored 24/7. Each pet has their own comfortable space, and our trained staff provides regular exercise, feeding, and attention. We also require all boarding pets to be up-to-date on vaccinations.</p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                    <button class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition" onclick="toggleFaq(this)">
                        <span class="text-lg font-semibold text-gray-900">Can I get a tour of your facility?</span>
                        <svg class="w-6 h-6 text-blue-600 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Yes! We welcome prospective clients to tour our facility. Please call ahead to schedule a tour so we can ensure someone is available to show you around and answer all your questions about our services and facilities.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center bg-blue-600 rounded-2xl p-12">
            <h2 class="text-4xl font-bold text-white mb-4">Ready to Book a Service?</h2>
            <p class="text-xl text-blue-100 mb-8">Schedule an appointment today and give your pet the care they deserve</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 transition font-medium text-lg">
                    Book Appointment
                </button>
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-blue-600 transition font-medium text-lg">
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

    <script>
        function toggleFaq(button) {
            const faqItem = button.parentElement;
            const allFaqItems = document.querySelectorAll('.faq-item');
            
            // Close all other FAQs
            allFaqItems.forEach(item => {
                if (item !== faqItem && item.classList.contains('active')) {
                    item.classList.remove('active');
                }
            });
            
            // Toggle current FAQ
            faqItem.classList.toggle('active');
        }
    </script>

</body>
</html>