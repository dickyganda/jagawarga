@extends('layouts.page')
@section('title')
Tambah Data Penyakit  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Penyaluran Bantuan</h1>
</div>

<div class="section-body">
  <a href="/datapenyakit"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahpenyaluranbantuan" method="post">
    {{ csrf_field() }}
    <select id="nik" name="nik" class="form-control select2" required>
      <option></option>
      @foreach ($getnik as $warga)
      <option value="{{$warga->nik}}">{{$warga->nik}}</option>
      @endforeach
      </select>
    {{-- NIK <input type="text" name="nama_penyakit" required="required"> <br/> --}}
    
    <select id="jenis_bantuan" name="jenis_bantuan" class="form-control select2" required>
      <option></option>
      @foreach ($getbantuan as $bantuan)
      <option value="{{$bantuan->id_bantuan}}">{{$bantuan->jenis_bantuan}}</option>
      @endforeach
      </select>

		{{-- ID Bantuan <input type="text" name="gejala" required="required"> <br/> --}}
		Qty <input type="text" name="waktu_karantina" required="required"> <br/>
        {{-- Penanganan Pertama <input type="text" name="penanganan_pertama" required="required"> <br/> --}}
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

  $(document).ready(function() {
    $('#nik').select2({
      theme: 'bootstrap4',
      placeholder: "Pilih NIK"
    });

    $('#jenis_bantuan').select2({
      theme: 'bootstrap4',
      placeholder: "Pilih Bantuan"
    });
  });
</script>

@endpush