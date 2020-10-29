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
        Nama Penyakit <input type="text" name="nama_penyakit" value="{{ $penyakit->nama_penyakit }}"> <br />
        Gejala <input type="text" required="required" name="gejala" value="{{ $penyakit->gejala }}"> <br />
        Waktu Karantina <input type="text" required="required" name="waktu_karantina" value="{{ $penyakit->waktu_karantina }}"> <br />
        Penanganan Pertama <input type="text" required="required" name="penanganan_pertama" value="{{ $penyakit->penanganan_pertama }}"> <br />
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
