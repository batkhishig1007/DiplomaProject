<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Category;
class CustomAuthController extends Controller
{

    public function index()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        return view('auth.login', compact('menu_categories'));
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
            return redirect("/")->withSuccess('Амжилттай нэвтэрлээ...');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        return view('auth.registration', compact('menu_categories'));
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function admin()
    {
        if(Auth::check()){
            return view('admin');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        // Session::flush();
        // Auth::logout();

        return redirect('login');
    }
}