@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex item-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Learn to <span class="text-pink-500">Code</span></h2>
            <h3 class="text-2xl sm:text-4xl italic"> With Webster</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto flex flex-col items-center justify-center">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray">Description</h4>
            <p class="mb-6 text-center">
                Opportunity for growth:  
                I think there is no better industry than software engineering that can offer 
                that many opportunities to people without any background to change their lives, 
                value creativity and problem-solving skills and help them grow 
                both financially and personally.
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500">Learn more</a>
        </div>
    </section>
    <section class="py-20">
        <div class="lg:max-w-screen-lg mx-auto">
            <h3 class="text-4xl font-bold mb-6 text-center">What are you learning?</div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full sm:w-1/2 mb-3 px-2">
                        <div class="p-4 bg-gray-500 h-full rounded-lg">
                            <h3 class="text-xl font-bold mb-3">
                                Game development
                            </h3>
                            <p class="text-gray-200 mb-3">
                                Technical challenges and collaborative environment: 
                                As a software engineer, you will probably face various technical challenges 
                                that can be both intellectually stimulating and rewarding. 
                                Also by being part of a team, you can collaborative with other professionals 
                                and smart brains and solve your daily problems collectively in which the 
                                process can always inspire creativity, innovative solutions and great things 
                                can happen anytime.
                            </p>
                            <a href="{{url('https://youtube.com')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500">Learn now</a>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 mb-3 px-2">
                        <div class="p-4 bg-gray-500 h-full rounded-lg">
                            <h3 class="text-xl font-bold mb-3">
                                Web development
                            </h3>
                            <p class="text-gray-200 mb-3">
                                Technical challenges and collaborative environment: 
                                As a software engineer, you will probably face various technical challenges 
                                that can be both intellectually stimulating and rewarding. 
                                Also by being part of a team, you can collaborative with other professionals 
                                and smart brains and solve your daily problems collectively in which the 
                                process can always inspire creativity, innovative solutions and great things 
                                can happen anytime.
                            </p>
                            <a href="{{url('https://youtube.com')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500">Learn now</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where to Learn</h3>
            <h3 class="text-xl mb-6">Learn to code with Youtube</h3>
            <div class="-mx-2 sm:flex">
                <a href="{{url('https//youtube.com')}}" target="_blank" rel = "noooo" class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
                    <span "mr-2">Go</span> Learn <strong>Web</strong> Development
                </a>
                <a href="{{url('https//youtube.com')}}" target="_blank" rel = "noooo" class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
                    <span "mr-2">Go</span> Learn <strong>Game</strong> Development
                </a>
            </div>
        </div>
    </section>
    
@endsection
