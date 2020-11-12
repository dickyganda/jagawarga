@extends('layouts.page')
@section('title')
Edit Data Penyakit
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Penyakit</h1>
</div>

<div class="section-body">

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datapenyakit as $penyakit)
    <form id="editpenyakit" method="post">
        <input type="hidden" name="id_penyakit" value="{{ $penyakit->id_penyakit }}" hidden>

        <div class="form-group">
          <label>Nama Penyakit</label>
          <input type="text" name="nama_penyakit" class="form-control form-control-sm" value="{{ $penyakit->nama_penyakit }}" >
        </div>
        
        <div class="form-group">
          <label>Gejala</label>
          <input type="text" name="gejala" class="form-control form-control-sm" value="{{ $penyakit->gejala }}" >
        </div>
        
        <div class="form-group">
          <label>Waktu Karantina</label>
          <input type="text" name="waktu_karantina" class="form-control form-control-sm" value="{{ $penyakit->waktu_karantina }}" >
        </div>

        <div class="form-group">
          <label>Penanganan Pertama</label>
          <input type="text" name="penanganan_pertama" class="form-control form-control-sm" value="{{ $penyakit->penanganan_pertama }}" >
        </div>
        
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editpenyakit").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/updatebantuan',
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
