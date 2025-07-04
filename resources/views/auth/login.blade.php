@extends('layouts.home')
@section('content')
<div class="max-w-md w-full auth-container rounded-2xl shadow-xl overflow-hidden">
        <div class="p-10">
            <!-- Error Alert (shown when backend returns errors) -->
            <div id="errorAlert" class="hidden bg-error bg-opacity-10 border-l-4 border-error text-error p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <div>
                        <h3 class="font-medium" id="errorAlertTitle">There were some errors with your submission</h3>
                        <ul class="list-disc list-inside text-sm mt-1" id="errorList"></ul>
                    </div>
                </div>
            </div>

            <!-- Success Message (shown after successful registration) -->
            <div id="successAlert" class="hidden bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <div>
                        <h3 class="font-medium">Registration successful!</h3>
                        <p class="text-sm mt-1">Please check your email to verify your account.</p>
                    </div>
                </div>
            </div>

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Create an account</h1>
                <p class="text-gray-600">
                    Already have an account?
                    <a href="#" class="text-primary font-medium hover:underline">Login</a>
                </p>
            </div>

            <!-- Social Login -->
            <div class="mb-6">
                <button type="button" class="w-full flex items-center justify-center gap-2 bg-white text-gray-700 py-3 px-4 rounded-lg border border-gray-200 hover:border-gray-300 transition-all">
                    <i class="fab fa-google text-red-500"></i>
                    Continue with Google
                </button>
            </div>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-1 border-t border-gray-300"></div>
                <span class="px-4 text-gray-500">or</span>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>

            <!-- Form -->
            <form id="registrationForm" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input
                            type="text"
                            id="firstName"
                            name="first_name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primaryLight transition-all"
                            placeholder="John"
                        >
                        <div id="firstNameError" class="error-message text-xs text-error mt-1 hidden"></div>
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input
                            type="text"
                            id="lastName"
                            name="last_name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primaryLight transition-all"
                            placeholder="Doe"
                        >
                        <div id="lastNameError" class="error-message text-xs text-error mt-1 hidden"></div>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primaryLight transition-all"
                        placeholder="your@email.com"
                    >
                    <div id="emailError" class="error-message text-xs text-error mt-1 hidden"></div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primaryLight transition-all pr-10"
                            placeholder="••••••••"
                        >
                        <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePasswordVisibility()">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div id="passwordError" class="error-message text-xs text-error mt-1 hidden"></div>
                    <p class="mt-1 text-xs text-gray-500">Minimum 8 characters with at least one number</p>
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-opacity-90 text-white py-3 px-4 rounded-lg font-medium transition-all mt-2 flex items-center justify-center">
                    <span id="submitText">Create Account</span>
                    <svg id="submitSpinner" class="hidden animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
        </div>
</div>
@endSection
