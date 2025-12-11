<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | My Portfolio</title>
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
               class="flex items-center gap-2 px-3 py-2 rounded-xl bg-slate-900 text-slate-50 font-medium transition-colors">
                <span>🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.portfolio.index') }}"
               class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors">
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
                    <h1 class="text-xl md:text-2xl font-semibold text-slate-900">Dashboard</h1>
                    <p class="text-xs md:text-sm text-slate-500">Overview of your portfolio performance and admin tools.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div class="text-right hidden sm:block">
                            <p class="text-xs font-medium text-slate-700">Admin</p>
                            <p class="text-[11px] text-slate-400">admin@example.com</p>
                        </div>
                        <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-rose-400 to-indigo-500 flex items-center justify-center text-xs font-semibold text-white">AD</div>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <div class="max-w-6xl mx-auto px-4 py-6 md:py-8 space-y-8">
                <section class="grid gap-4 md:grid-cols-4">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                        <p class="text-xs text-slate-500">Total Projects</p>
                        <p class="mt-2 text-2xl font-semibold text-slate-900">0</p>
                        <p class="mt-1 text-[11px] text-emerald-500">0 this month</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                        <p class="text-xs text-slate-500">Featured Projects</p>
                        <p class="mt-2 text-2xl font-semibold text-slate-900">0</p>
                        <p class="mt-1 text-[11px] text-slate-400">Highlighted on homepage</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                        <p class="text-xs text-slate-500">Drafts</p>
                        <p class="mt-2 text-2xl font-semibold text-slate-900">0</p>
                        <p class="mt-1 text-[11px] text-amber-500">Waiting to be published</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                        <p class="text-xs text-slate-500">Messages</p>
                        <p class="mt-2 text-2xl font-semibold text-slate-900">0</p>
                        <p class="mt-1 text-[11px] text-rose-500">0 unread</p>
                    </div>
                </section>

                <section class="grid gap-6 md:grid-cols-3">
                    <div class="md:col-span-1 space-y-4">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                            <h2 class="text-sm font-semibold text-slate-900">Quick Actions</h2>
                            <p class="text-xs text-slate-500 mt-1">Manage the most important parts of your portfolio.</p>
                            <div class="mt-4 space-y-2">
                                <a href="{{ route('admin.portfolio.index') }}" class="w-full inline-flex items-center justify-between rounded-xl bg-indigo-500 hover:bg-indigo-600 text-white text-xs font-medium px-3 py-2 transition">
                                    <span>Manage Portfolio</span><span>↗</span>
                                </a>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4">
                            <h3 class="text-sm font-semibold text-slate-900">System Status</h3>
                            <ul class="mt-3 space-y-2 text-xs">
                                <li class="flex items-center justify-between"><span class="text-slate-500">Site visibility</span><span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-medium">Online</span></li>
                                <li class="flex items-center justify-between"><span class="text-slate-500">Backups</span><span class="text-[11px] text-slate-600">Last: 2 hours ago</span></li>
                                <li class="flex items-center justify-between"><span class="text-slate-500">Version</span><span class="text-[11px] text-slate-600">v1.0.0</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="md:col-span-2 bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4 md:px-6 md:py-5">
                        <div class="flex items-center justify-between gap-2 mb-4">
                            <div><h2 class="text-sm font-semibold text-slate-900">Recent Portfolio Updates</h2><p class="text-xs text-slate-500">Latest changes to your projects.</p></div>
                            <button class="text-xs text-slate-500 hover:text-slate-800">View all</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-xs">
                                <thead>
                                <tr class="border-b border-slate-100 text-slate-400">
                                    <th class="text-left py-2 pr-4 font-medium">Project</th>
                                    <th class="text-left py-2 pr-4 font-medium">Status</th>
                                    <th class="text-left py-2 pr-4 font-medium">Last updated</th>
                                    <th class="text-right py-2 font-medium">Actions</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td class="py-2 pr-4"><p class="font-medium text-slate-800">Portfolio Redesign</p><p class="text-[11px] text-slate-400">Web Design</p></td>
                                    <td class="py-2 pr-4"><span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-medium">Published</span></td>
                                    <td class="py-2 pr-4 text-slate-500">3 hours ago</td>
                                    <td class="py-2 text-right"><button class="text-[11px] text-indigo-500 hover:text-indigo-600">Edit</button></td>
                                </tr>
                                <tr>
                                    <td class="py-2 pr-4"><p class="font-medium text-slate-800">Clothing brand</p><p class="text-[11px] text-slate-400">UI/UX</p></td>
                                    <td class="py-2 pr-4"><span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-600 text-[11px] font-medium">Draft</span></td>
                                    <td class="py-2 pr-4 text-slate-500">3 month ago</td>
                                    <td class="py-2 text-right"><button class="text-[11px] text-indigo-500 hover:text-indigo-600">Edit</button></td>
                                </tr>
                                <tr>
                                    <td class="py-2 pr-4"><p class="font-medium text-slate-800">Air bnb prototype</p><p class="text-[11px] text-slate-400">Web Design</p></td>
                                    <td class="py-2 pr-4"><span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-medium">Published</span></td>
                                    <td class="py-2 pr-4 text-slate-500">6 months ago</td>
                                    <td class="py-2 text-right"><button class="text-[11px] text-indigo-500 hover:text-indigo-600">Edit</button></td>
                                </tr>
                                <tr>
                                    <td class="py-2 pr-4"><p class="font-medium text-slate-800">Home cook</p><p class="text-[11px] text-slate-400">Application</p></td>
                                    <td class="py-2 pr-4"><span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-medium">Published</span></td>
                                    <td class="py-2 pr-4 text-slate-500">6 months ago</td>
                                    <td class="py-2 text-right"><button class="text-[11px] text-indigo-500 hover:text-indigo-600">Edit</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="border-t border-slate-200 bg-white/80 mt-4"><div class="max-w-6xl mx-auto px-4 py-3 text-[11px] text-slate-400 flex items-center justify-between"><span>© {{ date('Y') }} Aelloren • Admin</span></div></footer>
    </div>
</div>
</body>
</html>