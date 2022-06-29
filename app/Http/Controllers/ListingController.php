<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index(){
        // dd(request());
        return view('listings.index', [
            "listings" => Listing::latest()->filter(
                request(['search']))->paginate(6)
            ]);
            // the tag and search comes from the NAME att of the input field 
            // in the form and tag in the href in a link 
    }

// latest()->get() is better than all() because it sorts all the listing 
// by the last one added


    // Show Single listing
    public function show(Listing $listing){
        return view("listings.show", [
            'listing' => $listing
        ]);
    }
    
    public function create(){
        return view("listings.create");
    }

    public function store(Request $request){
        // return view("listings.store");
        // dd($request->all());
        $formFields = $request->validate([
            'patient_name'=>['required'],
            'age'=>'required',
            'location' => 'required',
            'phone'=> 'required|numeric|digits:11', 
            'email' =>['required', 'email'],
            'description'=>'required',

        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Patient Info. created successfully!');
    }
    
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=> $listing]);
    }

    public function update(Request $request, Listing $listing){
        // return view("listings.store");
        // dd($request->all());


        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'unauthorized Action');
        }



        $formFields = $request->validate([
            'patient_name'=>['required'],
            'age'=>'required',
            'location' => 'required',
            'phone'=> 'required|numeric|digits:11', 
            'email' =>['required', 'email'],
            'description'=>'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing ->update($formFields);

        return redirect('/')->with('message', 'Patient Info. updated successfully!');
    }

    // Delete listing

    public function destroy(Listing $listing){
        
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'unauthorized Action');
        }

        
        $listing -> delete();
        return redirect('/')->with('message', 'Patient info. Deleted successfully!');
    }

    public function manage(){
        return view("listings.manage", ['listings' => auth()->user()->listings()->get()]);
    }

}
