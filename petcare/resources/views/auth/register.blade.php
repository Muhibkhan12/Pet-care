<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100 px-4">

    <div class="w-full max-w-lg">
        <div class="bg-white rounded-xl shadow-lg px-8 py-10">

            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <div class="w-14 h-14 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xl font-bold">
                    +
                </div>
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">
                Create your account
            </h2>

            <!-- Form -->
            <form method="POST"
      action="{{ route('user-register') }}"
      enctype="multipart/form-data"
      class="space-y-5">

    @csrf

    <!-- Name -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" name="name" required
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Email -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" required
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Phone -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Phone</label>
        <input type="text" name="phone" required
               placeholder="+92 3XX XXXXXXX"
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Image -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Profile Image</label>
        <input type="file" name="image"
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Password -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Confirm Password -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" name="password_confirmation" required
               class="mt-1 w-full rounded-lg border-gray-300 focus:border-purple-600 focus:ring-purple-600">
    </div>

    <!-- Submit -->
    <button type="submit"
            class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition">
        Create Account
    </button>
</form>


            <!-- Footer -->
            <p class="text-center text-xs text-gray-400 mt-6">
                © 2025 Your Company. All rights reserved.
            </p>

        </div>
    </div>

</body>
</html>
