<x-layout>
    <div
    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit a Patient information
        </h2>
        <p class="mb-4">Edit: {{$listing ->patient_name}}'s information</p>
    </header>
    
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                value="{{$listing ->patient_name}}"
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
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="age"
                placeholder="Example: Senior Laravel Developer"
                value="{{$listing ->age }}"
            />
            
        @error('Age')
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
                placeholder="Example: Remote, Boston MA, etc"
                value="{{$listing ->location }}"
            />
        @error('location')
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
                value="{{$listing ->email}}"
            />
        @error('email')
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
                value="{{$listing ->phone}}"
            />
            @error('phone')
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
            <img
            class="w-48 mr-6 mb-6"
            src="{{$listing -> logo ? asset('storage/' . $listing->logo) : 
            asset('/images/noimage_person.png')}}"
            alt=""
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
                Job Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc"
                
            >{{$listing ->description}}
        </textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>
    
        <div class="mb-6">
            <button
                class="bg-black text-white rounded py-2 px-4 hover:bg-gray-700"
            >
                Edit Patient
            </button>
    
            <a href="/" class="text-black ml-4 hover:text-red-700"> Back </a>
        </div>
    </form>
    </div>
    
    </x-layout>