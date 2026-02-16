<?php
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles & Permissions - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for minimal JS approach */
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        input[type="checkbox"]:checked + label { background-color: #3b82f6; color: white; }
        input[type="checkbox"]:checked + label i { color: white; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    @include('layouts.adminSidebar')

    <!-- Main Content -->
    <div class="md:ml-64 pt-20">
        <div class="p-6">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900">Roles & Permissions</h1>
                <p class="text-gray-600 mt-2">Manage user roles and assign permissions. Promote users to Vet role.</p>
            </div>

            <!-- Tabs -->
            <div class="mb-8 border-b border-gray-200">
                <div class="flex space-x-1">
                    <button onclick="switchTab('users')" class="tab-btn px-4 py-2 font-medium  border-b-2 border-blue-600 text-blue-600">
                        <i class="fas fa-users mr-2"></i>Users
                    </button>
                    <button onclick="switchTab('roles')" class="tab-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700">
                        <i class="fas fa-user-shield mr-2"></i>Roles
                    </button>
                    <button onclick="switchTab('permissions')" class="tab-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700">
                        <i class="fas fa-key mr-2"></i>Permissions
                    </button>
                </div>
            </div>

            <!-- Users Tab Content -->
            <div id="users-tab" class="tab-content active">
                <!-- Search and Filter -->
                <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between space-y-4 md:space-y-0">
                    <div class="relative w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                       <input  type="text"  id="userSearch" placeholder="Search users..."  class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></div>
                    <div class="flex space-x-2">
                        <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>All Roles</option>
                            <option>User</option>
                            <option>Vet</option>
                            <option>Admin</option>
                        </select>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="fas fa-filter mr-2"></i>Filter
                        </button>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Role</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $user)
                                    <!-- User 1 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold mr-3">{{str::upper(str::substr($user->name, 0,1))}}</div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{$user->name}}</div>
                                                    <div class="text-sm text-gray-500">Member since Jan </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$user->email}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                {{$user->role}}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <form method="POST" action="{{route('makeVet', $user->id)}}">
                                                @csrf
                                                 <button onclick="promoteToVet(1)" class="text-blue-600 hover:text-blue-900 mr-3">
                                                    <i class="fas fa-user-shield mr-1"></i> Make Vet
                                                </button>
                                            </form>   
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
                                <!-- Add more users as needed -->
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table Footer -->
                    <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">156</span> users
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">Previous</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm bg-blue-50 text-blue-600">1</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">2</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">3</button>
                            <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles Tab Content -->
            <div id="roles-tab" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Role Card: Admin -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Administrator</h3>
                                    <p class="text-sm text-gray-500">Full system access</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    2 users
                                </span>
                            </div>
                            <ul class="space-y-2 mb-4">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> All permissions
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> User management
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> System settings
                                </li>
                            </ul>
                            <button class="w-full text-sm text-gray-600 hover:text-gray-900 text-center pt-2 border-t border-gray-100">
                                View Details
                            </button>
                        </div>
                        
                        <!-- Role Card: Vet -->
                        <div class="border  rounded-lg p-4 border-blue-300 bg-blue-50">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Veterinarian</h3>
                                    <p class="text-sm text-gray-500">Medical access</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    1 user
                                </span>
                            </div>
                            <ul class="space-y-2 mb-4">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> Animal medical records
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> Prescription management
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> Medical reports
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-times text-red-500 mr-2"></i> User management
                                </li>
                            </ul>
                            <button class="w-full text-sm text-blue-600 hover:text-blue-900 text-center pt-2 border-t border-gray-100">
                                <i class="fas fa-edit mr-1"></i> Edit Permissions
                            </button>
                        </div>
                        
                        <!-- Role Card: User -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Standard User</h3>
                                    <p class="text-sm text-gray-500">Basic access</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                    153 users
                                </span>
                            </div>
                            <ul class="space-y-2 mb-4">
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> View own data
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i> Basic reports
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-times text-red-500 mr-2"></i> Medical access
                                </li>
                                <li class="fas fa-times text-red-500 mr-2"></i> Admin functions
                                </li>
                            </ul>
                            <button class="w-full text-sm text-gray-600 hover:text-gray-900 text-center pt-2 border-t border-gray-100">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Permissions Tab Content -->
            <div id="permissions-tab" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Permission Groups</h3>
                        <p class="text-gray-600">Select which permissions are available for each role</p>
                    </div>
                    
                    <!-- Simple Permission Toggles -->
                    <div class="space-y-6">
                        <!-- User Management Permissions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-medium text-gray-900 mb-3">User Management</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm1" class="sr-only">
                                    <label for="perm1" class="flex items-center cursor-pointer px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <i class="fas fa-user-plus mr-2 text-gray-500"></i>
                                        <span class="text-sm">Create Users</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm2" class="sr-only">
                                    <label for="perm2" class="flex items-center cursor-pointer px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <i class="fas fa-user-edit mr-2 text-gray-500"></i>
                                        <span class="text-sm">Edit Users</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm3" class="sr-only" checked>
                                    <label for="perm3" class="flex items-center cursor-pointer px-3 py-2 border  rounded-lg hover:bg-gray-50 bg-blue-50 border-blue-300">
                                        <i class="fas fa-user-minus mr-2 text-blue-500"></i>
                                        <span class="text-sm">Delete Users</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm4" class="sr-only">
                                    <label for="perm4" class="flex items-center cursor-pointer px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <i class="fas fa-user-lock mr-2 text-gray-500"></i>
                                        <span class="text-sm">Suspend Users</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Medical Permissions -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h4 class="font-medium text-gray-900 mb-3">Medical Access (Vet only)</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm5" class="sr-only" checked>
                                    <label for="perm5" class="flex items-center cursor-pointer px-3 py-2 border  rounded-lg hover:bg-gray-50 bg-blue-50 border-blue-300">
                                        <i class="fas fa-file-medical mr-2 text-blue-500"></i>
                                        <span class="text-sm">Medical Records</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="perm6" class="sr-only" checked>
                                    <label for="perm6" class="flex items-center cursor-pointer px-3 py-2 border  rounded-lg hover:bg-gray-50 bg-blue-50 border-blue-300">
                                        <i class="fas fa-prescription mr-2 text-blue-500"></i>
                                        <span class="text-sm">Prescriptions</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Save Button -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-medium">
                            <i class="fas fa-save mr-2"></i>Save Permission Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Minimal JavaScript -->
    <script>
    // User search functionality
    document.getElementById('userSearch').addEventListener('keyup', function () {
        let searchValue = this.value.toLowerCase();
        let rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            let name = row.children[0].innerText.toLowerCase();
            let email = row.children[1].innerText.toLowerCase();
            let role = row.children[2].innerText.toLowerCase();

            if (
                name.includes(searchValue) ||
                email.includes(searchValue) ||
                role.includes(searchValue)
            ) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

        // Tab switching function
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Remove active style from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('border-blue-600', 'text-blue-600');
                btn.classList.add('text-gray-500');
            });
            
            // Show selected tab content
            document.getElementById(tabName + '-tab').classList.add('active');
            
            // Add active style to clicked tab button
            event.target.classList.remove('text-gray-500');
            event.target.classList.add('border-blue-600', 'text-blue-600');
        }

        // Promote to Vet function
       

        // Initialize first tab as active
        document.addEventListener('DOMContentLoaded', function() {
            switchTab('users');
        });
    </script>
</body>
</html>