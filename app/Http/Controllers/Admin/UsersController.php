<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Validator;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->get();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,UsersRequest $request)
    {
//        dd($request->all());
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/userImage',$request->file('image'));
            }else{
                $image = NULL;
            }

            if($request->hasFile('file')){
                $file = Storage::putFileAs('public/userFile',$request->file('file'),$request->file('file')->getClientOriginalName());
            }else{
                $file = NULL;
            }
            $role = $request->role;
//            dd($role);
//            dd($user->syncRoles($role));
            $users = $user->create(array_merge($request->validated(),
                [
                    'image' => $image,
                    'file' => $file,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => $role,
                    'status_id' => $request->status_id,
                    'note' => $request->note,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]));

            $users->syncRoles($request['role']);

            return redirect()->route('users.index');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        try {
            if($request->hasFile('image')){
                $imagePath = Storage::putFile('public/userImage',$request->file('image'));;
                $user->image = $imagePath;
                $user->save();
            }
            if($request->hasFile('file')){
                $filePath = Storage::putFileAs('public/userFile',$request->file('file'),$request->file('file')->getClientOriginalName());
                $user->file = $filePath;
                $user->save();
            }

            $user->update(
                [
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => $request->role,
                    'status_id' => $request->status_id,
                    'note' => $request->note,
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

            return redirect()->route('user.index');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->where(['role_id' => 'Users','id' => $user->id])->delete();

        return redirect()->route('user.index');
    }
}
