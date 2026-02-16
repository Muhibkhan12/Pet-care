<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    @include('layouts.adminSidebar')
    <main class="pt-16 md:pl-64">
    <div class="p-4 md:p-6">
        <!-- Welcome Section -->
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Admin Dashboard</h1>
            <p class="text-gray-600 mt-2">Welcome back, Admin User. Here's an overview of your system.</p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Users</p>
                        <p class="text-2xl font-bold text-gray-900">1,256</p>
                        <p class="text-xs text-green-600 mt-1">
                            <i class="fas fa-arrow-up mr-1"></i>12% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Active Organizations</p>
                        <p class="text-2xl font-bold text-gray-900">24</p>
                        <p class="text-xs text-green-600 mt-1">
                            <i class="fas fa-arrow-up mr-1"></i>2 new this week
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-building text-green-600 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">System Uptime</p>
                        <p class="text-2xl font-bold text-gray-900">99.9%</p>
                        <p class="text-xs text-green-600 mt-1">Last 30 days</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-server text-purple-600 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Pending Tasks</p>
                        <p class="text-2xl font-bold text-gray-900">18</p>
                        <p class="text-xs text-red-600 mt-1">
                            <i class="fas fa-exclamation-circle mr-1"></i>3 require attention
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-tasks text-yellow-600 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity & System Status -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-gray-900">Recent Activity</h2>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View All</a>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3 p-3 hover:bg-gray-50 rounded-lg">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center ">
                            <i class="fas fa-user-plus text-blue-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">New user registration</p>
                            <p class="text-sm text-gray-500">John Doe registered as a new user</p>
                            <p class="text-xs text-gray-400 mt-1">10 minutes ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 p-3 hover:bg-gray-50 rounded-lg">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center ">
                            <i class="fas fa-key text-green-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Permission updated</p>
                            <p class="text-sm text-gray-500">Admin permissions granted to Sarah Wilson</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 p-3 hover:bg-gray-50 rounded-lg">
                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center ">
                            <i class="fas fa-exclamation-triangle text-red-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">System Alert</p>
                            <p class="text-sm text-gray-500">High memory usage detected on server-02</p>
                            <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 p-3 hover:bg-gray-50 rounded-lg">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center ">
                            <i class="fas fa-database text-purple-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">Database Backup</p>
                            <p class="text-sm text-gray-500">Nightly backup completed successfully</p>
                            <p class="text-xs text-gray-400 mt-1">Yesterday, 2:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="bg-blue-50 hover:bg-blue-100 rounded-xl p-4 text-center transition">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-user-plus text-blue-600 text-xl"></i>
                        </div>
                        <p class="font-medium text-gray-900">Add New User</p>
                    </a>
                    
                    <a href="#" class="bg-green-50 hover:bg-green-100 rounded-xl p-4 text-center transition">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-file-alt text-green-600 text-xl"></i>
                        </div>
                        <p class="font-medium text-gray-900">Generate Report</p>
                    </a>
                    
                    <a href="#" class="bg-purple-50 hover:bg-purple-100 rounded-xl p-4 text-center transition">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-cog text-purple-600 text-xl"></i>
                        </div>
                        <p class="font-medium text-gray-900">System Settings</p>
                    </a>
                    
                    <a href="#" class="bg-yellow-50 hover:bg-yellow-100 rounded-xl p-4 text-center transition">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-chart-line text-yellow-600 text-xl"></i>
                        </div>
                        <p class="font-medium text-gray-900">View Analytics</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>