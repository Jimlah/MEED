<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $users = User::search($request->q)->paginate(10);
    $users->appends(['q' => $request->q]);
    return view("user.user.index", [
      'users' => $users
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $roles = [
      User::USER_ADMIN => "Admin",
      User::USER_MEMBER => "Member",
      User::USER_CLIENT => "Client",
    ];
    return view('user.user.create', [
      "roles" => $roles
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserRequest $request)
  {
    User::create([
      'firstname' => $request->firstname,
      'lastname' => $request->lastname,
      'email' => $request->email,
      'role' => $request->role,
    ]);

    return redirect()->back();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::find($id);
    $roles = [
      User::USER_ADMIN => "Admin",
      User::USER_MEMBER => "Member",
      User::USER_CLIENT => "Client",
    ];
    return view("user.user.show", [
      'user' => $user,
      'roles' => $roles
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $user = User::find($id);
    $roles = [
      User::USER_ADMIN => "Admin",
      User::USER_MEMBER => "Member",
      User::USER_CLIENT => "Client",
    ];
    return view("user.user.edit", [
      'user' => $user,
      'roles' => $roles
    ]);
    return view("user.user.edit");
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
    $user = User::find($id);
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->save();

    return redirect()->back();
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
}
