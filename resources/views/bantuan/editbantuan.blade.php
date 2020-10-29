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

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($databantuan as $bantuan)
    <form id="editbantuan" method="post">
         <input type="hidden" name="id_bantuan" value="{{ $bantuan->id_bantuan }}" hidden>
        Bantuan <input type="text" name="bantuan" value="{{ $bantuan->bantuan }}"> <br />
        <input type="submit" value="Simpan">
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
