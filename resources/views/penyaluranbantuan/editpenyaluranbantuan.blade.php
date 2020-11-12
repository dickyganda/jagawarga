@extends('layouts.page')
@section('title')
Edit Data Penyaluran Bantuan
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Penyaluran Bantuan</h1>
</div>

<div class="section-body">

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datapenyaluranbantuan as $penyaluranbantuan)
    <form id="editpenyaluranbantuan" method="post">
         <input type="hidden" name="id_penyaluran_bantuan" value="{{ $penyaluranbantuan->id_penyaluran_bantuan }}" hidden>
        NIK <input type="text" name="nik" value="{{ $penyaluranbantuan->nik }}"> <br />
        {{-- Nama Penerima <input type="text" name="nama" value="{{ $penyaluranbantuan->nama }}"> <br /> --}}
        ID Bantuan <input type="text" required="required" name="id_bantuan" value="{{ $penyaluranbantuan->id_bantuan }}"> <br />
        {{-- Jenis Bantuan <input type="text" name="jenis_bantuan" value="{{ $penyaluranbantuan->jenis_bantuan }}"> <br /> --}}
        Qty <input type="text" required="required" name="qty" value="{{ $penyaluranbantuan->qty }}"> <br />
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editpenyaluranbantuan").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/updatepenyaluranbantuan',
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
          location.replace("/datapenyaluranbantuan");
        });
      }
    });


  });
</script>

@endpush
