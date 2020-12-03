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
function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(mymap)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);

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

@php
  $i = 1;
  $latitude = 0;
  $longitude = 0;
  $text = '';
  $text_temp = '';
@endphp
@foreach($datariwayat as $riwayat)

    @php
      if($latitude != $riwayat->latitude && $longitude != $riwayat->longitude){
        if($latitude == 0 && $longitude == 0){

          $latitude = $riwayat->latitude;
          $longitude = $riwayat->longitude;
        }
        else{
          echo ".bindPopup('" . $text . "').openPopup();";
          $text = '';
          $i = 1;
        }
        echo "L.marker([" . $riwayat->latitude . ", " . $riwayat->longitude . "], {icon: greenIcon}).addTo(mymap)";
          // $text = $i++ . ". " . $riwayat->nama . ", " . $riwayat->nama_penyakit;
          $text = $i++ . ". " . $riwayat->value;
      }
      else{
        // if($text_temp != $riwayat->nama . $riwayat->nama_penyakit){
        //   $text = $text . "<br>" . $i++ . ". " . $riwayat->nama . ", " . $riwayat->nama_penyakit;
        // }

        if($text_temp != $riwayat->value){
          $text = $text . "<br>" . $i++ . ". " . $riwayat->value;
        }

      }
      $text_temp = $riwayat->value;
    @endphp

@endforeach

.bindPopup('{{$text}}').openPopup();
    
</script>    
@endpush
