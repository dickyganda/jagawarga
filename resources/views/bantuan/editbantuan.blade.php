@extends('layouts.page')
@section('title')
Edit Data Bantuan
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Bantuan</h1>
</div>

<div class="section-body">

    <a href="/databantuan" class="btn btn-primary" role="button"> Kembali</a>

    <br />
    <br />

    @foreach($databantuan as $bantuan)
    <form id="editbantuan" method="post">
         <input type="hidden" name="id_bantuan" value="{{ $bantuan->id_bantuan }}" hidden>
        {{-- Jenis Bantuan <input type="text" name="jenis_bantuan" value="{{ $bantuan->jenis_bantuan }}"> --}}
        <div class="form-group">
          <label>Jenis Bantuan</label>
          <input type="text" name="jenis_bantuan" class="form-control form-control-sm" value="{{ $bantuan->jenis_bantuan }}" >
        </div>

        {{-- Stok <input type="text" name="stok" value="{{ $bantuan->stok }}"> --}}
        <div class="form-group">
          <label>Stok</label>
          <input type="text" name="stok" class="form-control form-control-sm" value="{{ $bantuan->stok }}" >
        </div>

        {{-- Satuan <input type="text" name="satuan" value="{{ $bantuan->satuan }}"> --}}
        <div class="form-group">
          <label>Satuan</label>
          <input type="text" name="satuan" class="form-control form-control-sm" value="{{ $bantuan->satuan }}" >
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary" role="button">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editbantuan").submit(function(event){
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
          location.replace("/databantuan");
        });
      }
    });


  });
</script>

@endpush
