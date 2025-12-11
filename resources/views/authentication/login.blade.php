<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | My Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* soft background similar to your portfolio page */
        .page-bg {
            background:
                radial-gradient(circle at top left, #bfdbfe, transparent 55%),
                radial-gradient(circle at bottom right, #fecaca, transparent 55%),
                #f4f5fb;
        }
    </style>
</head>
<body class="min-h-screen page-bg flex items-center justify-center px-4">

    <div class="w-full max-w-5xl space-y-8">

        <!-- main card -->
        <div class="bg-white/90 backdrop-blur rounded-3xl shadow-xl border border-slate-100 px-6 py-8 md:px-10 md:py-10">
            <div class="grid gap-10 md:grid-cols-2 items-center">

                <!-- left side: text, similar to hero -->
                <div class="space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full bg-rose-50 text-rose-500 text-xs font-semibold px-3 py-1">
                        <span class="h-1.5 w-1.5 rounded-full bg-rose-500"></span>
                        Welcome back
                    </span>

                    <h1 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                        Sign in to manage<br>your portfolio.
                    </h1>

                    <p class="text-sm md:text-base text-slate-500">
                        Access your dashboard, update projects, and keep your personal brand looking sharp.
                    </p>

                    <div class="flex items-center gap-3 text-xs text-slate-400">
                        <div class="flex -space-x-2">
                            <div class="h-7 w-7 rounded-full bg-rose-200"></div>
                            <div class="h-7 w-7 rounded-full bg-sky-200"></div>
                            <div class="h-7 w-7 rounded-full bg-emerald-200"></div>
                        </div>
                        <span>Trusted by creatives just like you.</span>
                    </div>
                </div>

                <!-- right side: form -->
                <div class="bg-slate-50/60 rounded-2xl border border-slate-100 px-5 py-6 md:px-6 md:py-7">
                    <div class="mb-5">
                        <h2 class="text-lg font-semibold text-slate-900">Login</h2>
                        <p class="text-xs text-slate-500 mt-1">Enter your details to continue.</p>
                    </div>

                    <!-- Laravel status -->
                    @if (session('status'))
                        <div class="mb-4 text-xs rounded-xl bg-emerald-50 text-emerald-700 px-3 py-2">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 text-xs rounded-xl bg-rose-50 text-rose-700 px-3 py-2">
                            <ul class="list-disc ml-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-medium text-slate-600 mb-1.5">
                                Email
                            </label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-rose-400 focus:ring-2 focus:ring-rose-400/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="you@example.com"
                            >
                        </div>

                        <!-- Password -->
                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <label for="password" class="block text-xs font-medium text-slate-600">
                                    Password
                                </label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-xs text-rose-500 hover:text-rose-600">
                                        Forgot password?
                                    </a>
                                @endif
                            </div>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-rose-400 focus:ring-2 focus:ring-rose-400/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="••••••••"
                            >
                        </div>

                        <!-- Remember me -->
                        <div class="flex items-center justify-between pt-1">
                            <label class="inline-flex items-center text-xs text-slate-500">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    class="rounded border-slate-300 bg-white text-rose-500 focus:ring-rose-400/70"
                                >
                                <span class="ml-2">Remember me</span>
                            </label>
                        </div>

                        <!-- Submit -->
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center rounded-xl bg-rose-500 hover:bg-rose-600 focus:ring-2 focus:ring-rose-300 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-medium text-sm px-4 py-2.5 transition mt-2"
                        >
                            Sign in
                        </button>
                    </form>

                    <!-- Footer links -->
                    @if (Route::has('register'))
                        <p class="mt-5 text-[11px] text-center text-slate-500">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-rose-500 hover:text-rose-600 font-medium">
                                Create one
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Tiny footer -->
        <p class="text-[11px] text-center text-slate-400">
            © {{ date('Y') }} Aelloren • All rights reserved
        </p>
    </div>

</body>
</html>