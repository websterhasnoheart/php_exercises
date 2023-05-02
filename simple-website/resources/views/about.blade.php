@extends('layouts.default') 

@section('page-content')   
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Who is webster</h3>
            <p class="mb-3">No one</p>
            <p class="mb-3">
                Really no one.
            </p>
            <div class="text-center">
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Back to home</a>
            </div>
        </div>
    </section>
@endsection