<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMUS AQUA - Engineering Excellence</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <!-- Hero Section -->
    <header class="bg-orange-600 text-white relative">
        <nav class="fixed top-0 left-0 right-0 bg-orange-600 text-white z-50 shadow-lg">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold text-blue-100">PRIMUS AQUA</div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#about" class="hover:text-blue-200">About</a>
                        <a href="#mission" class="hover:text-blue-200">Mission & Vision</a>
                        <a href="#services" class="hover:text-blue-200">Services</a>
                        <a href="#certifications" class="hover:text-blue-200">Certifications</a>
                        <a href="#contact" class="hover:text-blue-200">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container mx-auto px-6 py-32 text-center mt-8">
            <h1 class="text-5xl font-bold mb-4 text-blue-100">PRIMUS AQUA MAINTENANCE AND CONTRACTING CORPORATION</h1>
            <p class="text-xl mb-8 text-blue-200">Engineering Excellence with Filipino Expertise</p>
            <a href="#contact" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Get Started</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-600">About PRIMUS AQUA</h2>
            
            <!-- Highlighted Introduction -->
            <div class="mb-12 text-center">
                <p class="text-2xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                    PAMCC was created by a group of engineers with expertise in various engineering fields, including 
                    <span class="text-blue-600 font-semibold">HVAC, Mechanical, Electrical, Civil, and Structural engineering</span>. 
                    Our team consists of creative, experienced, and dedicated professionals committed to providing effective solutions and responsive services.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="bg-orange-50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-blue-600">Leadership</h3>
                        <p class="text-gray-700">Spearheaded by <strong>Engr. Wilfredo Q. Inutan Jr.</strong>, a Professional Mechanical Engineer (PME No. 5236) with more than 20 years of experience in:</p>
                        <ul class="list-disc ml-6 mt-2 text-gray-600">
                            <li>District Cooling Systems</li>
                            <li>HVAC Systems</li>
                            <li>Facilities Machinery</li>
                            <li>Manufacturing Equipment</li>
                            <li>Oxygen and Acetylene Plant Maintenance and Operation</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg border border-orange-200">
                    <h3 class="text-2xl font-semibold mb-4 text-blue-600">Our Expertise</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Installation & Maintenance of HVAC Systems
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Energy Efficiency Solutions
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Comprehensive Engineering Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section id="mission" class="py-20 bg-orange-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-blue-500">
                    <h3 class="text-2xl font-bold text-blue-600 mb-6">Our Mission</h3>
                    <p class="text-lg text-gray-700">To provide our Clients with quality services by using our expertise and experience in the nature of engineering.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-blue-500">
                    <h3 class="text-2xl font-bold text-blue-600 mb-6">Our Vision</h3>
                    <p class="text-lg text-gray-700">To become one of the prominent contractors in the industry; utilizing Filipino skills and expertise that value quality services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-600">Our Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-orange-200">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">HVAC Systems</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Supply and Installation</li>
                        <li>• Repair and Cleaning</li>
                        <li>• Operation and Maintenance</li>
                        <li>• Piping and Ducting</li>
                        <li>• VRF/VRV Systems</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-orange-200">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">System Evaluation</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Chilled Water System Evaluation</li>
                        <li>• Chiller Plant Efficiency Audit</li>
                        <li>• Flow Rate Measurement</li>
                        <li>• Power Consumption Analysis</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-orange-200">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Civil & Structural</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Architectural Fit-out</li>
                        <li>• Structural Works</li>
                        <li>• Finishing and Painting</li>
                        <li>• Electrical Works</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications" class="py-20 bg-orange-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-600">Company Information</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md border border-orange-200">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Registration Details</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li><strong>SEC Certificate No:</strong> 2022010039872-03</li>
                        <li><strong>Registration Date:</strong> January 31, 2022</li>
                        <li><strong>BIR Registration No:</strong> 54ARC20220000001683</li>
                        <li><strong>Business Permit No:</strong> 04669</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border border-orange-200">
                    <h3 class="text-xl font-semibold mb-4 text-blue-600">Future Certifications</h3>
                    <p class="text-gray-600">This space is reserved for future certifications and achievements of PRIMUS AQUA.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-600">Contact Us</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-orange-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-semibold mb-6 text-blue-600">Company Details</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>B6 L24, Palazzo Bello 1 Subd, Carsadang Bago 2, Imus City, Cavite</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>0956-293-4805 / 0905-422-9946</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>primusaqua2022@gmail.com</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <h4 class="font-semibold mb-2 text-blue-600">Key Personnel:</h4>
                        <p class="text-gray-600">Engr. Wilfredo Q. Inutan Jr, PME (PRESIDENT)</p>
                        <p class="text-gray-600">Engr. Roberto C. Lipon, ME, RMP (V-PRES)</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border border-orange-200">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 mb-2" for="name">Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="email">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2" for="message">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8">
                <p class="text-xl font-semibold mb-4">"Thank you for taking this into consideration"</p>
                <p class="text-gray-400">We would be very pleased to do business with you anytime soon.</p>
                <p class="text-gray-400 mt-2">- PRIMUS AQUA</p>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 PRIMUS AQUA MAINTENANCE AND CONTRACTING CORPORATION. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
