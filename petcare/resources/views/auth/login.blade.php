<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Tailwind CDN (use Vite in production) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-lg px-8 py-10">

            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 rounded-full bg-indigo-600 flex items-center justify-center text-white text-2xl font-bold">
                    B
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">
                Sign in to your account
            </h2>

            <!-- Form -->
            <form method="POST" action="{{ route('user-login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Email address
                    </label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="name@example.com"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition duration-200"
                >
                    Sign In
                </button>

                <!-- Forgot Password -->
                <div class="text-center">
                    <a href="#" class="text-sm text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Register -->
                <p class="text-center text-sm text-gray-600">
                    Don’t have an account?
                    <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">
                        Register
                    </a>
                </p>
            </form>

            <!-- Footer -->
            <p class="text-center text-xs text-gray-400 mt-6">
                © 2017–2025
            </p>
        </div>
    </div>

</body>
</html>
