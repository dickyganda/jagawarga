@extends('layouts.page')
@section('title')
Tambah Data Penyakit
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Tambah Data Penyaluran Bantuan</h1>
</div>

<div class="section-body">
    <a href="/datapenyakit"> Kembali</a>

    <br />
    <br />

    <form id="tambahpenyaluranbantuan" method="post">
        {{ csrf_field() }}
        <select id="nik" name="nik" class="form-control select2" required>
            <option></option>
            @foreach ($getnik as $warga)
            <option value="{{$warga->nik}}">{{$warga->nama}}</option>
            @endforeach
        </select>

        <select id="id_bantuan" name="id_bantuan" class="form-control select2" required>
            <option></option>
            @foreach ($getbantuan as $bantuan)
            <option value="{{$bantuan->id_bantuan}}">{{$bantuan->jenis_bantuan}}</option>
            @endforeach
        </select>

        <div class="form-group">
            <input type="text" name="jumlah" required="required" class="form-control form-control-sm" placeholder="Qty">
          </div>

          <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
</div>
@endsection

@push('scripts')

<script>
    $("#tambahpenyaluranbantuan").submit(function (event) {
        event.preventDefault();

        var formdata = new FormData(this);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/tambahpenyaluranbantuan',
            data: formdata,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
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

    $(document).ready(function () {
        $('#nik').select2({
            placeholder: "Pilih Nama"
        });

        $('#id_bantuan').select2({
            placeholder: "Pilih Bantuan"
        });
    });

</script>

@endpush
