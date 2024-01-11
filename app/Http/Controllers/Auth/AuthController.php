<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Frontend\CreateCustomerRequest;
use App\Mail\SendCredentialsToUserByMail;
use App\Messages\MsgBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Exception;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function customerLoginView()
    {
        return view('auth.customer.login');
    }
    public function customerRegisterView()
    {
        return view('auth.customer.register');
    }

    public function adminLoginView()
    {
        return view('auth.admin');
    }

    public function userLogin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                $this->error(MsgBook::FORM_VALIDATION);
                return redirect()->back();
            }

            $credentials = $request->only('email', 'password');


            if (Auth::attempt($credentials)) {
                $currentUser =  Auth::user();
                if ($currentUser->user_type == 'ADMIN') {
                    $this->success(MsgBook::AUTH_SUCCESS);
                    return redirect()->intended('admin/dashboard');
                } elseif ($currentUser->user_type == 'USER') {
                    $this->success(MsgBook::AUTH_SUCCESS);
                    return redirect()->intended('customer/profile');
                }
            }
            $this->warning(MsgBook::USER_NOT_FOUND);
            return redirect()->back();
        } catch (Exception $e) {
            $this->warning(MsgBook::AUTH_EXCEPTION);
            return redirect()->back();
        }
    }

    public function customerRegister(CreateCustomerRequest $request)
    {

        try {
            $user = User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'user_type' => 'USER',
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'status' => 'INACTIVE',
            ]);
            $modifyUser = collect($user);
            $details = $modifyUser->put('plain_password', $request->password);
            $email = new SendCredentialsToUserByMail($details);
            Mail::to($details['email'])->send($email);
            $this->success("Your Account Created Sucessfuly, Check Your Mail");
            $this->warning("Please Wait Once Your Account Is Approved By Admin You Can Continue");
            return redirect()->back();
        } catch (Exception $e) {

            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('donor.login');
    }
}
