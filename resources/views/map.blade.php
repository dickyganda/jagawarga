@extends('layouts.page')
@section('title')
Map   
@endsection

@push('styles')
<style>
#mapid { height: 400px; }
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
  var mymap = L.map('mapid').setView([-7.096270, 112.285988], 13);

  var greenIcon = L.icon({
    iconUrl: 'marker-icon.png',
    // shadowUrl: 'leaf-shadow.png',

    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZGlja3lnYW5kYSIsImEiOiJja2hic3F0YzgwMGNiMnRtcGo3ejkwMHM4In0._C7h0v7qstA2nVgz6DPi9g'
}).addTo(mymap);

L.marker([-7.099127, 112.283545], {icon: greenIcon}).addTo(mymap)
    .bindPopup('IKI OMAHKU :D')
    .openPopup();
    
</script>    
@endpush
