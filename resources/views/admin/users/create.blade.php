<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Add New User</h2>
            
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" class="w-full px-3 py-2 border rounded text-gray-700 focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" class="w-full px-3 py-2 border rounded text-gray-700 focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border rounded text-gray-700 focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                    <select name="role" class="w-full px-3 py-2 border rounded text-gray-700 focus:outline-none">
                        <option value="0">Regular User</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-500">
                        Create User
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="text-gray-500 text-sm hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>