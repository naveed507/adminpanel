<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\EditUserRequest;
use App\Http\Requests\Admin\Settings\AccountSettingRequest;
use App\Mail\SendCredentialsToUserByMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_type', '!=', 'ADMIN')->get();

        return view('admin.content.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        try {


            $generatedPassword = Str::random(8);
            $encryptedPassword = Hash::make($generatedPassword);
            $user = User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'user_type' => 'USER',
                'password' => $encryptedPassword,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'status' => ($request->status == 'ACTIVE') ? 'ACTIVE' : 'INACTIVE',
            ]);
            $modifyUser = collect($user);
            $details = $modifyUser->put('plain_password', $generatedPassword);
            $email = new SendCredentialsToUserByMail($details);
            Mail::to($details['email'])->send($email);

            return redirect()->route('users.index');
            $this->succes("User Created Sucessfuly");
        } catch (Exception $e) {
            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finduser = User::find($id);

        return view('admin.content.users.edit', compact('finduser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);

            $user = $user->update([
                'name'  => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'status' => $request->status,
            ]);

            $this->success("User Updated Successfully");
            return redirect()->route('users.index');
        } catch (Exception $e) {

            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $finduser = User::find($id);
            if ($finduser) {
                $finduser->delete();
                $this->success("User Deleted Successfully");
                return redirect()->back();
            }
            $this->warning("User Not Found");
            return redirect()->back();
        } catch (Exception $e) {
            $this->warning("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    public function accountSettings()
    {
        $userid = auth()->user()->id;
        $admin = User::where('id', $userid)->where('user_type', 'ADMIN')->first();


        return view('admin.content.settings.setting', compact('admin'));
    }

    public function accountPasswordSettings()
    {
        $userid = auth()->user()->id;
        $admin = User::where('id', $userid)->where('user_type', 'ADMIN')->first();

        return view('admin.content.settings.password', compact('admin'));
    }

    public function updateUserSettings(EditUserRequest $request, $id)
    {
        try {
            $user = User::find($id);

            $user = $user->update([
                'name'  => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,

            ]);

            $this->success("User Account Settings Updated Successfully");
            return redirect()->back();
        } catch (Exception $e) {

            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }

    public function updateUserPasswords(AccountSettingRequest $request, $id)
    {
        try {

            $findUser = User::where('user_type', 'ADMIN')->where('id', $id)->first();

            if ($findUser) {
                if (Hash::check($request->old_password, $findUser->password)) {
                    $findUser->update([
                        'password' => Hash::make($request->new_password)
                    ]);
                    $this->success("Password Updated Successfully");
                    return redirect()->back();
                } else {
                    $this->error("Your Old Password Does Not Matched");
                    return redirect()->back();
                }
            }
        } catch (Exception $e) {
            $this->error("Something Went Wrong Please Try Again");
            return redirect()->back();
        }
    }
}
