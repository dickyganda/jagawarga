@extends('layouts.page')
@section('title')
Tambah Data Karantina  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Karantina</h1>
</div>

<div class="section-body">
  <a href="/datapenyakit"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahkarantina" method="post">
		{{ csrf_field() }}
		Nik <input type="text" name="nik" required="required"> <br/>
        Nama <input type="text" name="nama" required="required"> <br/>
        Latitude <input type="text" name="latitude" required="required"> <br/>
        Longitude <input type="text" name="longitude" required="required"> <br/>
        Nama Penyakit <input type="text" name="nama_penyakit" required="required"> <br/>
        Tanggal Input <input type="date" name="tgl_input" required="required"> <br/>
        Waktu Karantina <input type="text" name="sisa_waktu" required="required"> <br/>
		<input type="submit" value="Tambah">
	</form>
</div>    
@endsection

@push('scripts')

<script>
  $("#tambahkarantina").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/tambahkarantina',
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
          location.replace("/datakarantina");
        });
      }
    });


  });
</script>

@endpush