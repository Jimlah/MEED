<?php

declare(strict_types=1);

namespace App\Charts;

use App\Models\Request as ModelsRequest;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
  /**
   * Determines the chart name to be used on the
   * route. If null, the name will be a snake_case
   * version of the class name.
   */
  public ?string $name = 'sample_chart';

  /**
   * Determines the name suffix of the chart route.
   * This will also be used to get the chart URL
   * from the blade directrive. If null, the chart
   * name will be used.
   */
  public ?string $routeName = 'samplechart';

  /**
   * Determines the prefix that will be used by the chart
   * endpoint.
   */
  // public ?string $prefix = 'some_prefix';

  /**
   * Determines the middlewares that will be applied
   * to the chart endpoint.
   */
  public ?array $middlewares = ['loggedIn'];
  /**
   * Handles the HTTP request for the given chart.
   * It must always return an instance of Chartisan
   * and never a string or an array.
   */
  public function handler(Request $request): Chartisan
  {
    return Chartisan::build()
      ->labels([1])
      ->dataset('Sample', [2]);
  }


  private function xData(){
    $req =  ModelsRequest::orderBy('created_at')
      ->get()
      ->groupBy(function ($x_data) {
        return $x_data->created_at->format('Y M d');
      });

    $sample_label = [];
    $sample_data = [];
    foreach ($req as $x_key => $x_value) {
      $sample_label[] = $x_key;
      $sample_data[] = count($x_value);
    }
    $sample = [$sample_label, $sample_data];
    return $sample;
  }
}
