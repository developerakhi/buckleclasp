<?php

namespace App\Http\Controllers;

use App\Models\Customization;
use Illuminate\Http\Request;
use Auth;
use File;
use Image;
use DB;
class CustomizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.customize');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $customization = new Customization;
        
        if(auth()->user() != null){
            
           $customization->user_id = auth()->user()->id;
        }

        //multiple images
      $images = array();
      
      if($request->hasFile('image')){
          foreach ($request->file('image') as $key => $image) {
                $imagename = hexdec(uniqid()) . '.' . $image->extension();
                $image->move('public/uploads/preorder', $imagename);
              array_push($images, $imagename);
          }
          $customization->image = json_encode($images);
      }

        $customization->customer_name = $request->input('customer_name');
        $customization->customer_email = $request->input('customer_email');
        $customization->customer_mobile = $request->input('customer_mobile');
        $customization->item_name = $request->input('item_name');
        $customization->description = $request->input('description');
        $customization->save();
        
        return redirect()->back()->with('status','Customization Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customizations  $customization
     * @return \Illuminate\Http\Response
     */
      public function all_customization(Request $request){
        $sort_search =null;
        $customizations = Customization::orderBy('id', 'DESC');
        if ($request->has('search')){
            $sort_search = $request->search;
            $customizations = $customizations->where('customer_mobile', 'like', '%'.$sort_search.'%');
        }
        
        $customizations = $customizations->paginate(15);
        return view('backend.customization.index', compact('customizations', 'sort_search'));
     }
     
    public function show($id)
    {
        $customizations = Customization::findOrFail($id);
    
        return view('backend.customization.show', compact('customizations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customization  $Customization
     * @return \Illuminate\Http\Response
     */
    public function edit(Customization $Customization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customization  $Customization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customization $Customization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customization  $customization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('customization')->where('customization_id', $id);
        Customization::destroy($id);
        flash(translate('Customization has been deleted successfully'))->warning();
        return redirect()->route('all_customization.index');
    }
}
