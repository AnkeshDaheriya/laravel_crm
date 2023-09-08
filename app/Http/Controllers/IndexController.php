<?php

namespace App\Http\Controllers;
use \Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Services;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Vediogallery;

class IndexController extends Controller
{

  public function about_update(Request $request)
    {
      $validated = $request->validate([
        'about_description'=> 'required',
        'about_image'      => 'required',
        
       ]);
      $about_image ="";
      if($request->hasFile('about_image')){
        $file = $request->file('about_image');
        $about_image = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$about_image);
      }
       $update['about_description']= $request['about_description'];
       $update['about_image']      = $about_image;
       $update['created_at']       = Carbon::now();
       $id = 1;
       $data = About::where('id',$id)->update( $update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     } 

     public function about_data(Request $request)
     {
        $data = About::get(); 
        return view('admin_page.about',compact('data'));
     }
    /**
     * =====================================================================================================
     * Show the form for creating a new resource.
     */
    public function client_update(Request $request)
    {
       $validated = $request->validate([
        'client_title'      => 'required',
        'client_description'=> 'required',
        
       ]);
       $update['client_title']       = $request['client_title'];
       $update['client_description'] = $request['client_description'];
       $update['created_at']         = Carbon::now();
       $id = 1;
       $data = Client::where('id',$id)->update($update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     } 

     public function client_data(Request $request)
     {
        $data = Client::get(); 
        return view('admin_page.client',compact('data'));
     }
    /**=============================================================================
     * Store a newly created resource in storage.
     */
    public function testimonial_update(Request $request)
    {
      $validated = $request->validate([
        'reviews'             => 'required',
        'reviews_star'        => 'required',
        'testimonial_image'   => 'required',
        'testimonial_description'=> 'required',
        
       ]);
     $testimonial_image ="";
      if($request->hasFile('testimonial_image')){
        $file = $request->file('testimonial_image');
        $ext = $file->getClientOriginalExtension();
        $testimonial_image = time().'.'.$ext;
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$testimonial_image);
      }
       $update['reviews']                 = $request['reviews'];
       $update['reviews_star']            = $request['reviews_star'];
       $update['testimonial_image']       = $testimonial_image;
       $update['testimonial_description'] = $request['testimonial_description'];
       $update['created_at']              = Carbon::now();
       $id = 1;
       $data = Testimonial::where('id',$id)->update($update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     } 

     public function testimonial_data(Request $request)
     {
        $data = Testimonial::get(); 
        return view('admin_page.testimonial',compact('data'));
     }

    /**===============================================================================
     * Store a newly created resource in storage.
     */

     public function services_update(Request $request)
    {
      $validated = $request->validate([
        'services_title'        => 'required',
        'services_image'        => 'required',
        'services_description'  => 'required',
        
       ]);
      $services_image ="";
      if($request->hasFile('services_image')){
        $file = $request->file('services_image');
        $services_image = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$services_image);
      }
       $update['services_title']       = $request['services_title'];
       $update['services_image']       = $services_image;
       $update['services_description'] = $request['services_description'];
       $update['created_at']           = Carbon::now();
       $id = 1;
       $data = Services::where('id',$id)->update( $update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     } 

     public function services_data(Request $request)
    {
        $data = Services::get(); 
        return view('admin_page.services',compact('data'));
    }
    /**=================================================================================
     * Store a newly created resource in storage.
     */

     public function gallery_store(Request $request)
    {
      $validated = $request->validate([
        'video_title'        => 'required',
        'video_link'         => 'required',
        'video_description'  => 'required',
        
       ]);
       $update['video_title']      = $request['video_title'];
       $update['video_link']       = $request['video_link'];
       $update['video_description']= $request['video_description'];
       $update['created_at']       = Carbon::now();
       $data = Vediogallery::insert( $update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful submit !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
    }

     public function videogallery_data(Request $request)
    {
        $data = Vediogallery::get(); 
        return view('admin_page.gallery-video',compact('data'));
    }
    /**==================================================================================
     * Store a newly created resource in storage.
     */
    
     public function gallery_image(Request $request)
    {
      $validated = $request->validate([
        'gallery_category'  => 'required',
        'gallery_image'     => 'required',
        'gallery_description'=> 'required',
        
       ]);
     $gallery_image ="";
      if($request->hasFile('gallery_image')){
        $file = $request->file('gallery_image');
        $gallery_image = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$gallery_image);
      };
       $update['gallery_category']    = $request['gallery_category'];
       $update['gallery_image']       = $gallery_image;
       $update['gallery_description'] = $request['gallery_description'];
       $update['created_at']          = Carbon::now();
       $data = Gallery::insert( $update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful submit !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
    }

     public function gallery_data(Request $request)
    {
        $data = Gallery::get(); 
        return view('admin_page.gallery-image',compact('data'));
    }

  /**======================================================================================
     * Store a newly created resource in storage.
     */
    
     public function slider_update(Request $request)
    {
      $validated = $request->validate([
        'slider_title'      => 'required',
        'slider_image'      => 'required',
        'slider_description'=> 'required',
        
       ]);
      $slider_image ="";
      if($request->hasFile('slider_image')){
        $file = $request->file('slider_image');
        $slider_image = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$slider_image);
      }
       $update['slider_title']       = $request['slider_title'];
       $update['slider_image']       = $slider_image;
       $update['slider_description'] = $request['slider_description'];
       $update['created_at']         = Carbon::now();
       $id = 1;
       $data = Slider::where('id',$id)->update( $update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     } 
     
     public function slider_data(Request $request)
    {
        $data = Slider::get(); 
        return view('admin_page.slider',compact('data'));
    }
    /**=======================================================================================
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
