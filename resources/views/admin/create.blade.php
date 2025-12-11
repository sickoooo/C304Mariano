<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Project | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .admin-bg {
            background:
                radial-gradient(circle at top left, #bfdbfe, transparent 55%),
                radial-gradient(circle at bottom right, #fecaca, transparent 55%),
                #f4f5fb;
        }
    </style>
</head>
<body class="min-h-screen admin-bg text-slate-900">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white/90 border-r border-slate-200 shadow-sm hidden md:flex flex-col">
        <div class="px-6 py-5 flex items-center gap-3 border-b border-slate-100">
            <div class="h-9 w-9 rounded-2xl bg-rose-500/10 flex items-center justify-center">
                <span class="text-rose-500 font-bold text-lg">MP</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-slate-900">My Portfolio</p>
                <p class="text-[11px] text-slate-400">Admin Panel</p>
            </div>
        </div>

        <nav class="flex-1 px-4 py-4 space-y-1 text-sm">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-600 hover:bg-slate-100 hover:text-slate-900">
                <span>🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.portfolio.index') }}"
               class="flex items-center gap-2 px-3 py-2 rounded-xl bg-slate-900 text-slate-50 font-medium">
                <span>🖼️</span>
                <span>Manage Portfolio</span>
            </a>
        </nav>

        <div class="px-4 py-4 border-t border-slate-100 text-xs text-slate-400">
            <p>Logged in as</p>
            <p class="font-medium text-slate-700">Admin</p>
        </div>
    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col">

        <!-- Top bar -->
        <header class="bg-white/90 border-b border-slate-200 backdrop-blur">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between gap-4">
                <div>
                    <h1 class="text-xl md:text-2xl font-semibold text-slate-900">New Project</h1>
                    <p class="text-xs md:text-sm text-slate-500">
                        Add a new project to your portfolio. You can always edit it later.
                    </p>
                </div>

                <a href="{{ route('admin.portfolio.index') }}"
                   class="inline-flex items-center gap-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs md:text-sm font-medium px-4 py-2 transition">
                    <span>←</span>
                    <span>Back to list</span>
                </a>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-1">
            <div class="max-w-6xl mx-auto px-4 py-6 md:py-8 space-y-6">

                {{-- Validation errors --}}
                @if ($errors->any())
                    <div class="bg-rose-50 border border-rose-100 text-rose-700 text-xs rounded-2xl px-4 py-3">
                        <p class="font-semibold mb-1">Please fix the following:</p>
                        <ul class="list-disc ml-4 space-y-0.5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Main card: form + preview -->
                <section class="bg-white rounded-3xl shadow-sm border border-slate-100 px-4 py-5 md:px-6 md:py-6">
                    <div class="grid gap-8 md:grid-cols-3">

                        <!-- Form (left 2 columns) -->
                        <div class="md:col-span-2 space-y-5">
                            <h2 class="text-sm font-semibold text-slate-900">Project details</h2>

                            <form action="{{ route('admin.portfolio.store') }}" method="POST" class="space-y-4">
                                @csrf

                                <!-- Title -->
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1.5" for="title">
                                        Title *
                                    </label>
                                    <input
                                        id="title"
                                        name="title"
                                        type="text"
                                        required
                                        value="{{ old('title') }}"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                        placeholder="Portfolio Website Redesign"
                                    >
                                </div>

                                <!-- Subtitle -->
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1.5" for="subtitle">
                                        Subtitle
                                    </label>
                                    <input
                                        id="subtitle"
                                        name="subtitle"
                                        type="text"
                                        value="{{ old('subtitle') }}"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                        placeholder="Modern UI for a personal brand"
                                    >
                                </div>

                                <!-- Description -->
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1.5" for="description">
                                        Description
                                    </label>
                                    <textarea
                                        id="description"
                                        name="description"
                                        rows="4"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                        placeholder="Write a short description of the project, your role, tools used, and the outcome."
                                    >{{ old('description') }}</textarea>
                                </div>

                                <!-- Image URL -->
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1.5" for="image_url">
                                        Image URL
                                    </label>
                                    <input
                                        id="image_url"
                                        name="image_url"
                                        type="text"
                                        value="{{ old('image_url') }}"
                                        class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                        placeholder="https://your-cdn.com/project-cover.png"
                                    >
                                    <p class="mt-1 text-[11px] text-slate-400">
                                        This URL will be used directly on your public portfolio page.
                                    </p>
                                </div>

                                <!-- Links -->
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block text-xs font-medium text-slate-600 mb-1.5" for="github_url">
                                            GitHub URL
                                        </label>
                                        <input
                                            id="github_url"
                                            name="github_url"
                                            type="text"
                                            value="{{ old('github_url') }}"
                                            class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                            placeholder="https://github.com/you/project"
                                        >
                                    </div>

                                    <div>
                                        <label class="block text-xs font-medium text-slate-600 mb-1.5" for="live_url">
                                            Live URL
                                        </label>
                                        <input
                                            id="live_url"
                                            name="live_url"
                                            type="text"
                                            value="{{ old('live_url') }}"
                                            class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                            placeholder="https://yourproject.com"
                                        >
                                    </div>
                                </div>

                                <!-- Sort order -->
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div>
                                        <label class="block text-xs font-medium text-slate-600 mb-1.5" for="sort_order">
                                            Sort order
                                        </label>
                                        <input
                                            id="sort_order"
                                            name="sort_order"
                                            type="number"
                                            value="{{ old('sort_order') }}"
                                            class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400"
                                            placeholder="1"
                                        >
                                        <p class="mt-1 text-[11px] text-slate-400">
                                            Lower numbers appear first on your portfolio page.
                                        </p>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="pt-3 flex items-center gap-3">
                                    <button
                                        type="submit"
                                        class="inline-flex items-center justify-center rounded-xl bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium px-5 py-2.5 transition"
                                    >
                                        Save project
                                    </button>

                                    <a href="{{ route('admin.portfolio.index') }}"
                                       class="text-xs text-slate-500 hover:text-slate-800">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>

                        <!-- Preview card (right column) -->
                        <div class="space-y-4">
                            <h2 class="text-sm font-semibold text-slate-900">Preview</h2>

                            <div class="bg-slate-50 rounded-2xl border border-slate-100 px-4 py-4 flex flex-col gap-3">
                                <div class="aspect-video rounded-xl bg-slate-200 flex items-center justify-center text-slate-400 text-xs">
                                    Project cover preview
                                </div>

                                <div class="space-y-1">
                                    <p class="text-[11px] uppercase tracking-wide text-rose-400 font-semibold">
                                        Portfolio
                                    </p>
                                    <p class="text-sm font-semibold text-slate-900">
                                        {{ old('title', 'Project Title') }}
                                    </p>
                                    <p class="text-xs text-slate-500 line-clamp-3">
                                        {{ old('subtitle', 'Short and catchy subtitle for your project goes here.') }}
                                    </p>
                                </div>

                                <div class="flex gap-2 flex-wrap pt-1">
                                    <span class="inline-flex items-center rounded-full bg-slate-900 text-white text-[11px] px-3 py-1">
                                        View case study
                                    </span>
                                    <span class="inline-flex items-center rounded-full bg-slate-200 text-slate-700 text-[11px] px-3 py-1">
                                        Live demo
                                    </span>
                                    <span class="inline-flex items-center rounded-full bg-slate-200 text-slate-700 text-[11px] px-3 py-1">
                                        GitHub
                                    </span>
                                </div>
                            </div>

                            <p class="text-[11px] text-slate-400">
                                This is a visual approximation of how the project may appear on your public portfolio page.
                            </p>
                        </div>

                    </div>
                </section>
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-200 bg-white/80 mt-4">
            <div class="max-w-6xl mx-auto px-4 py-3 text-[11px] text-slate-400 flex items-center justify-between">
                <span>© {{ date('Y') }} Aelloren • Admin</span>
                <span>Project Creator</span>
            </div>
        </footer>

    </div>
</div>

</body>
</html>