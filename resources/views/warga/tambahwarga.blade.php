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
  <a href="/datawarga"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahwarga" method="post">
		{{ csrf_field() }}
		NIK <input type="text" name="nik" required="required"> <br/>
		No. KK <input type="text" name="no_kk" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
        TTL <input type="date" name="ttl" required="required"> <br/>
        Jenis Kelamin <input type="radio" name="jk" value="Laki-Laki">
        <label for="male">Laki-Laki</label>
        <input type="radio" name="jk" value="Perempuan">
        <label for="female">Perempuan</label> <br/>
        Latitude <input type="text" name="lokasi" required="required"> <br/>
        Longitude <input type="text" name="lokasi" required="required"> <br/>
        Riwayat <input type="text" name="riwayat" required="required"> <br/>
        Waktu Karantina <input type="number" name="waktu_karantina" required="required"> <br/>
		<input type="submit" value="Tambah">
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