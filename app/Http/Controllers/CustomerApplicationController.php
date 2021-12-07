<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Application;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;


class CustomerApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        if(Auth::user()){
            $data = Application::where('user_id', Auth::user()->id)->paginate(9);
        } else {
            $data = Application::paginate(9);
        }
       
        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.applications.index',compact('data', 'menu_categories', 'admin_type'))->with('i', (request()->input('page', 1) - 1) * 9);
    }


    public function create()
    {
        return view('home.applications.create');
    }

    public function store(Request $request)
    {
        
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image= $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }

        $input['user_id'] = Auth::user()->id;

        Application::create($input);

        return response()
        ->json(['success' =>true]);
    }
    public function update(Request $request, Application $application)
    {

        $input = $request->all();

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }
    
        $application->update($input);
    
        return redirect()->route('home.applications.index')
                        ->with('success','Санал, гомдол амжилттай өөрчлөгдлөө');
    }

}