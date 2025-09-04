<x-guest-layout>
   
        
        <!-- Card -->
        <div 
            class="w-full max-w-md bg-white/10 dark:bg-gray-900/50 backdrop-blur-2xl rounded-3xl shadow-2xl p-8 border border-blue/20
                   opacity-0 translate-y-10 animate-fade-in-up">
            
            <!-- Avatar/Logo -->
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 flex items-center justify-center shadow-lg animate-float ring-4 ring-white/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2v2m-4 0v6m0-6h-4m0 0H8a2 2 0 00-2 2v4h12v-4a2 2 0 00-2-2h-2z"/>
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-3xl font-extrabold text-center text-black dark:text-gray-100 mb-8 drop-shadow">
                {{ __('Login to Your Account') }}
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8-4H8m12 8V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2z"/>
                            </svg>
                        </span>
                        <x-text-input id="email" 
                            class="block w-full pl-10 pr-3 py-3 rounded-xl border-0 dark:bg-gray-800/70 dark:text-gray-100 focus:ring-2 focus:ring-pink-400 shadow-sm" 
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                            placeholder="Enter your email"/>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-pink-200"/>
                </div>

                <!-- Password -->
                <div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2v2m-4 0v6m0-6h-4m0 0H8a2 2 0 00-2 2v4h12v-4a2 2 0 00-2-2h-2z"/>
                            </svg>
                        </span>
                        <x-text-input id="password" 
                            class="block w-full pl-10 pr-3 py-3 rounded-xl border-0 dark:bg-gray-800/70 dark:text-gray-100 focus:ring-2 focus:ring-pink-400 shadow-sm" 
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Enter your password"/>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-pink-200"/>
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label for="remember_me" class="inline-flex items-center text-white dark:text-gray-300">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 dark:border-gray-700 text-pink-500 focus:ring-pink-400">
                        <span class="ml-2">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" 
                           class="text-black-200 hover:text-white transition duration-200">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 
                           relative overflow-hidden text-white font-semibold shadow-lg transform hover:scale-105 transition duration-300">
                    <span class="relative z-10">Log in</span>
                    <span class="absolute inset-0 bg-white/30 blur-md -skew-x-12 translate-x-[-100%] animate-shine"></span>
                </button>
            </form>
        </div>
    </div>

    <!-- Animations -->
    <style>
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fade-in-up 0.9s ease-out forwards; }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }

        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(200%); }
        }
        .animate-shine { animation: shine 2.5s infinite; }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</x-guest-layout>
