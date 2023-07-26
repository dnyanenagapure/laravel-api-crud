<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use Redirect;
use Illuminate\Support\Facades\View;

class RegistrationController extends Controller
{
    public function users(){
        $users=User::all();
       
       return View('dataDisp', compact('users'));
     
    }
    
    public function updatedata(Request $request,$id){
        $user = User::findOrFail($id);
        return View('dataupdate', compact('user'));
        
    }
    public function updateuser(Request $request,$id){
        $user = User::findOrFail($id);

        $user->name=$request->input('name');
        $user->taluka=$request->input('taluka');
        $user->pincode=$request->input('pincode');
        $user->save();
        return redirect('/users')->with('alert','Update successful!');
        
    }
    public function deletedata(Request $request,$id){
        $user = User::findOrFail($id);

         // Perform the deletion
         $user->delete();
 
         // Redirect back or return a response as needed
         return redirect()->back()->with('alert','User Deleted Successfully!');

    }

    public function submitForm(Request $request)
    {
        // Retrieve form data
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $name=$firstName.' '.$lastName;
        $stateId = $request->input('state');
        $cityId = $request->input('city');
        $taluka = $request->input('taluka');
        $pinCode = $request->input('pin_code');

       // echo "test";
        //die;

        // Implement saving data to the database here
        // For example, you can create a new User model and save the data
        $user = new User;
        $user->name = $name;
        $user->stateId = $stateId;
        $user->cityId = $cityId;
        $user->taluka = $taluka;
        $user->pincode = $pinCode;
        $user->save();

        // After saving the data, you can redirect to a success page or perform any other actions as needed.
        // For example:
        //return redirect()->route('index')->with('message', 'Registration successful!');
      // return Redirect::back()->with(['msg' => 'Registration successful!']);
      return redirect()->back()->with('alert','Registration successful!');
    }
}
