@extends('layouts.page')
@section('title')
Edit Data Warga
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Edit Data Warga</h1>
</div>

<div class="section-body">
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datawarga as $warga)
    <form id="editWarga" method="post">
         <input type="hidden" name="id" value="{{ $warga->id }}" hidden>
        NIK <input type="text" name="nik" value="{{ $warga->nik }}" readonly> <br />
        No. KK <input type="text" required="required" name="no_kk" value="{{ $warga->no_kk }}"> <br />
        Nama <input type="text" required="required" name="nama" value="{{ $warga->nama }}"> <br />
        Tanggal Lahir <input type="date" required="required" name="ttl" value="{{ $warga->ttl }}"> <br />
        Jenis Kelamin

        @if ( $warga->jk == 'Laki-Laki' )
        <input type="radio" name="jk" value="Laki-Laki" checked>
        <label for="male">Laki-Laki</label>
        <input type="radio" name="jk" value="Perempuan">
        @else
        <input type="radio" name="jk" value="Laki-Laki">
        <label for="male">Laki-Laki</label>
        <input type="radio" name="jk" value="Perempuan" checked>
        @endif
        <label for="female">Perempuan</label>
        <br />

        Latitude <input type="text" required="required" name="lokasi" value="{{ $warga->latitude }}"> <br />
        Longitude <input type="text" required="required" name="lokasi" value="{{ $warga->longitude }}"> <br />
        Riwayat <input type="text" required="required" name="riwayat" value="{{ $warga->riwayat }}"> <br />
        Waktu Karantina <input type="text" required="required" name="waktu_karantina"
            value="{{ $warga->waktu_karantina }}"> <br />
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</div>
@endsection

@push('scripts')

<script>
  $("#editWarga").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/updatewarga',
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
          location.replace("/datawarga");
        });
      }
    });


  });
</script>

@endpush
