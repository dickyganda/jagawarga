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
    <select id="nik" name="nik" class="form-control select2" onchange="selectTypeNik(this)" required>
    <option></option>
    @foreach ($datawarga as $warga)
    <option value="{{$warga->nik}}">{{$warga->nik}}</option>
    @endforeach
    </select>
        <div class="form-group">
          <input type="text" name="no_kk" id="no_kk" required="required" class="form-control form-control-sm" placeholder="Nomor KK">
        </div>

        <div class="form-group">
          <input type="text" name="nama" id="nama" required="required" class="form-control form-control-sm" placeholder="Nama">
        </div>

        <select id="nama_penyakit" name="nama_penyakit" class="form-control select2" onchange="selectTypeNamapenyakit(this)" required>
          <option></option>
          @foreach ($datapenyakit as $penyakit)
          <option value="{{$penyakit->id_penyakit}}">{{$penyakit->nama_penyakit}}</option>
          @endforeach
          </select>
        <input type="hidden" id="id_lokasi" name="id_lokasi" required="required"> <br/>

         <div class="form-group">
          <input type="text" name="latitude" id="latitude" required="required" class="form-control form-control-sm" placeholder="Latitude">
        </div>

        <div class="form-group">
          <input type="text" name="longitude" id="longitude" required="required" class="form-control form-control-sm" placeholder="Longitude">
        </div>

        <div class="form-group">
          <input type="text" name="waktu_karantina" id="waktu_karantina" required="required" class="form-control form-control-sm" placeholder="Waktu Karantina">
        </div>
        
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

  $(document).ready(function() {
    $('#nik').select2({
      theme: 'bootstrap4',
      placeholder: "Pilih NIK"
    });

    $('#nama_penyakit').select2({
      theme: 'bootstrap4',
      placeholder: "Pilih Nama Penyakit"
    });
  });

  function selectTypeNik(item){
    var formdata= new FormData();
    formdata.append('nik', item.options[item.selectedIndex].value);
    $.ajax({
      type: 'POST',
      dataType:'json',
      url: 'getwarga',
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success:function(data){ 
        $('#no_kk').val(data.no_kk);
        $('#nama').val(data.nama);
        $('#id_lokasi').val(data.id_lokasi);
        $('#latitude').val(data.latitude);
        $('#longitude').val(data.longitude);
      }
    })
  }

  function selectTypeNamapenyakit(item){
    var formdata= new FormData();
    formdata.append('id_penyakit', item.options[item.selectedIndex].value);
    $.ajax({
      type: 'POST',
      dataType:'json',
      url: 'getpenyakit',
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success:function(data){ 
        $('#waktu_karantina').val(data.waktu_karantina);
        console.log(data);
      }
    })
  }
</script>

@endpush