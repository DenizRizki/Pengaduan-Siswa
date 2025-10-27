<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700">

    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex w-11/12 max-w-5xl">
        <!-- Gambar Samping -->
        <div class="hidden md:flex w-1/2 bg-blue-600 items-center justify-center p-8">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                 alt="Login Illustration" 
                 class="w-80 h-80 object-contain drop-shadow-lg">
        </div>

        <!-- Form Login -->
        <div class="w-full md:w-1/2 p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login Admin</h2>

            @if (session('status'))
                <div class="mb-4 p-3 bg-green-100 border border-green-300 text-green-700 rounded-md">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                        class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <!-- Tombol -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                            Forgot Password?
                        </a>
                    @endif

                    <button type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-all duration-200">
                        Log in
                    </button>
                </div>
            </form>

            <p class="text-center text-sm text-gray-500 mt-8">
                &copy; {{ date('Y') }} Sistem Pengaduan Siswa
            </p>
        </div>
    </div>

</body>
</html>
