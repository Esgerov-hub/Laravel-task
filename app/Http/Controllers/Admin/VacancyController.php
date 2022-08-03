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

class VacancyController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->where(['role_id' => 'Users','id' => Auth::user()->id])->get();

        return view('admin.vacancy.index',compact('users'));
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.vacancy.edit',compact('user'));
    }

    public function update($id,Request $request)
    {
        try {
            $user = User::where('id',$id)->first();
        if($request->hasFile('image')){
            $imagePath = Storage::putFile('public/userImage',$request->file('image'));;
        }else{
            $imagePath = $user->image;
        }
        if($request->hasFile('file')){
            $filePath = Storage::putFileAs('public/userFile',$request->file('file'),$request->file('file')->getClientOriginalName());
        }else{
            $filePath = $user->file;
        }

            $users = User::where('id',$id)->update(
                [
                    'image' => $imagePath,
                    'file' => $filePath,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => 'Users',
                    'status_id' => 1,
                    'note' => $request->note,
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

//            $users->syncRoles('Users');

            return redirect()->route('resume');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }
}
