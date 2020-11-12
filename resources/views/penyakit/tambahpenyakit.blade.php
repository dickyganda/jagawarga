@extends('layouts.page')
@section('title')
Tambah Data Penyakit  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Penyakit</h1>
</div>

<div class="section-body">
  <a href="/datapenyakit"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahpenyakit" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" name="nama_penyakit" required="required" class="form-control form-control-sm" placeholder="Nama Penyakit">
    </div>
    
    <div class="form-group">
      <input type="text" name="gejala" required="required" class="form-control form-control-sm" placeholder="Gejala">
    </div>
    
    <div class="form-group">
      <input type="number" name="waktu_karantina" required="required" class="form-control form-control-sm" placeholder="Waktu Karantina">
    </div>

    <div class="form-group">
      <input type="text" name="penanganan_pertama" required="required" class="form-control form-control-sm" placeholder="Penanganan Pertama">
    </div>

		<input type="submit" value="Tambah">
	</form>
</div>    
@endsection

@push('scripts')

<script>
  $("#tambahpenyakit").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/tambahpenyakit',
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
          location.replace("/datapenyakit");
        });
      }
    });


  });
</script>

@endpush