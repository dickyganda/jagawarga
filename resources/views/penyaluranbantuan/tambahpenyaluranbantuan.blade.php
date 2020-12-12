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

        {{-- ID Bantuan <input type="text" name="gejala" required="required"> <br/> --}}
        Qty <input type="text" name="jumlah" required="required"> <br />
        {{-- Penanganan Pertama <input type="text" name="penanganan_pertama" required="required"> <br/> --}}
        <input type="submit" value="Tambah">
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
            theme: 'bootstrap4',
            placeholder: "Pilih Nama"
        });

        $('#id_bantuan').select2({
            theme: 'bootstrap4',
            placeholder: "Pilih Bantuan"
        });
    });

    // function selectTypeNik(item) {
    //     var formdata = new FormData();
    //     formdata.append('nik', item.options[item.selectedIndex].value);
    //     $.ajax({
    //         type: 'POST',
    //         dataType: 'json',
    //         url: 'getwarga',
    //         data: formdata,
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success: function (data) {
    //             $('#nama').val(data.nama);
    //         }
    //     })
    // }

    // function selectTypeBantuan(item) {
    //     var formdata = new FormData();
    //     formdata.append('id_bantuan', item.options[item.selectedIndex].value);
    //     $.ajax({
    //         type: 'POST',
    //         dataType: 'json',
    //         url: 'getwarga',
    //         data: formdata,
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //         success: function (data) {
    //             $('#jenis_bantuan').val(data.nama);
    //         }
    //     })
    // }

</script>

@endpush
