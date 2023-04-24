<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{

    public function __construct(){
        $this->middleware('can:show-roles')->only(['index']);
        $this->middleware('can:create-role')->only(['create','createRole']);
        $this->middleware('can:edit-role')->only(['EditRole','EditRoles']);
        $this->middleware('can:delete-role')->only(['destroy','DeleteRole']);
    }
    public function index()
    {
        $roles=Role::query();

        if($keyword=request('search')){

            $roles
                ->where('name','LIKE',"%{$keyword}%")
                ->orWhere('label','LIKE',"%{$keyword}%")
                ->orWhere('id',"%{$keyword}%");

        }
        $roles=$roles->latest()->paginate(20);

        return view('panel.role.Showall',['roles'=>$roles],['Status' => 0]);
    }


    public function create()
    {
        return view('panel.role.create', ['Status' => 0]);
    }

    public function createRole(Request $request, Role $role)
    {
        $validation =Validator::make(request()->all(), [
            'name' => ['required','string', 'max:255',Rule::unique('roles')->ignore($role->id)],
            'label' => ['required','string', 'max:255'],
            'permissions'=>['required','array'],
        ])
            ->validate();
        $role=Role::create($validation);
        $role->permissions()->sync($validation['permissions']);

        return view('panel.role.create',[
                'Status' => 1
            ]
        );
    }

    public function EditRole($id,Role $role)
    {
        $role = Role::all()->where('id', $id)->firstOrFail();
        return view('panel.role.edit', ['role' => $role]);
    }

    public function EditRoles($id,Role $role )
    {
        $role = Role::all()->where('id', $id)->firstOrFail();
        $role->update([
            'name' => request('name'),
            'label' => request('label'),
            'permissions'=>['required','array'],
        ]);
        $role->permissions()->sync($role['permissions']);
        return redirect('/admin/panel/role/showall.blade.php');
    }


    public function destroy($id,Role $role)
    {
        $deleteRole = Role::all()->where('id', $id)->firstOrFail();
        return view('panel.role.delete', ['role' => $deleteRole]);
    }

    public function DeleteRole($id)
    {
        $deleteRole = Role::all()->where('id', $id)->firstOrFail();
        $deleteRole->delete($deleteRole->id);
        return redirect('/admin/panel/role/showall.blade.php');
    }
}
