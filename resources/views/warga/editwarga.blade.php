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
    <h3>Edit Data Warga</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach($datawarga as $warga)
    <form id="editWarga" method="post">
         {{-- <input type="hidden" name="id" value="{{ $warga->id }}" hidden> --}}
         <div class="form-group">
          <label>NIK</label>
          <input type="text" name="nik" class="form-control form-control-sm" value="{{ $warga->nik }}" readonly>
        </div>

        <div class="form-group">
          <label>Nomor KK</label>
          <input type="text" name="no_kk" required="required" class="form-control form-control-sm" value="{{ $warga->no_kk }}">
        </div>

        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" required="required" class="form-control form-control-sm" value="{{ $warga->nama }}">
        </div>

        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" name="ttl" required="required" class="form-control form-control-sm" value="{{ $warga->ttl }}">
        </div>

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

        {{-- <div class="form-group">
          <label>Latitude</label>
          <input type="text" name="latitude" required="required" class="form-control form-control-sm" value="{{ $warga->latitude }}">
        </div>

        <div class="form-group">
          <label>Longitude</label>
          <input type="text" name="longitude" required="required" class="form-control form-control-sm" value="{{ $warga->longitude }}">
        </div> --}}
        
        {{-- <div class="form-group">
          <label>Riwayat</label>
          <input type="text" name="riwayat" required="required" class="form-control form-control-sm" value="{{ $warga->riwayat }}">
        </div>

        <div class="form-group">
          <label>Waktu Karantina</label>
          <input type="text" name="waktu_karantina" required="required" class="form-control form-control-sm" value="{{ $warga->waktu_karantina }}">
        </div> --}}

        <button class="btn btn-primary" type="submit">Simpan</button>
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
