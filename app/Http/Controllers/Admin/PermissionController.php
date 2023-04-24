<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{

    public function __construct(){
        $this->middleware('can:show-permissions')->only(['index']);
        $this->middleware('can:create-permission')->only(['create','createPer']);
        $this->middleware('can:edit-permission')->only(['Editpermission','Editpermissions']);
        $this->middleware('can:delete-permission')->only(['destroy','DeletePermission']);
    }

    public function index()
    {
        $permissions=Permission::query();

        if($keyword=request('search')){

            $permissions
                ->where('name','LIKE',"%{$keyword}%")
                ->orWhere('label','LIKE',"%{$keyword}%")
                ->orWhere('id',"%{$keyword}%");

        }
        $permissions=$permissions->latest()->paginate(20);

        return view('panel.permission.Showall',['permissions'=>$permissions],['Status' => 0]);
    }

    public function create()
    {
        return view('panel.permission.create', ['Status' => 0]);
    }

    public function createPer(Request $request)
    {
        $validation =Validator::make(request()->all(), [
            'name' => ['required','string', 'max:255'],
            'label' => ['required','string', 'max:255'],
        ])
            ->validate();
        Permission::create([
            'name' => request('name'),
            'label' => request('label'),
        ]);
        return view('panel.permission.create', [
                'Status' => 1
            ]
        );
    }

    public function Editpermission($id,permission $permission)
    {
        $permission = Permission::all()->where('id', $id)->firstOrFail();
            return view('panel.permission.edit', ['permission' => $permission]);
    }

    public function Editpermissions($id,permission $permission )
    {
        $permission = Permission::all()->where('id', $id)->firstOrFail();
        $permission->update([
            'name' => request('name'),
            'label' => request('label'),
        ]);
        return redirect('/admin/panel/permission/showall.blade.php');
    }


    public function destroy($id,permission $permission)
    {
        $deletepermission = Permission::all()->where('id', $id)->firstOrFail();
        return view('panel.permission.delete', ['permission' => $deletepermission]);
    }
    public function DeletePermission($id)
    {
        $deletepermission = Permission::all()->where('id', $id)->firstOrFail();
        $deletepermission->delete($deletepermission->id);
        return redirect('/admin/panel/permission/showall.blade.php');
    }
}
