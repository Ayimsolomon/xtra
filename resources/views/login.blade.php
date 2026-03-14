<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800">Create an Account</h2>

        <form wire:submit.prevent="register" x-data="{ loading: false }" @submit="loading = true">
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" wire:model.defer="name"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror">
                @error('name') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" wire:model.defer="email"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror">
                @error('email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" wire:model.defer="password"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500 @error('password') border-red-500 @enderror">
                @error('password') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" wire:model.defer="password_confirmation"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none transition duration-150 ease-in-out"
                    :class="{ 'opacity-50 cursor-not-allowed': loading }"
                    :disabled="loading">
                    <span x-show="!loading">Register</span>
                    <span x-show="loading" x-cloak>Processing...</span>
                </button>
            </div>
        </form>
    </div>
</div>

<a href="{{ route('google.login') }}" class="btn btn-google">
    Login with Google
</a>
</body>
</html>
