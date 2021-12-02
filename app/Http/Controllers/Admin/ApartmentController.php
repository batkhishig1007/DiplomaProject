<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\User;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartment = Apartment::all();
        $user = User::find(Auth::user()->id);
        $data = null;

        if($user && $user->admin_type == 'operator'){
            $data = Apartment::where('user_id', $user->id)->latest()->paginate(9);
            return view('admin.apartments.index',compact('data', 'user'))->with('i', (request()->input('page', 1) - 1) * 9);
        }

        if($user &&  $user->admin_type == 'admin'){
            $data = Apartment::latest()->paginate(9);
            return view('admin.apartments.index',compact('data', 'user'))->with('i', (request()->input('page', 1) - 1) * 9);
        }

        return view('admin.apartments.index',compact('data', 'apartment', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartment = Apartment::all();
        $user = User::all();
        $operators = User::where('admin_type', 'operator')->get();
        return view('admin.apartments.create', compact('operators', 'apartment', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        Apartment::create($request->all());
     
        return redirect()->route('apartments.index')
                        ->with('success','Apartment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        $apartment = Apartment::all();
        $user = User::all();
        $operators = User::where('admin_type', 'operator')->get();
        return view('admin.apartments.show',compact('apartment', 'operators', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $apartment = Apartment::all();
        $user = User::all();
        $operators = User::where('admin_type', 'operator')->get();
        return view('admin.apartments.edit',compact('apartment', 'operators', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $apartment->update($request->all());
    
        return redirect()->route('apartments.index')
                        ->with('success','Apartment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
    
        return redirect()->route('apartments.index')
                        ->with('success','Apartment deleted successfully');
    }
}