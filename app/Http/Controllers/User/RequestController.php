<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\RequestType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('user.request.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $requesttypes = RequestType::all();

    return view('user.request.create', [
      "requesttypes" => $requesttypes
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = User::firstOrNew(['email' => request('email')]);

    $user->firstname = $request('firstname');
    $user->lastname = $request('lastname');
    $user->org_id = auth()->user()->org_id;
    $user->role = User::USER_CLIENT;
    $user->save();

    RequestModel::create([
      'org_id' => $user->org_id ?? auth()->user()->org_id,
      'client_id' => $user->id ?? auth()->user()->org_id,
      'request_type_id' => $request('request_type_id'),
      'description' => $request('description'),
      'status' => $request('status'),
      'priority' => $request('priority'),
      'period' => $request('period'),
    ]);

    session()->flash('success', 'You have created a ticket for the new user');
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
    $req = RequestModel::find($id);

    return view('user.request.index', [
      "reqmod" => $req
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
    $req = RequestModel::find($id);

    if ($req->status == RequestModel::STATUS_OPEN) {
      session()->flash('error', 'The Ticket is being Processed you cant edit it');
      return redirect()->back();
    }


    return view('user.request.edit', [
      'reqmod' => $req
    ]);
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
    $req = RequestModel::find($id);
    $req->request_type_id = $request->request_type_id;
    $req->description = $request->description;
    $req->status = $request->status;
    $req->priority = $request->priority;
    $req->save();

    session()->flash('success', 'The Ticket is being Processed you cant edit it');
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
