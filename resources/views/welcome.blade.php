@extends('layouts.app')

@section('title', 'Welcome to Self Evaluation Tool')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-8 text-black">Discover Your True Self</h1>
    <p class="text-xl text-center mb-12 text-black">Explore various personality traits and improve yourself with our comprehensive self-evaluation tool.</p>
    
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-saffron rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-black">Personality Assessments</h2>
            <p class="text-black mb-4">Choose from popular personality trait categories:</p>
            <ul class="space-y-4">
                <li class="bg-saffron-400 text-black p-4 rounded" x-data="{ hasResult: false, isEditing: false }">
                    <h3 class="font-semibold mb-2">Myers-Briggs Type Indicator (MBTI)</h3>
                    <div x-show="!hasResult">
                        <input type="text" placeholder="Enter your MBTI type" class="w-full px-2 py-1 text-black rounded mb-2">
                        <button @click="hasResult = true" class="bg-persian-green-600 text-white px-3 py-1 rounded mr-2">Enter</button>
                        <a href="https://www.16personalities.com/free-personality-test" target="_blank" class="bg-burnt-sienna text-white px-3 py-1 rounded inline-block">Take the test</a>
                    </div>
                    <div x-show="hasResult" class="bg-persian-green-100 p-2 rounded">
                        <p x-show="!isEditing" class="text-black">Your MBTI type: <span class="font-bold">INTJ</span></p>
                        <textarea x-show="isEditing" class="w-full px-2 py-1 text-black rounded mb-2">INTJ</textarea>
                        <button @click="isEditing = !isEditing" x-text="isEditing ? 'Save' : 'Edit'" class="bg-persian-green-600 text-white px-3 py-1 rounded"></button>
                    </div>
                </li>
                <li class="bg-saffron-300 text-black p-4 rounded" x-data="{ hasResult: false, isEditing: false }">
                    <h3 class="font-semibold mb-2">Big Five</h3>
                    <div x-show="!hasResult">
                        <input type="text" placeholder="Enter your Big Five scores" class="w-full px-2 py-1 text-black rounded mb-2">
                        <button @click="hasResult = true" class="bg-persian-green-600 text-white px-3 py-1 rounded mr-2">Enter</button>
                        <a href="https://bigfive-test.com/" target="_blank" class="bg-burnt-sienna text-white px-3 py-1 rounded inline-block">Take the test</a>
                    </div>
                    <div x-show="hasResult" class="bg-persian-green-100 p-2 rounded">
                        <p x-show="!isEditing" class="text-black">Your Big Five scores: <span class="font-bold">O:80, C:70, E:60, A:75, N:40</span></p>
                        <textarea x-show="isEditing" class="w-full px-2 py-1 text-black rounded mb-2">O:80, C:70, E:60, A:75, N:40</textarea>
                        <button @click="isEditing = !isEditing" x-text="isEditing ? 'Save' : 'Edit'" class="bg-persian-green-600 text-white px-3 py-1 rounded"></button>
                    </div>
                </li>
                <li class="bg-saffron-200 text-black p-4 rounded" x-data="{ hasResult: false, isEditing: false }">
                    <h3 class="font-semibold mb-2">Enneagram</h3>
                    <div x-show="!hasResult">
                        <input type="text" placeholder="Enter your Enneagram type" class="w-full px-2 py-1 text-black rounded mb-2">
                        <button @click="hasResult = true" class="bg-persian-green-600 text-white px-3 py-1 rounded mr-2">Enter</button>
                        <a href="https://www.eclecticenergies.com/enneagram/test" target="_blank" class="bg-burnt-sienna text-white px-3 py-1 rounded inline-block">Take the test</a>
                    </div>
                    <div x-show="hasResult" class="bg-persian-green-100 p-2 rounded">
                        <p x-show="!isEditing" class="text-black">Your Enneagram type: <span class="font-bold">Type 5</span></p>
                        <textarea x-show="isEditing" class="w-full px-2 py-1 text-black rounded mb-2">Type 5</textarea>
                        <button @click="isEditing = !isEditing" x-text="isEditing ? 'Save' : 'Edit'" class="bg-persian-green-600 text-white px-3 py-1 rounded"></button>
                    </div>
                </li>
                <li class="bg-saffron-100 text-black p-4 rounded" x-data="{ hasResult: false, isEditing: false }">
                    <h3 class="font-semibold mb-2">Attachment Theory Styles</h3>
                    <div x-show="!hasResult">
                        <input type="text" placeholder="Enter your Attachment Style" class="w-full px-2 py-1 text-black rounded mb-2">
                        <button @click="hasResult = true" class="bg-persian-green-600 text-white px-3 py-1 rounded mr-2">Enter</button>
                        <a href="https://www.attachmentproject.com/attachment-style-quiz/" target="_blank" class="bg-burnt-sienna text-white px-3 py-1 rounded inline-block">Take the test</a>
                    </div>
                    <div x-show="hasResult" class="bg-persian-green-100 p-2 rounded">
                        <p x-show="!isEditing" class="text-black">Your Attachment Style: <span class="font-bold">Secure</span></p>
                        <textarea x-show="isEditing" class="w-full px-2 py-1 text-black rounded mb-2">Secure</textarea>
                        <button @click="isEditing = !isEditing" x-text="isEditing ? 'Save' : 'Edit'" class="bg-persian-green-600 text-white px-3 py-1 rounded"></button>
                    </div>
                </li>
            </ul>
        </div>
        <div class="bg-sandy-brown rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-black">Self-Improvement</h2>
            <p class="text-black mb-4">Get personalized insights and tips to become a better version of yourself:</p>
            <ul class="space-y-2">
                <li class="bg-sandy-brown-400 text-black p-2 rounded">Identify strengths and areas for growth</li>
                <li class="bg-sandy-brown-300 text-black p-2 rounded">Receive tailored improvement suggestions</li>
                <li class="bg-sandy-brown-200 text-black p-2 rounded">Track your progress over time</li>
            </ul>
        </div>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('register') }}" class="bg-burnt-sienna hover:bg-burnt-sienna-700 text-white font-bold py-3 px-6 rounded-full text-lg transition">
            Start Your Journey
        </a>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endpush
@endsection