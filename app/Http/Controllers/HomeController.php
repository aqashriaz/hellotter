<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*public function __construct()
    {
        $this->middleware('auth');
    } 
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     */
 
    public function index()
    {
        return view('home');
    }

     public function meeting()

    {
        return view('meeting');
    }

    public function create()  
    { 
     $str =mt_rand();
     $id =md5($str);
     return view('createmeeting',compact('id'));
    }

  public function profile(){

    $id = Auth::user()->id;
    $data = DB::table('users')
    ->select('*')
    ->where('id', $id)
    ->first();
    
    return view('profile',compact('data'));

  }

  public function updateprofile(Request $request){
    $id=$request->id;
    $name=$request->name;
    $password=$request->password;
    if($password){
    $password2=bcrypt($request->password);

    
    $oldimage=$request->oldimage;
    if ($request->hasFile('image') && $request->image->isValid()) 
        {
        $extension=$request->image->extension();
        $filename=time()."_.".$extension;
        $request->image->move(public_path('images'),$filename);
        }
        else
        {
        $filename=$oldimage;
        }

    $result = DB::table('users')
      ->where('id', $id)
      ->update([
            'name'  => $name,
            'lastname'  => $request->lastname,
            'email' => $request->email,
            'password' => $password2,          
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address'  => $request->address,
            'image'  => $filename,

             ]);

      return back();
    }
    else{
     $password2=Auth::user()->password;
     
    $oldimage=$request->oldimage;
    if ($request->hasFile('image') && $request->image->isValid()) 
        {
        $extension=$request->image->extension();
        $filename=time()."_.".$extension;
        $request->image->move(public_path('images'),$filename);
        }
        else
        {
        $filename=$oldimage;
        }

    $result = DB::table('users')
      ->where('id', $id)
      ->update([
            'name'  => $name,
            'lastname'  => $request->lastname,
            'email' => $request->email,
            'password' => $password2,          
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address'  => $request->address,
            'image'  => $filename,

             ]);


      return back();


    }
    
 
  


  }

     
}
