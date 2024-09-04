<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RegisterUsers;
use Session;

class UserController extends Controller
{
    public function index(){
        $activeCount = User::where('deleted_at',0)->count();
        $inactiveCount = User::where('deleted_at',1)->count();
        $totalCount = User::count();

        if(Session::has('email')){
            return view('admin.dashboard.index',compact('activeCount','inactiveCount','totalCount'));
        } else{
            Session::flash('error','Login First');
            return redirect()->route('login');
        }
    }

    public function adduser(){
        if(Session::has('email')){
            return view('admin.users.addUser');
        } else{
            Session::flash('error','Login First');
            return redirect()->route('login');
        }
    }
    public function datasubmit(Request $request){
        $data = $request->all();
        $user = new User;
        $email = $data['email'];
        $mobile = $data['mobile'];
        $alreadyExistEmail = User::where('email',$data['email'])->exists();
        $alreadyExistMobile = User::where('mobile',$data['mobile'])->exists();
        // dd(!$alreadyExistEmail);
        if(!$alreadyExistEmail){
            if(!$alreadyExistMobile){
                $user->fname = $data['fname'];
                $user->lname = $data['lname'];
                $user->dob = $data['dob'];
                $user->age = $data['age'];
                $user->mobile = $data['mobile'];
                $user->email = $data['email'];
                $user->department = $data['department'];
                $user->position = $data['position'];
                $user->hiredate = $data['hiredate'];
                $user->salary = $data['salary'];
                $user->address = $data['address'];
                // $user->password = Hash::make($data['password']);
                if($request->hasFile('profile')){ 
                    $path = 'stores/img';
                    $image = $request->file('profile');
                    $ext = $image->getClientOriginalExtension();
                    $fileName = rand(100000, 999999).'.'.$ext;
                    // $imageName = $fileName.'.'.$ext;
                    $image->move($path,$fileName);
                    $image_Name = $path.'/'.$fileName;

                }

                $user->picture = $image_Name;
                $user->save();
                Session::flash('msgs','Data Added Successfully!');
                return redirect()->route('list');

            } else{
                Session::flash('error','Mobile Number Already Exist!');
                return redirect()->route('adduser');
            }
        } else{
            Session::flash('error','Email Already Exist!');
                return redirect()->route('adduser');
        }
        // $user->name = $data['name'];
        // $user->age = $data['age'];
        // $user->mobile = $data['mobile'];
        // $user->email = $data['email'];
        // $user->password = Hash::make($data['password']);
        // $user->save();
        // Session::flash('msgs','Data Added Successfully!');
        // return redirect()->route('list');
        
    }

    public function dataget(){
        $users = User::where('deleted_at',0)->get();
        if(Session::has('email')){
            return view('admin.users.listUser',compact('users'));
        } else{
            Session::flash('error','Login First');
            return redirect()->route('login');
        }
    }

    public function editdata(Request $request){
        $id = $request['id'];
        // printf($id);
        $users = User::find($id);
        if(Session::has('email')){
            return view('admin.users.editUser',compact('users'));
        } else{
            Session::flash('error','Login First');
            return redirect()->route('login');
        }    
    }

    public function updatedata(Request $request, $id){
        $data = $request->all();
        User::where('id', $id)->update([
            'fname' => $data['fname'],
            'age' => $data['age'],
            'email' => $data['email'],
            'mobile' => $data['mobile']
    ]);
        Session::flash('msgs','Data Updated Successfully!');
        return redirect()->route('list');
    }

    public function deletedata($id){
        User::where('id', $id)->update(['deleted_at' => 1]);
        return redirect()->route('list')->with('message','successfully deleted');
    }

    public function trashlist(){
        $users = User::where('deleted_at',1)->get();
        if(Session::has('email')){
            return view('admin.users.trashListUser',compact('users'));
        } else{
            Session::flash('error','Login First');
            return redirect()->route('login');
        }
    }

    public function restoredata($id){
        User::where('id', $id)->update(['deleted_at' => 0]);
        Session::flash('msgs','Data Restored');
        return redirect()->route('list');
    }

    public function userprofile(){
        $email = Session::get('email');
        $user = RegisterUsers::where('email', $email)->first();
        return view('admin.users.userProfile',compact('user'));
    }

}
