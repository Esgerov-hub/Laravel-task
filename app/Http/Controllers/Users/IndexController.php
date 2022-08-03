<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function vacancy()
    {
        return view('users.vacancy');
    }
    public function vacancyResume(User $user,UsersRequest $request)
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
            $users = $user->create(array_merge($request->validated(),
                [
                    'image' => $image,
                    'file' => $file,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => 'Users',
                    'status_id' => 2,
                    'note' => $request->note,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]));

            $users->syncRoles('Users');

            return redirect()->route('vacancy');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }

    }
}
