<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $req =  ModelsRequest::orderBy('created_at')
      ->get()
      ->groupBy(function ($data) {
        return $data->created_at->format('Y-m-d');
      });

    $label = [];
    $sdata = [];
    $cl = [];
    foreach ($req as $key => $value) {
      $label[] = $key;
      $sdata[] = count($value);
      $cl[] = $value->countBy('status');
      $pending = [];
      $open = [];
      $processing = [];
      $close = [];

      foreach ($cl as $v) {
        $pending[] = $v->all()[1] ?? 0;
        $open[] = $v->all()[2] ?? 0;
        $processing[] = $v->all()[3] ?? 0;
        $close[] = $v->all()[4] ?? 0;
      }
    }
    $statuses = [
      'Pending' => $pending,
      'open' => $open,
      'processing' => $processing,
      'close' => $close,
    ];

    $status = [];
    foreach ($statuses as $key => $value) {
      $status[] = [
        "name" => "$key",
        "values" => $value
      ];
    }

    $data = [
      "chart" => ["labels" => $label],
      "datasets" => $status
    ];

    $data = json_encode($data);

    return view('user.dashboard.index', [
      "data" => $data
    ]);
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
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
