<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | My Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
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

        <!-- Main Card -->
        <div class="bg-white/90 backdrop-blur rounded-3xl shadow-xl border border-slate-100 px-6 py-8 md:px-10 md:py-10">
            <div class="grid gap-10 md:grid-cols-2 items-center">

                <!-- Left side (hero-style text) -->
                <div class="space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full bg-sky-50 text-sky-600 text-xs font-semibold px-3 py-1">
                        <span class="h-1.5 w-1.5 rounded-full bg-sky-600"></span>
                        Join the community
                    </span>

                    <h1 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                        Create an account<br>and start building.
                    </h1>

                    <p class="text-sm md:text-base text-slate-500">
                        Get access to your dashboard, manage your portfolio projects, and personalize your online brand.
                    </p>

                    <div class="flex items-center gap-3 text-xs text-slate-400">
                        <div class="flex -space-x-2">
                            <div class="h-7 w-7 rounded-full bg-rose-200"></div>
                            <div class="h-7 w-7 rounded-full bg-sky-200"></div>
                            <div class="h-7 w-7 rounded-full bg-emerald-200"></div>
                        </div>
                        <span>Join thousands of creatives today.</span>
                    </div>
                </div>

                <!-- Right side (form) -->
                <div class="bg-slate-50/60 rounded-2xl border border-slate-100 px-5 py-6 md:px-6 md:py-7">

                    <div class="mb-5">
                        <h2 class="text-lg font-semibold text-slate-900">Create account</h2>
                        <p class="text-xs text-slate-500 mt-1">Fill out your information below.</p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 text-xs rounded-xl bg-rose-50 text-rose-700 px-3 py-2">
                            <ul class="list-disc ml-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf

                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-xs font-medium text-slate-600 mb-1.5">
                                Full Name
                            </label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-sky-400 focus:ring-2 focus:ring-sky-300/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="John Doe"
                            >
                        </div>

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
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-sky-400 focus:ring-2 focus:ring-sky-300/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="you@example.com"
                            >
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-xs font-medium text-slate-600 mb-1.5">
                                Password
                            </label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-sky-400 focus:ring-2 focus:ring-sky-300/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="••••••••"
                            >
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-xs font-medium text-slate-600 mb-1.5">
                                Confirm Password
                            </label>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                class="w-full rounded-xl bg-white border border-slate-200 focus:border-sky-400 focus:ring-2 focus:ring-sky-300/40 text-slate-900 placeholder-slate-400 px-4 py-2.5 text-sm outline-none transition"
                                placeholder="••••••••"
                            >
                        </div>

                        <!-- Submit -->
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center rounded-xl bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-medium text-sm px-4 py-2.5 transition mt-2"
                        >
                            Create account
                        </button>
                    </form>

                    <!-- Footer link -->
                    <p class="mt-5 text-[11px] text-center text-slate-500">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-sky-500 hover:text-sky-600 font-medium">
                            Sign in
                        </a>
                    </p>

                </div>

            </div>
        </div>

        <p class="text-[11px] text-center text-slate-400">
            © {{ date('Y') }} Aelloren • All rights reserved
        </p>
    </div>

</body>
</html>