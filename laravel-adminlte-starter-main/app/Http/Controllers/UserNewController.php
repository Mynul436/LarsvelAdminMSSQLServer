<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //      $this->middleware(['auth', 'role:super admin']);
    //  }
    public function index()
    {
        //

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

        return view('users.create');

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

         dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
            'is_aproved' => 'boolean',
            'is_locked' => 'boolean',
            'ref_number_roo/rtm' => 'required',
            'referer_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

   ]);



// $country->name = $request->name;


// $user= new User;
// $user->name = $request->name;
// $user->email = $request->email;
// $user->username = $request->username;
// $user->role = $request->role;
// $user->password = Hash::make($request->password);
// $user->is_aproved = $request->is_aproved;
// $user->is_locked = $request->is_locked;
// $user->ref_number_roo_rtm = $request->ref_number_roo_rtm;
// $user->referer_id = $request->referer_id;
// $user->image = $request->image;


        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->is_aproved = false; // Assume super admin created user is always approved
        $user->role = $validatedData['role'];
        $user->password = Hash::make($validatedData['password']);
        $user->is_locked = false;
        $user->ref_number_roo_rtm = $validatedData['ref_number_roo/rtm'];
        $user->referer_id = $validatedData['referer_id'];
        $user->image = $validatedData['image'];

   
        $user->save();

        return redirect()->route('users.index')
        ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('users.show', compact('user'));
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
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
            'is_aproved' => 'required,boolean',
            'is_locked' => 'required,boolean',
            'ref_number_roo/rtm' => 'required',
            'referer_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // Update user
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->is_aproved = false; // Assume super admin created user is always approved
        $user->role = $validatedData['role'];
        $user->password = Hash::make($validatedData['password']);
        $user->is_locked = false;
        $user->ref_number_roo_rtm = $validatedData['ref_number_roo/rtm'];
        $user->referer_id = $validatedData['referer_id'];
        $user->image = $validatedData['image'];
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
// dd($user);
        $user->user_id = auth()->user()->id;
        $user->save();

        // Redirect to user index page
        return redirect()->route('users.index')
        ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        //
        $user->delete();
        return redirect()->route('users.index');
    }
}
