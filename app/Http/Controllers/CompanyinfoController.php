<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class CompanyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Company::get(); 
        return view('admin_page.company-information',compact('data'));
    }
    /**
     * Display a listing of the resource.
     */
    public function dashboard_data()
    {
        $data = Company::get(); 
        return view('admin_page.index',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function Social_update(Request $request)
    {

        $validated = $request->validate([
        'facebook'     => 'required',
        'facebook'     => 'required',
        'twitter'      => 'required',
        'linkedin'     => 'required',
        
       ]);
       $update['facebook link']  = $request['facebook'];
       $update['instagram link'] = $request['facebook'];
       $update['twitter link']   = $request['twitter'];
       $update['linkedIn link']  = $request['linkedin'];
       $id = 1;
       $data = Company::where('id', $id)->update($update);
      if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !!']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }
     
    }
     public function Social_data()
    {
        $data = Company::get(); 
        return view('admin_page.social-media',compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
        'company_name'     => 'required',
        'company_address'  => 'required',
        'company_email'    => 'required',
        'company_number'   => 'required',
        'url'          => 'required',
        'experience'   => 'required',
        'title'        => 'required',
        'description'  => 'required',
        'facebook'     => 'required',
        'instagram'    => 'required',
        'twitter'      => 'required',
        'linkedIn'     => 'required',
        'additional_information'=> 'required',
       ]);
      $logo_image ="";
      if($request->hasFile('logo_image'))
      {
        $file = $request->File('logo_image');
        $logo_image = time().'-'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$logo_image);

      }
      $favicon_image ="";
      if($request->hasFile('favicon_image')){
        $file = $request->file('favicon_image');
        $favicon_image = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/assets1/saveimage');
        $file->move($destinationPath,$favicon_image);
      }
       $update['company name']           = $request['company_name'];
       $update['company address']        = $request['company_address'];
       $update['company email']          = $request['company_email'];
       $update['company phone']          = $request['company_number'];
       $update['website(URL)']           = $request['url'];
       $update['company experience']     = $request['experience'];
       $update['title text']             = $request['title'];
       $update['description text']       = $request['description'];
       $update['logo image']             = $logo_image;
       $update['favicon image']          = $favicon_image;
       $update['facebook link']          = $request['facebook'];
       $update['instagram link']         = $request['instagram'];
       $update['twitter link']           = $request['twitter'];
       $update['linkedIn link']          = $request['linkedIn'];
       $update['additional information'] = $request['additional_information'];
       $update['created_at']             = Carbon::now();
       $id = 1;
       $data = Company::where('id', $id)->update($update);
       if(!empty($data))
       {
        return redirect()->back()->with(['success'=>'successful update !!']);
       }else{
         return redirect()->back()->with(['error'=>'Please try again']);
       }

    }

    /**
     * Display the specified resource.
     */
    public function password(Request $request)
    {  
        $validated = $request->validate([
        'password'     => 'required',
        'newpassword'  => 'required|min:8',
        'renewPassword'=> 'required',
        
       ]);
        $check = $request['password'];
        $recheck1 = $request['newpassword'];
        $recheck = $request['renewPassword'];
        $id = 1;
        $data = User::where('id', $id)->first();
        $password = $data->password; 
      if(!empty(Hash::check($check,$password))){
        if(!empty($recheck1==$recheck)){
          $newpasswor['password'] = Hash::make($request['newpassword']);
          $quer = User::where('id', $id)->update($newpasswor);
             if($quer){
                         return redirect()->back()->with(['success'=>'successful change password !']);
                }else{
                     return redirect()->back()->with(['error'=>'plese try again']);
                   }
          }else{
              return redirect()->back()->with(['error'=>'re-enter password not match']);
           }
        }else{
           return redirect()->back()->with(['error'=>'Old password not match']);
         }
     
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
