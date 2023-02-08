<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $account = Auth::user();
        $account['gender'] = Auth::user()->gender()->first()->gender_desc;
        $account['role'] = Auth::user()->role()->first()->role_name;

        return view('profile', ['account' => $account]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'alpha_dash', 'max:25'],
            'last_name' => ['required', 'string', 'alpha_dash', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'role' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'password' => ['required', 'string', Password::min(8), Password::min(1)->numbers(), 'confirmed'],
        ]);

        $account = Account::find($id);

        if(!$account)
        {    
            return redirect(route('home'))->with('status-error', "Found no account that match id");
        }

        if($request->hasFile('display_picture'))
        {
            $this->validate($request, [
                'display_picture' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

            if (Storage::disk('public')->exists('account/display_picture/' . $account->display_picture_link)) {
                Storage::delete('account/display_picture/' . $account->display_picture_link);
            }

            $file = $request->file('display_picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->storeAs('account/display_picture', $filename);
            $account->display_picture_link = $filename;
        }
        $gender_id = Gender::where('gender_desc',$request->input('gender')) -> first()->gender_id;
        $role_id = Role::where('role_name', $request->input('role')) -> first()->role_id;

        $account->role_id = $role_id;
        $account->gender_id = $gender_id;
        $account->first_name = $request->input('first_name');
        $account->last_name = $request->input('last_name');
        $account->email = $request->input('email');
        $account->password = Hash::make($request->input('password'));

        $account->update();

        return redirect(route('home'))->with('status-success', "Saved");
    }

}
