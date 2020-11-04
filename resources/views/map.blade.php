@extends('layouts.page')
@section('title')
Map   
@endsection

@push('styles')
<style>
#mapid { height: 180px; }
</style>
    
@endpush

@section('content')
<div class="section-header">
  <h1>Map</h1>
</div>

<div class="section-body">
    <div id="mapid">

    </div>
</div>    
@endsection

@push('scripts')
<script>
  var mymap = L.map('mapid').setView([51.505, -0.09], 13);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);
</script>    
@endpush
