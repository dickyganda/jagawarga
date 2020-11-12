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
        
        <div class="form-group">
          <label>NIK</label>
          <input type="text" name="nik" class="form-control form-control-sm" value="{{ $karantina->nik }}">
        </div>

        {{-- <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control form-control-sm" value="{{ $karantina->nama }}">
        </div> --}}

        {{-- <div class="form-group">
          <label>Latitude</label>
          <input type="text" name="latitude" class="form-control form-control-sm" value="{{ $karantina->latitude }}">
        </div> --}}
        {{-- ID Lokasi <input type="text" required="required" name="id_lokasi" value="{{ $karantina->id_lokasi }}"> <br /> --}}
        
        {{-- <div class="form-group">
          <label>Longtude</label>
          <input type="text" name="longitude" class="form-control form-control-sm" value="{{ $karantina->longitude }}">
        </div> --}}

        {{-- ID Penyakit <input type="text" required="required" name="id_penyakit" value="{{ $karantina->id_penyakit }}"> <br /> --}}
        {{-- <div class="form-group">
          <label>Nama Penyakit</label>
          <input type="text" name="nama_penyakit" class="form-control form-control-sm" value="{{ $karantina->nama_penyakit }}">
        </div> --}}
        
        <div class="form-group">
          <label>Tanggal Input</label>
          <input type="date" name="tgl_input" class="form-control form-control-sm" value="{{ $karantina->tgl_input }}">
        </div>
        
        {{-- <div class="form-group">
          <label>Waktu Karantina</label>
          <input type="text" name="waktu_karantina" class="form-control form-control-sm" value="{{ $karantina->waktu_karantina }}">
        </div> --}}
        
        {{-- <div class="form-group">
          <label>Status</label>
          <input type="text" name="status" class="form-control form-control-sm" value="{{ $karantina->status }}">
        </div> --}}
        
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
