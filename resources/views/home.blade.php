@extends('layouts.app')

@section('content')
    <section class="bg-green-500 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Welcome to Coproof</h2>
            <p class="text-lg mb-8">Want to see what projects have been registered?</p>
            <a href="{{ route('content.index') }}" class="bg-white text-[#025D33] px-6 py-3 rounded shadow hover:bg-gray-100">See Our Projects</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-8 text-[#2052A3]">Our Services</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Content Creation -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">Content Creation</h4>
                    <p class="text-gray-600">Create engaging and high-quality content tailored to your audience.</p>
                </div>
                <!-- Graphic Design -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">Graphic Design</h4>
                    <p class="text-gray-600">Bring your ideas to life with visually stunning designs.</p>
                </div>
                <!-- Digital Marketing -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">Digital Marketing</h4>
                    <p class="text-gray-600">Boost your online presence with data-driven marketing strategies.</p>
                </div>
                <!-- Social Media Management -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">Social Media Management</h4>
                    <p class="text-gray-600">Grow your brand through expert social media management.</p>
                </div>
                <!-- Branding & Identity -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">Branding & Identity</h4>
                    <p class="text-gray-600">Define your brand with unique and impactful identity strategies.</p>
                </div>
                <!-- SEO Optimization -->
                <div class="p-6 bg-white shadow rounded">
                    <h4 class="text-xl font-semibold mb-2">SEO Optimization</h4>
                    <p class="text-gray-600">Increase your website visibility with tailored SEO solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#035E33] text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 MyApp. All rights reserved.</p>
        </div>
    </footer>
@endsection