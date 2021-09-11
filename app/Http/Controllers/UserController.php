<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
       
    $menbres=User::all();
    return view('users',compact('menbres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role'=>['required', 'string', 'max:255'],
        ]);

        //dd($request['role']);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role'=>$request['role'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('users')->with('message', 'Utilisateur bien creer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $user=User::find($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $user=User::find($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'role'=>$request['role'],
            'password' => Hash::make($request['password']),
        ]);

        session()->flash('message', 'Utilisateur bien modifiè');
        return  redirect()->route('profile', ['id' => $id]);
        //return redirect('users.profile',);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function desactiver(Request $request)
    {   

        User::find($request['membre_id'])->update(['status'=>'desactiver']);
         return redirect('users')->with('message', 'Utilisateur desactiver');
    }


    public function profile($id)
    {
        $user=User::find($id);
        return view('user.profile',compact('user'));
    }
}
