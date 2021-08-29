<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'cin' => 'required',
                'password' => 'required',
                'role' => 'required'
            ],
            [
                'name.required' => 'المرجو إدخال إسم المستخدم!',
                'cin.required' => 'المرجو إدخال رقم البطاقة الوطنية المستخدم!',
                'password.required' => 'المرجو إدخال رقم كلمة السر!',
                'role.required' => 'المرجو إدخال دور المستخدم!',
            ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->cin,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        $user->givePermissionTo($request->permissions);
        return redirect()->route('users.index')->with('success', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return User::find($id)->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'cin' => 'required',
            'password' => 'required'
        ]);
        User::find($id)->update(['name' => $request->name, 'email' => $request->cin, 'password' => Hash::make($request->password)]);
        return redirect()->route('users.index')->with('updated', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('deleted', 'تم الحذف بنجاح');
    }
}
