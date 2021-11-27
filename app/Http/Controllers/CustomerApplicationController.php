<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Application;
use App\Category;
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
        $menu_categories = Category::whereNull('deleted_at')->get();
        $data = Application::where('user_id', Auth::user()->id)->paginate(9);
        return view('home.applications.index',compact('data', 'menu_categories'))->with('i', (request()->input('page', 1) - 1) * 9);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.applications.create');
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

        $input = $request->all();

        if ($image= $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }
    
        // $application->store($input);
        $input['user_id'] = Auth::user()->id;
        // $input['email'] = Auth::user()->id;

        Application::create($input);
        // Application::create($request->all());
     
        // return redirect()->route('home.applications.index')
        //                 ->with('success','Санал, гомдол амжилттай үүслээ.');
        return response()
        ->json(['success' =>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('home.applications.show',compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('home.applications.edit',compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }
        // else{
        //     unset($input['image']);
        // }
    
        $application->update($input);
    
        return redirect()->route('home.applications.index')
                        ->with('success','Санал, гомдол амжилттай өөрчлөгдлөө');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('home.applications.index')
                        ->with('success','Санал, гомдол амжилттай устлаа');
    }
}