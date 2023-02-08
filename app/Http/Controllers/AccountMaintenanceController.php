<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Role;

class AccountMaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function maintenance()
    {
        $accounts = Account::paginate(10);

        // $accounts = Account::where('account_id', '!=', Auth::user())->orWhereNull('account_id')->get();

        // foreach($accounts as $account)
        // {
        //     $account['role_name'] = $account->role()->first()->role_name;
        // }

        return view('admin.account-maintenance', ['accounts' => $accounts]);
    }

    public function updateRole($id)
    {
        $account = Account::find($id);
        $account['role'] = $account->role()->first()->role_name;

        return view('admin.update-role', ['account' => $account]);
    }

    public function changeRole(Request $request, $id)
    {
        $account = Account::find($id);

        $role_id = Role::where('role_name', $request->input('role')) -> first()->role_id;
        $account->role_id = $role_id;
        $account->update();
        return redirect(route('account-maintenance'))->with('status-success', "Saved");
    }

    public function deleteAccount($id)
    {
        $account = Account::find($id);

        if($account){
            $account->delete();
        }
        return redirect(route('account-maintenance'))->with('status-success', "Deleted");
    }
 
}
