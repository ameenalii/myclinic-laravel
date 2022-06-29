<x-layout>
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <header>
                <h1
                    class="text-3xl text-center font-bold my-6 uppercase"
                >
                    Manage Patients Information
                </h1>
            </header>


            <table class="w-full rounded-sm">
                <tbody>
                    @unless ($listings->isEmpty())
                        @foreach ($listings as $listing)
                            
                        

                    <tr class="border-gray-300">
                        <td class="px-8 py-8 font-bold border-t border-b border-gray-300 text-lg" >
                            <a href="show.html">
                                {{$listing->patient_name}}
                            </a>
                        </td>
                        <td class="relative pl-4 py-8 border-t border-b border-gray-300 text-lg">
                            <button class="float-right bg-gray-700 text-white py-1.5 px-4 rounded-xl hover:opacity-80">
                                <a href="/listings/{{$listing->id}}/edit">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            
                        </td>
                        <td
                            class="py-8 border-t border-b border-gray-300 text-lg"
                        >
                        
                        <form method="POST" action="/listings/{{$listing->id}}">
                            @csrf
                            @method('DELETE')
                            <button class=" bg-red-700 text-white py-1 px-3 ml-4 rounded-xl hover:opacity-80">
                                <i class="fa-solid fa-trash "></i> Delete
                            </button>
                        </form>
                        </td>
                        
                    </tr>
                    
                    @endforeach
                    @else 
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-gray-300 text-lg">
                            <p class="text-center">No Listings found</p>
                        </td>
                    </tr>
                @endunless
                </tbody>
            </table>
        </div>
</x-layout>