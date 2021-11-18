<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')){
            User::uploadAvatar($request->image);
            //$request->session()->flash('message','Image Uploaded.');
            return redirect()->back()->with('message','Image Uploaded.');
        }
        //$request->session()->flash('error','Image not Uploaded.');
        return redirect()->back()->with('error','Image not Uploaded.');
    }


    //
    public function index()
    {
        $data = [
          'name' => 'Elon',
          'email' =>'elon@gmail.com',
          'password'=> 'password',
        ];
       // User::create($data);

//        $user = new User();
//        $user->name = 'stas';
//        $user->email = 'stas@gmail.com  ';
//        $user->password = bcrypt('sat28375');
//        $user->save();

//        DB::insert('insert into users (name, email, password)
//        values (?,?,?)',[
//            'test',
//            'test@tes.com',
//            '123456'
//      ]);
//        $user = User::all();
//        return $user;
//         User::where('id',2)->delete();

//        $users = DB::select('select * from users');
//        return $users;

//        DB::update('update users set name = ? where id = 1', ['stas']);
//        DB::delete('delete from users where id=1');
//        $users = DB::select('select * from users');
//        return $users;
//        User::where('id',3)->update(['name' =>'stanislav']) ;
        $user = User::all();
        return $user;
        return view('home');
    }
}
