<?php
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-item:hover {
            transform: translateX(5px);
        }
        
        .sidebar-item.active {
            background-color: #f0f9ff;
            color: #3b82f6;
            border-left-color: #3b82f6;
        }
        
        .sidebar-item.active i {
            color: #3b82f6;
        }
        
        .main-content {
            margin-left: 16rem;
            margin-top: 5rem;
        }
        
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }
        
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .role-admin { border-left: 4px solid #3b82f6; }
        .role-vet { border-left: 4px solid #10b981; }
        .role-user { border-left: 4px solid #f59e0b; }
        
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-active {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .status-inactive {
            background-color: #fef3c7;
            color: #92400e;
        }
        
        .status-pending {
            background-color: #e0e7ff;
            color: #3730a3;
        }
        
        body {
            background-color: #f9fafb;
        }
        
        .page-content {
            padding-left: 16rem;
            padding-top: 5rem;
        }
        
        @media (max-width: 768px) {
            .page-content {
                padding-left: 0;
            }
        }
        
        nav {
            z-index: 50;
        }
        
        .sidebar {
            z-index: 40;
        }
        
        .modal {
            z-index: 60;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    @include('layouts.adminSidebar')

    <!-- Main Content Area -->
    <div class="page-content">
        <main class="p-4 md:p-6">
            <!-- Page Header -->
            <div class="mb-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900">User Management</h1>
                        <p class="text-gray-600 mt-2">Manage user accounts, roles, and permissions across the system</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <div class="relative">
                            <input type="text" placeholder="Search users..." class="pl-10 pr-4 py-2.5 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-full md:w-64" id="searchInput">
                            <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg font-medium flex items-center space-x-2 transition-colors">
                            <i class="fas fa-plus"></i>
                            <span class="hidden md:inline">Add User</span>
                        </button>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
                    <div class="bg-white p-5 rounded-xl shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Users</p>
                                <p class="text-2xl font-bold text-gray-900 mt-1">{{$users->count()}}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Active Users</p>
                                <p class="text-2xl font-bold text-gray-900 mt-1">142</p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-user-check text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-medium"></span>
                        </div>
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Vet Users</p>
                                <p class="text-2xl font-bold text-gray-900 mt-1">{{$users->where('role','vet')->count()}}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-user-md text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-gray-600 text-sm font-medium"></span>
                        </div>
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Admin Users</p>
                                <p class="text-2xl font-bold text-gray-900 mt-1">{{$users->where('role','admin')->count()}}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                <i class="fas fa-user-shield text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-gray-600 text-sm font-medium"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Management Section -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- User List Section -->
                <div class="lg:col-span-4">
                    <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                        <!-- Table Header -->
                        <div class="px-6 py-4 border-b flex flex-col md:flex-row md:items-center justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-800">All Users</h2>
                                <p class="text-gray-500 text-sm mt-1">Manage user accounts and permissions</p>
                            </div>
                            <div class="mt-3 md:mt-0">
                                <div class="flex space-x-2">
                                    <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="all">All Roles</option>
                                        <option value="admin">Admin</option>
                                        <option value="vet">Vet</option>
                                        <option value="user">User</option>
                                    </select>
                                    <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="all">All Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Users Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Active</th>
                                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                            @foreach($users as $user)
                                <tbody class="divide-y divide-gray-100">
                                    <!-- REPLACE THIS SECTION WITH YOUR DYNAMIC DATA -->
                                    <!-- Sample Data - Replace with your database data -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                {{-- <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold mr-3"></div> --}}
                                                <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mr-3"><img class="h-full w-full rounded-full" src="{{asset('storage/'.$user->image)}}" alt="User Picture"></div>
                                                <div>
                                                    <div class="font-medium text-gray-900">{{$user -> name}}</div>
                                                    <div class="text-gray-500 text-sm">{{$user-> email}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                <i class="fas fa-user-shield mr-2 text-blue-600"></i>
                                                <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">{{$user-> role}}</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span class="status-badge status-active">Active</span>
                                        </td>
                                        <td class="py-4 px-6 text-gray-500">2 hours ago</td>
                                        <td class="py-4 px-6">
                                            <div class="flex space-x-2">
                                            
                                                <!-- Status button -->
                                                <button class="p-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                                                    <i class="fas fa-power-off text-green-600"></i>
                                                </button>
                                            
                                                <!-- Edit button -->
                                                <a href="{{ route('edit-user', $user->id) }}">
                                                    <button type="submit" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                                        <i class="fas fa-edit"></i>
                                                    </button>    
                                                </a>                                            
                                                <!-- Delete button -->
                                                <form action="{{ route('delete-user', $user->id) }}" method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this user?')">
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <button type="submit"
                                                        class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                    <!-- END OF SAMPLE DATA -->
                                </tbody>
                            @endforeach
                            </table>
                        </div>

                        <!-- Table Footer -->
                        <div class="px-6 py-4 border-t flex flex-col md:flex-row md:items-center justify-between">
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Minimal JavaScript for basic interactions -->
    <script>
        // Simple search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
        
        // Simple mobile sidebar toggle (if needed)
        function toggleMobileSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('hidden');
        }
    </script>
</body>
</html>