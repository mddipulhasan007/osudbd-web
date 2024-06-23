<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
      return view('admin.users.create');
    }

    public function store(Request $request)
    {
        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'role_id'=>$request->role_id,
                'password'=>Hash::make($request->password),
            ]);
        }catch (\Exception $e){
            dd($e->getMessage());
        }
        return redirect()->route('users.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $user = User::find($id);
        if (empty($user)){
            abort('404');
        }
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (empty($user)){
            abort('404');
        }
        try {
            $updateData = [
                'name'=>$request->name,
                'email'=>$request->email,
                'role_id'=>$request->role_id,
            ];
            if (!empty($request->password)){
                $updateData['password']= Hash::make($request->password);
            }
            $user->update($updateData);
        }catch (\Exception $e){
            dd($e->getMessage());
        }

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (empty($user)){
            abort('404');
        }
        try {
            if ($user->id != 1){
                $user->delete();
            }

        }catch (\Exception $e){
            dd($e->getMessage());
        }
        return redirect()->route('users.index');
    }
}
