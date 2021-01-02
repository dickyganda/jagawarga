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

    <a href="/datalokasi" class="btn btn-primary" role="button"> Kembali</a>

    <br />
    <br />

    @foreach($datalokasi as $lokasi)
    <form id="editlokasi" method="post">
         <input type="hidden" name="id_lokasi" value="{{ $lokasi->id_lokasi }}" hidden>

         <div class="form-group">
          <label>Nomor KK</label>
          <input type="text" name="no_kk" class="form-control form-control-sm" value="{{ $lokasi->no_kk }}" >
        </div>

        <div class="form-group">
          <label>Latitude</label>
          <input type="text" name="latitude" class="form-control form-control-sm" value="{{ $lokasi->latitude }}" >
        </div>

        <div class="form-group">
          <label>Longitude</label>
          <input type="text" name="longitude" class="form-control form-control-sm" value="{{ $lokasi->longitude }}" >
        </div>
        
        <input type="submit" value="Simpan" class="btn btn-primary" role="button">
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
