<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'listings'=>Listing::all()
        ]);
    }
    public function show(Listing $listing){
        return view('listings.show', [
            'listing'=>$listing
        ]);
    }
    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
           'name'=>'required|min:5',
           'country'=>'required',
           'date'=>'required|date|date_format:Y-m-d|after:start_at|before:-18 years'
        ]);
        Listing::create($formFields);
        return redirect('/');
    }
}
