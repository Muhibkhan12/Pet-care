<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Contact Us</title>
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
        
        .contact-card {
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .input-focus:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
    </style>
</head>
<body class="bg-white">

    <!-- Navigation -->
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-6  from-blue-50 to-blue-100">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Contact PetCare</h1>
            <p class="text-xl text-gray-600 mb-8">We're here to help and answer any questions you may have</p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Phone -->
                <div class="bg-white rounded-xl p-8 text-center contact-card shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Phone</h3>
                    <p class="text-gray-600 text-lg mb-2">Main Office</p>
                    <p class="text-blue-600 font-medium text-xl">(555) 123-4567</p>
                    <p class="text-gray-600 text-sm mt-2">Monday - Friday: 8:00 AM - 8:00 PM</p>
                    <p class="text-gray-600 text-sm">Saturday - Sunday: 9:00 AM - 5:00 PM</p>
                </div>

                <!-- Email -->
                <div class="bg-white rounded-xl p-8 text-center contact-card shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Email</h3>
                    <p class="text-gray-600 text-lg mb-2">General Inquiries</p>
                    <p class="text-green-600 font-medium text-xl">info@petcare.com</p>
                    <p class="text-gray-600 text-sm mt-2">Appointments</p>
                    <p class="text-green-600 font-medium">appointments@petcare.com</p>
                </div>

                <!-- Location -->
                <div class="bg-white rounded-xl p-8 text-center contact-card shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Location</h3>
                    <p class="text-gray-600 text-lg mb-2">Main Clinic</p>
                    <p class="text-purple-600 font-medium text-xl">123 Pet Street</p>
                    <p class="text-gray-600">City, State 12345</p>
                    <p class="text-gray-600 text-sm mt-2">Free parking available</p>
                </div>
            </div>

            <!-- Contact Form & Map Section -->
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="animate-fadeInUp">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    <form method="POST" action="{{ route('user-query') }}" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input name="first_name" type="text" id="firstName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent input-focus" placeholder="John">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input name="last_name" type="text" id="lastName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent input-focus" placeholder="Doe">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input name="email" type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent input-focus" placeholder="john@example.com">
                        </div>
                        
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone_number" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent input-focus" placeholder="(555) 123-4567">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 input-focus">
                                <option value="" disabled selected>Select a topic</option>
                                <option value="appointment">Schedule Appointment</option>
                                <option value="emergency">Emergency Service</option>
                                <option value="boarding">Pet Boarding</option>
                                <option value="grooming">Grooming Services</option>
                                <option value="general">General Inquiry</option>
                                <option value="feedback">Feedback</option>
                            </select>

                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea name="message" id="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent input-focus" placeholder="Tell us how we can help..."></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" name="newsletter" id="newsletter" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                                Subscribe to our newsletter for pet care tips and updates
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-medium text-lg">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Map & Hours -->
                <div class="animate-fadeInUp delay-100">
                    <!-- Map Placeholder -->
                    <div class="bg-gray-100 rounded-xl p-8 mb-8">
                        <div class="aspect-w-16 aspect-h-9 bg-blue-50 rounded-lg flex items-center justify-center mb-4">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-blue-300 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/>
                                </svg>
                                <p class="text-blue-600 font-medium">Map Location</p>
                                <p class="text-gray-600 text-sm">123 Pet Street, City, State 12345</p>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                Get Directions
                            </button>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-xl p-8 shadow-sm">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Business Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-700">Monday - Friday</span>
                                <span class="font-medium text-gray-900">8:00 AM - 8:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-700">Saturday</span>
                                <span class="font-medium text-gray-900">9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-700">Sunday</span>
                                <span class="font-medium text-gray-900">9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-medium">Emergency Services</span>
                                <span class="font-medium text-gray-900">24/7</span>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-700">
                                        <span class="font-medium">Emergency Note:</span> For after-hours emergencies, please call our emergency line directly. We have veterinarians on call 24/7.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- FAQ Column 1 -->
                <div class="space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How do I schedule an appointment?</h3>
                        <p class="text-gray-600">You can schedule an appointment by calling us at (555) 123-4567, using our online booking system, or by filling out the contact form on this page.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What should I bring to my first visit?</h3>
                        <p class="text-gray-600">Please bring any previous medical records, vaccination history, and a list of current medications. Also bring your pet's favorite treats or toys to help them feel comfortable.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you offer emergency services?</h3>
                        <p class="text-gray-600">Yes, we offer 24/7 emergency services. For emergencies outside regular business hours, please call our emergency line at (555) 987-6543.</p>
                    </div>
                </div>

                <!-- FAQ Column 2 -->
                <div class="space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What payment methods do you accept?</h3>
                        <p class="text-gray-600">We accept all major credit cards, cash, and checks. We also work with pet insurance companies and can provide assistance with insurance claims.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How long does boarding typically last?</h3>
                        <p class="text-gray-600">Boarding duration varies based on your needs. We offer daily, weekly, and extended boarding options. All boarded pets receive regular exercise and attention from our staff.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you see exotic pets?</h3>
                        <p class="text-gray-600">Yes, we have veterinarians experienced with exotic pets including birds, reptiles, and small mammals. Please call ahead to schedule an appointment for exotic pets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6  from-blue-600 to-blue-700">
        <div class="max-w-4xl mx-auto text-center text-black">
            <h2 class="text-4xl font-bold mb-4">Ready to Visit Us?</h2>
            <p class="text-xl text-gray-600 mb-8">Book your appointment today and give your pet the care they deserve</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-800 hover:text-white transition font-medium text-lg">
                    Book Appointment Now
                </button>
                <button class="bg-blue-800 border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-blue-500 transition font-medium text-lg">
                    Call Us: (555) 123-4567
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>