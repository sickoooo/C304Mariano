<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users | Admin</title>
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
               class="flex items-center gap-2 px-3 py-2 rounded-xl text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors">
                <span>🖼️</span>
                <span>Manage Portfolio</span>
            </a>

            <a href="{{ route('admin.users.index') }}" 
               class="flex items-center gap-2 px-3 py-2 rounded-xl bg-slate-900 text-slate-50 font-medium transition-colors">
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
                    <h1 class="text-xl md:text-2xl font-semibold text-slate-900">Manage Users</h1>
                    <p class="text-xs md:text-sm text-slate-500">View, add, and remove system administrators.</p>
                </div>
                <a href="{{ route('admin.users.create') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-500 hover:bg-indigo-600 text-white text-xs md:text-sm font-medium px-4 py-2 transition">
                    <span>＋</span><span>New User</span>
                </a>
            </div>
        </header>

        <main class="flex-1">
            <div class="max-w-6xl mx-auto px-4 py-6 md:py-8 space-y-6">
                <section class="bg-white rounded-2xl shadow-sm border border-slate-100 px-4 py-4 md:px-6 md:py-5">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-xs">
                            <thead>
                                <tr class="border-b border-slate-100 text-slate-400">
                                    <th class="text-left py-2 pr-4 font-medium">Name</th>
                                    <th class="text-left py-2 pr-4 font-medium">Email</th>
                                    <th class="text-left py-2 pr-4 font-medium">Role</th>
                                    <th class="text-right py-2 font-medium">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse($users as $user)
                                <tr>
                                    <td class="py-3 pr-4"><p class="font-medium text-slate-800">{{ $user->name }}</p></td>
                                    <td class="py-3 pr-4 text-slate-600">{{ $user->email }}</td>
                                    <td class="py-3 pr-4">
                                        @if($user->is_admin)
                                            <span class="px-2 py-0.5 rounded-full bg-indigo-50 text-indigo-600 text-[11px] font-medium">Admin</span>
                                        @else
                                            <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 text-[11px] font-medium">User</span>
                                        @endif
                                    </td>
                                    <td class="py-3 text-right">
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Delete this user?');">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-[11px] text-rose-500 hover:text-rose-600 font-medium">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr><td colspan="4" class="py-6 text-center text-slate-400">No users found.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>
</body>
</html>