@extends('layouts.page')
@section('title')
Map   
@endsection

@push('styles')

#mapid { height: 180px; }
    
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
    
@endpush
