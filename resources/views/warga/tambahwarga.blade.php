@extends('layouts.page')
@section('title')
Tambah Data Warga  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Warga</h1>
</div>

<div class="section-body">
  <a href="/datawarga" class="btn btn-primary" role="button"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahwarga" method="post">
		{{ csrf_field() }}
		<div class="form-group">
      <input type="text" name="nik" required="required" class="form-control form-control-sm" placeholder="NIK">
    </div>

    <div class="form-group">
      <input type="text" name="no_kk" required="required" class="form-control form-control-sm" placeholder="Nomor KK">
    </div>
    
    <div class="form-group">
      <input type="text" name="nama" required="required" class="form-control form-control-sm" placeholder="Nama">
    </div>

    <div class="form-group">
      <input type="date" name="ttl" required="required" class="form-control form-control-sm">
    </div>

        Jenis Kelamin <input type="radio" name="jk" value="Laki-Laki">
        <label for="male">Laki-Laki</label>
        <input type="radio" name="jk" value="Perempuan">
        <label for="female">Perempuan</label> <br/>

        <button class="btn btn-primary" type="submit">Tambah</button>
	</form>
</div>    
@endsection

@push('scripts')

<script>
  $("#tambahwarga").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/tambahwarga',
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
          location.replace("/datawarga");
        });
      }
    });


  });
</script>

@endpush