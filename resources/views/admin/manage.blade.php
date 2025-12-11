<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Portfolio | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .admin-bg {
            background: radial-gradient(circle at top left, #bfdbfe, transparent 55%),
                        radial-gradient(circle at bottom right, #fecaca, transparent 55%),
                        #f4f5fb;
        }
    </style>
</head>
<body class="min-h-screen admin-bg text-slate-900">

<div class="min-h-screen flex">

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
               class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors">
                <span>🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.portfolio.index') }}"
               class="flex items-center gap-2 px-3 py-2 rounded-xl bg-slate-900 text-slate-50 font-medium transition-colors">
                <span>🖼️</span>
                <span>Manage Portfolio</span>
            </a>

            <a href="{{ route('admin.users.index') }}" 
               class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span>Manage Users</span>
            </a>
        </nav>

        <div class="px-4 py-4 border-t border-slate-100 text-xs text-slate-400">
            <p>Logged in as</p>
            <p class="font-medium text-slate-700">Admin</p>
            <form action="{{ route('logout') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-rose-600 hover:bg-rose-50 hover:text-rose-700 transition text-left text-sm font-medium">
                    <span>🚪</span>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="bg-white/90 border-b border-slate-200 backdrop-blur">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between gap-4">
                <div>
                    <h1 class="text-xl md:text-2xl font-semibold text-slate-900">Manage Portfolio</h1>
                    <p class="text-xs md:text-sm text-slate-500">Create, edit and organize the projects that appear on your public site.</p>
                </div>
                <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-500 hover:bg-indigo-600 text-white text-xs md:text-sm font-medium px-4 py-2 transition">
                    <span>＋</span><span>New Project</span>
                </a>
            </div>
        </header>

        <main class="flex-1">
            <div class="max-w-6xl mx-auto px-4 py-6 md:py-8 space-y-6">
                <section class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4 md:px-6 md:py-5">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-slate-800">Projects</p>
                            <p class="text-xs text-slate-500">@isset($projects) Showing {{ $projects->count() }} project(s) @else Manage all your portfolio items from here. @endisset</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                            <div class="relative flex-1">
                                <span class="absolute inset-y-0 left-3 flex items-center text-slate-400 text-xs">🔍</span>
                                <input type="text" name="search" placeholder="Search projects..." class="w-full rounded-xl border border-slate-200 bg-white pl-8 pr-3 py-2 text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400">
                            </div>
                            <select name="status" class="rounded-xl border border-slate-200 bg-white px-3 py-2 text-xs text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-300/60 focus:border-indigo-400">
                                <option value="">All statuses</option><option value="published">Published</option><option value="draft">Draft</option><option value="featured">Featured</option>
                            </select>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4 md:px-6 md:py-5">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-xs">
                            <thead>
                            <tr class="border-b border-slate-100 text-slate-400">
                                <th class="text-left py-2 pr-4 font-medium">Title</th><th class="text-left py-2 pr-4 font-medium">Category</th><th class="text-left py-2 pr-4 font-medium">Status</th><th class="text-left py-2 pr-4 font-medium">Updated</th><th class="text-right py-2 font-medium">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                            @forelse ($projects ?? [] as $project)
                                <tr>
                                    <td class="py-2 pr-4"><p class="font-medium text-slate-800">{{ $project->title }}</p><p class="text-[11px] text-slate-400 line-clamp-1">{{ $project->subtitle ?? $project->short_description ?? '' }}</p></td>
                                    <td class="py-2 pr-4 text-slate-600">{{ $project->category ?? '—' }}</td>
                                    <td class="py-2 pr-4">@php $status = $project->status ?? 'draft'; @endphp @if ($status === 'published') <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-medium">Published</span> @elseif ($status === 'featured') <span class="px-2 py-0.5 rounded-full bg-sky-50 text-sky-600 text-[11px] font-medium">Featured</span> @else <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-600 text-[11px] font-medium">Draft</span> @endif</td>
                                    <td class="py-2 pr-4 text-slate-500">{{ $project->updated_at?->diffForHumans() ?? '—' }}</td>
                                    <td class="py-2 text-right">
                                        <div class="inline-flex items-center gap-2">
                                            <a href="{{ route('admin.portfolio.edit', $project) }}" class="text-[11px] text-indigo-500 hover:text-indigo-600 font-medium">Edit</a>
                                            <form action="{{ route('admin.portfolio.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="text-[11px] text-rose-500 hover:text-rose-600 font-medium">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="py-6 text-center text-xs text-slate-400">No projects yet. Click <span class="font-medium text-slate-600">“New Project”</span> to create your first one.</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if (isset($projects) && method_exists($projects, 'links')) <div class="mt-4">{{ $projects->links() }}</div> @endif
                </section>
            </div>
        </main>
        <footer class="border-t border-slate-200 bg-white/80 mt-4"><div class="max-w-6xl mx-auto px-4 py-3 text-[11px] text-slate-400 flex items-center justify-between"><span>© {{ date('Y') }} Aelloren • Admin</span><span>Portfolio Manager</span></div></footer>
    </div>
</div>
</body>
</html>