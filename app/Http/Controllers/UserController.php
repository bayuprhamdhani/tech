<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Hash;

class UserController extends Controller
{
    public function index(){
        $status = Status::All();
        $users = User::All();
        $ruangans = "Cek data";

    return view('users.index', compact('users',));
    }

    public function create(){
        $roles = Role::All();
        $status = Status::All();
        return view('users/create', compact('roles', 'status'));
    }

    public function store(Request $request)
    {  
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'Status' => 'required',
        ]);
           
        $data = $request->all();
        // dd($data);
        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' =>$data['role'],
            'Status' =>$data['Status'],
            'password' => Hash::make($data['password'])
        ]);
         
        return redirect()->route('users.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function edit(User $user)
    {   
        $roles = Role::All();
        $status = Status::All();
    return view('users.edit', compact('user', 'roles', 'status'));
    }

    public function update(Request $request, User $user, Status $status)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6',
            'role' => 'required',
            'Status' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->Status = $request->Status;
        if(!empty($request->password)) $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index')->withSuccess('Great! You have Successfully updated '. $user->name);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess($user->name. ' has been deleted successfully');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
               
        return back()->withSuccess('Successfully Imported');
    }

}