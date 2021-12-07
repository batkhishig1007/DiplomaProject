<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Apartment;
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
        $admin_type = "undefined";
        $apartment = Apartment::all();
        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }

        if($admin_type == 'admin'){
            $data = User::with('apartment')->latest()->paginate(9);
            return view('admin.users.index',compact('data', 'apartment'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
        }else{
            $apartment_ids = Apartment::where('user_id', Auth::user()->id)->pluck('id');
            $data = User::with('apartment')->whereIn('apartment_id', $apartment_ids)->latest()->paginate(9);
            return view('admin.users.index',compact('data', 'apartment'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartment = Apartment::all();
        return view('admin.users.create',compact('apartment'));
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
        $apartment = Apartment::all();
        return view('admin.users.show',compact('user', 'apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $apartment = Apartment::all();
        return view('admin.users.edit',compact('user', 'apartment'));
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