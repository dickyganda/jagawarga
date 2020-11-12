@extends('layouts.page')
@section('title')
Tambah Data Lokasi  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Lokasi</h1>
</div>

<div class="section-body">
  <a href="/datalokasi"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahlokasi" method="post">
    {{ csrf_field() }}
    
    <div class="form-group">
      <input type="text" name="no_kk" required="required" class="form-control form-control-sm" placeholder="Nomor KK">
    </div>

    <div class="form-group">
      <input type="text" name="latitude" required="required" class="form-control form-control-sm" placeholder="Latitude">
    </div>

    <div class="form-group">
      <input type="text" name="longitude" required="required" class="form-control form-control-sm" placeholder="Longitude">
    </div>
		
		<input type="submit" value="Tambah">
	</form>
</div>    
@endsection

@push('scripts')

<script>
  $("#tambahlokasi").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/tambahlokasi',
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success:function(data){
        Swal.fire(
          'Sukses!',
          data.reason,
          'success'
        ).then(() => {
          location.replace("/datalokasi");
        });
      }
    });


  });
</script>

@endpush