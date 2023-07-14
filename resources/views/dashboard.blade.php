<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @auth
                    <div class="p-6">
                        <h3>Welcome, {{ Auth::user()->name }}!</h3>
                        <!-- Display user profile information -->
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                        <!-- Logout button -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-button type="submit" class="mt-4">Logout</x-button>
                        </form>
                    </div>
                @else
                    <div class="p-6">
                        <p>Please login to access the dashboard.</p>
                        <!-- Your login form or button goes here -->
                    </div>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
