@extends('layouts.page')
@section('title')
Edit Data Karantina
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Karantina</h1>
</div>

<div class="section-body">

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datakarantina as $karantina)
    <form id="editkarantina" method="post">
         <input type="hidden" name="id_karantina" value="{{ $karantina->id_karantina }}" hidden>
        Nik <input type="text" name="nik" value="{{ $karantina->nik }}"> <br />
        Nama <input type="text" required="required" name="nama" value="{{ $karantina->nama }}"> <br />
        ID Lokasi <input type="text" required="required" name="id_lokasi" value="{{ $karantina->id_lokasi }}"> <br />
        Latitude <input type="text" required="required" name="latitude" value="{{ $karantina->latitude }}"> <br />
        Longitude <input type="text" required="required" name="longitude" value="{{ $karantina->longitude }}"> <br />
        ID Penyakit <input type="text" required="required" name="id_penyakit" value="{{ $karantina->id_penyakit }}"> <br />
        Nama Penyakit <input type="text" required="required" name="nama_penyakit" value="{{ $karantina->nama_penyakit }}"> <br />
        Tanggal Input <input type="date" required="required" name="tgl_input" value="{{ $karantina->tgl_input }}"> <br />
        Waktu Karantina <input type="text" required="required" name="waktu_karantina" value="{{ $karantina->waktu_karantina }}"> <br />
        Status <input type="text" required="required" name="status" value="{{ $karantina->status }}"> <br />
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editkarantina").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/updatekarantina',
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
