
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Pet Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen  px-4">

    @include('layouts.user-sidebar')

    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Book an Appointment</h1>
            <p class="text-gray-600">Schedule a visit for your pet</p>
        </div>

        <form method="post" action="{{route('create-appointment')}}" class="">
            @csrf
            <!-- Select Veterinarian -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Select Veterinarian *
                </label>
            
                <select
                    required
                    name="vet_id"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    <option value="">Choose a vet...</option>
            
                    @foreach ($vets as $vet)
                        <option value="{{ $vet->id }}">
                            {{ $vet->name }} - {{ $vet->specialization }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Select Pet -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Select Your Pet *
                </label>
                <select required name="pet_id" class="w-full px-4 py-3 border rounded-lg">
                    <option value="">Choose your pet...</option>             
                    @foreach ($pets as $pet)
                        <option value="{{ $pet->id }}">
                            {{ $pet->name }} - {{ $pet->breed }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Date Selection -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Appointment Date *
                </label>
                <input type="date" required name="appointment_date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Time Selection -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Appointment Time *
                </label>
                <select required name="appointment_time" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Choose a time...</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="09:30">09:30 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="10:30">10:30 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="11:30">11:30 AM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="13:30">01:30 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="14:30">02:30 PM</option>
                    <option value="15:00">03:00 PM</option>
                    <option value="15:30">03:30 PM</option>
                    <option value="16:00">04:00 PM</option>
                    <option value="16:30">04:30 PM</option>
                    <option value="17:00">05:00 PM</option>
                </select>
            </div>

            <!-- Reason for Visit -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Reason for Visit
                </label>
                <textarea name="reason" rows="4" placeholder="Please describe the reason for your visit..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200">
                Book Appointment
            </button>
        </form>
    </div>

    <script>
        
    </script>
</body>
</html>