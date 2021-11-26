<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::latest()->paginate(5);
    
        return view('admin.users.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            // 'title' => 'required',
            // 'description' => 'required',
        ]);
    
        User::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','Хэрэглэгч амжилттай үүслээ');

                        if ($input['gender'] == null || $input['gender'] == "") {
                            $input['gender'] == "undefined";
                        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('Users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            // 'title' => 'required',
            // 'description' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','Хэрэглэгчи амжилттай өөрчлөгдлөө');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','Хэрэглэгч амжилттай устлаа');
    }
}