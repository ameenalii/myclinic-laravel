@props(['listing'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing -> logo ? asset('storage/' . $listing->logo) : 
            asset('/images/noimage_person.png')}}"
            alt=""
        />
        <div>
            <div class="text-3xl font-bold mb-2">
                <a href="/listings/{{$listing->id}}">{{$listing->patient_name}}</a>
            </div>
            <div class="text-xl mb-2"><span class="font-bold">Age :</span> {{$listing->age}}</div>
            <div class="text-xl mb-2"><span class="font-bold">Email :</span> {{$listing->email}}</div>
            <div class="text-xl mb-2"><span class="font-bold">Phone :</span> {{$listing->phone}}</div>
            <div class="text-lg mt-2">
                <span class="font-bold">Location :</span> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>
