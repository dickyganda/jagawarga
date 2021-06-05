<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token()}}"> <!-- Security Laravel -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Jaga Warga Map</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap.min.css') }}">


    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    
    <style>
      html, body {
  height: 100%;
}

.full-height {
  height: 100%;
}
      </style>
          
</head>

<body>
  <div id="mapid" class="full-height">
                
  </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet.js.map') }}"></script>
    <script src="{{ asset('assets/js/leaflet-src.esm.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-src.esm.js.map') }}"></script>
    <script src="{{ asset('assets/js/leaflet-src.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-src.js.map') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

<script>
  var mymap = L.map('mapid').setView([-7.096270, 112.285988], 20);
  
  var greenIcon = L.icon({
      iconUrl: 'marker-icon.png',
  
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
      accessToken: 'pk.eyJ1IjoiZGlja3lnYW5kYSIsImEiOiJja2ppMDJ2aXM1NGJ0MnpsZ205NXV3bWM1In0.vIDLcJCQxtyyf-xS-y9vCA'
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
          if($latitude != 0 && $longitude != 0){
  
            echo ".bindPopup('" . $text . "').openPopup();";
            $text = '';
            $i = 1;
  
          }
  
          $latitude = $riwayat->latitude;
          $longitude = $riwayat->longitude;
  
          echo "L.marker([" . $riwayat->latitude . ", " . $riwayat->longitude . "], {icon: greenIcon}).addTo(mymap)";
            $text = $i++ . ". " . $riwayat->value;
        }
        else{
          if($text_temp != $riwayat->value){
            $text = $text . "<br>" . $i++ . ". " . $riwayat->value;
          }
  
        }
        $text_temp = $riwayat->value;
  
      @endphp
  
  @endforeach
  
  </script>

</body>

</html>
