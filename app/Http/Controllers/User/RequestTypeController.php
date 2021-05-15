<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestTypeRequest;
use App\Models\RequestType;
use Illuminate\Http\Request;

class RequestTypeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $reqType = RequestType::search($request->q)->paginate(10);
    $reqType->appends(['q' => $request->q]);
    return view("user.request-type.index", [
      'reqType' => $reqType
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('user.request-type.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(RequestTypeRequest $request)
  {
    $reqType = $request->except('_token');
    RequestType::create($reqType);
    session()->flash('success', 'You have created a new Request Type');
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

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $reqType = RequestType::find($id);
    return view('user.request-type.edit', [
      "reqType" => $reqType
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(RequestTypeRequest $request, $id)
  {
    $reqType = RequestType::find($id);
    $reqType->name = $request->name;
    $reqType->save();
    session()->flash("success", "You have successfull Updated Database");
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
