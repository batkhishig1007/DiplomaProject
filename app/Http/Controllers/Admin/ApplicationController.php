<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Application::paginate(5);
        return view('admin.applications.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.applications.create');
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

        // if ($validator->fails()) {
        //     return redirect('applications/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // $input = $request->all();

        $input = $request->all();

        if ($image= $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }
    
        // $application->store($input);
        
        Application::create($input);
        // Application::create($request->all());
     
        return redirect()->route('applications.index')
                        ->with('success','Санал, гомдол амжилттай үүслээ.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('admin.applications.show',compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('admin.applications.edit',compact('application'));
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
    
        return redirect()->route('applications.index')
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
    
        return redirect()->route('applications.index')
                        ->with('success','Санал, гомдол амжилттай устлаа');
    }
}