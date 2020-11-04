@extends('layouts.page')
@section('title')
Edit Data Lokasi
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Lokasi</h1>
</div>

<div class="section-body">

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datalokasi as $lokasi)
    <form id="editlokasi" method="post">
         <input type="hidden" name="id_lokasi" value="{{ $lokasi->id_lokasi }}" hidden>
        Latitude <input type="text" name="latitude" value="{{ $lokasi->latitude }}"> <br />
        Longitude <input type="text" required="required" name="longitude" value="{{ $lokasi->longitude }}"> <br />
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editlokasi").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/updatelokasi',
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
