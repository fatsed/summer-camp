<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{

    public function create(Request $request, User $user)
    {
        return view('panel.User.permissions',compact('user'));
    }
    public function store(Request $request,User $user)
    {
       $user->permissions()->sync($request->permissions);
        $user->roles()->sync($request->roles);

        return redirect('/admin/panel/user/showall.blade.php');
    }
}
