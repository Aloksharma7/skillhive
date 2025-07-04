@extends('layouts.home')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 space-y-6">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800">Create an account</h2>
            <p class="mt-2 text-sm text-gray-600">
                Already have an account?
                <a href="#" class="text-primary hover:underline">Login</a>
            </p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 border border-red-300 rounded-md p-4 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form method="POST" action="#" class="space-y-4">
            @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700"> Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        autofocus
                        class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none"
                        placeholder="John"
                    >
                </div>


            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none"
                    placeholder="you@example.com"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Enter your password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none"
                    placeholder="••••••••"
                >
                <p class="text-xs text-gray-500 mt-1">Minimum 8 characters with at least one number</p>
            </div>

            <div>
                <button
                    type="submit"
                    class="w-full bg-primary text-white py-2 px-4 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition"
                >
                    Create Account
                </button>
            </div>
        </form>




        </div>
    </div>
</div>
@endsection
