@extends('layouts.dashboard')

@section('body')
<div class="grid w-full h-full grid-cols-2 gap-5">
  <div class="p-5 bg-white md:col-span-1 col-span-full bg-opacity-90">
    <div id="chart" class="h-full"></div>
  </div>
  <div class="hidden p-5 bg-white md:col-span-1 md:block bg-opacity-90">

    <livewire:calender>

  </div>
</div>
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>
  const chart = new Chartisan({
    el: '#chart',
    data: {!! $data !!}
  });
</script>
@endsection