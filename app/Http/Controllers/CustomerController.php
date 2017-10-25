<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function showLoginForm(){
        return view('front-end.customer.login');
    }
    private function saveCustomerBasicInfo($request,$imageUrl){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->second_name = $request->second_name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->customer_image = $imageUrl;
        $customer->save();
    }
    private function saveCustomerImage($customerImage){
        $directory = 'customer_images/';
        $imageName = $customerImage->getClientOriginalName();
        $imageUrl = $directory.$imageName;
        $customerImage->move($directory,$imageUrl);
        return $imageUrl;
    }

    public function saveCustomerInfo(Request $request){
        $customerImage = $request->file('customer_image');
        if($customerImage){
            $imageUrl = $this->saveCustomerImage($customerImage);
            $this->saveCustomerBasicInfo($request,$imageUrl);
        }else{
            $imageUrl='https://www.w3schools.com/w3css/img_avatar3.png';
            $this->saveCustomerBasicInfo($request,$imageUrl);
        }
        return redirect('/')->with('message', 'Please login');
    }

    public function userLogin(Request$request){
        $customerInfo = Customer::where('email', $request->email)->first();

        if($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                Session::put('customerId', $customerInfo->id);
                Session::put('customerName', $customerInfo->first_name.''.$customerInfo->second_name);
                return redirect('/');
            } else {
                return redirect('/')->with('message', 'Please use valid password');
            }
        } else {
            return redirect('/')->with('message', 'Please use valid email address to login');
        }

    }
    public function userLogout(){
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');
    }
}
