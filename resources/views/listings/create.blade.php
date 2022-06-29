<x-layout>
<div
class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Add New Patient
    </h2>
    <p class="mb-4">Create New Patient Information</p>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label
            for="patient_name"
            class="inline-block text-lg mb-2"
            >Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="patient_name"
            value="{{old('patient_name')}}"
        />

    @error('patient_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    </div>

    <div class="mb-6">
        <label for="age" class="inline-block text-lg mb-2"
            >Age</label
        >
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="age"
            placeholder=""
            value="{{old('age')}}"
        />
        
    @error('age')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    </div>

    <div class="mb-6">
        <label
            for="location"
            class="inline-block text-lg mb-2"
            >Location</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="location"
            placeholder="Example: Baghdad, Basra, etc"
            value="{{old('location')}}"
        />
    @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    </div>

    <div class="mb-6">
        <label
            for="phone"
            class="inline-block text-lg mb-2"
        >
            Phone Number
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="phone"
            value="{{old('phone')}}"
        />
        @error('phone')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Email</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{old('email')}}"
        />
    @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    </div>



    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Patient picture (Not required)
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
        />
        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
            Prescription
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc"
            
        >{{old('description')}}
    </textarea>
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-black text-white rounded py-2 px-4 hover:bg-gray-700"
        >
            Add Patient
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>

</x-layout>