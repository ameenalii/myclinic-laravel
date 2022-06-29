{{-- @extends('layout')


@section('content') --}}

<x-layout>

{{-- @include('partials._search') --}}

<a href="/" class="inline-block font-bold text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$listing -> logo ? asset('storage/' . $listing->logo) : 
            asset('/images/noimage_person.png')}}"
            alt=""
        />

        <h3 class="text-3xl font-bold mb-2"><span class="font-bold">Name :</span> {{$listing->patient_name}}</h3>
        <div class="text-xl my-1"><span class="font-bold">Age :</span> {{$listing->age}}</div>
        <div class="text-lg my-1">
            <span class="font-bold">Location :</span> {{$listing->location}}
        </div>
        <div class=" mb-4">
            <a
                href="mailto:{{$listing->email}}"
                class="block bg-gray-700 text-white m-2 p-3 px-8 rounded-xl hover:opacity-80"
                ><i class="fa-solid fa-envelope"></i>
                Contact Patient</a
            >
            <div class="block border-2 border-gray-500  text-black py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-phone"></i> {{$listing->phone}}
            </div>

        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        
        <div>
            <h3 class="text-3xl font-bold mb-4 px-2">
                Prescription
            </h3>
            <div class="text-lg space-y-6 ">
                {{$listing->description}}
            </div>
        </div>
    </div>
</x-card>
<x-card class="flex items-center justify-center border-0 mt-4 p-2 space-x-6">
    <a class="bg-gray-700 text-white py-2 px-8 rounded-xl hover:opacity-80" href="/listings/{{$listing->id}}/edit">
    <i class="fa-solid fa-pencil"></i> edit
    </a>
    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="bg-red-700 text-white py-2 px-8 rounded-xl hover:opacity-80">
            <i class="fa-solid fa-trash"></i> Delete
        </button>
    </form>
</x-card>
</div>
</x-layout>

{{-- @endsection --}}
