@extends('layouts.page')
@section('title')
Data Transaksi
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Data Transaksi</h1>
</div>

<div class="section-body">
    {{-- <a href="/tambahwarga"> + Tambah Data Baru</a> --}}

    <br />
    <br />

    <table border="1" id="databantuan">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama</th>
                <th>Jenis Bantuan</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tgl Pemberian Bantuan</th>
                {{-- <th>Opsi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($datatransaksi as $transaksi)
            <tr>
                <td>{{ $transaksi->id_transaksi }}</td>
                <td>{{ $transaksi->nama}}</td>
                <td>{{ $transaksi->jenis_bantuan}}</td>
                <td>{{ $transaksi->jumlah}}</td>
                <td>{{ $transaksi->satuan}}</td>
                <td>{{ $transaksi->tgl_transaksi}}</td>
                {{-- <td>
                    <a href="/editbantuan/{{ $bantuan->id_bantuan }}" class="btn btn-warning" role="button">Edit</a>
                    <a href="#" onclick="deletebantuan({{$bantuan->id_bantuan}})" class="btn btn-danger"
                        role="button">Hapus</a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    // function deletebantuan(id_bantuan) {

    //     Swal.fire({
    //         title: 'Hapus Data ?',
    //         text: "Anda tidak akan dapat mengembalikan ini!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Hapus'
    //     }).then((result) => {
    //         if (result.isConfirmed) {

    //             $.ajax({
    //                 type: 'GET',
    //                 dataType: 'json',
    //                 url: '/deletebantuan/' + id_bantuan,
    //                 success: function (data) {
    //                     Swal.fire(
    //                         'Sukses!',
    //                         data.reason,
    //                         'success'
    //                     ).then(() => {
    //                         location.reload();
    //                     });
    //                 }
    //             });

    //         }
    //     })

    // }

    // $(document).ready(function () {
    //     $('#databantuan').DataTable({
    //         "order": []
    //     });
    // });
</script>
@endpush
