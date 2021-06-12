@extends('layouts.page')
@section('title')
Data Penyaluran Bantuan
@endsection

@push('styles')

@endpush

@section('content')
<div class="section-header">
    <h1>Data Penyaluran Bantuan</h1>

</div>

<div class="section-body">
    <a href="/tambahpenyaluranbantuan" class="btn btn-success" role="button"> + Tambah Data Penerima Bantuan</a>

    <br />
    <br />

    <table border="1" id="datapenyaluranbantuan">
        <thead>
            <tr>
                <th>ID Penyaluran Bantuan</th>
                <th>NIK</th>
                <th>Nama Penerima</th>
                <th>Jenis Bantuan</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Waktu Peenyaluran Bantuan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datapenyaluranbantuan as $penyaluranbantuan)
            <tr>
                <td>{{ $penyaluranbantuan->id_penyaluran_bantuan }}</td>
                <td>{{ $penyaluranbantuan->nik }}</td>
                <td>{{ $penyaluranbantuan->nama }}</td>
                <td>{{ $penyaluranbantuan->jenis_bantuan }}</td>
                <td>{{ $penyaluranbantuan->jumlah }}</td>
                <td>{{ $penyaluranbantuan->status }}</td>
                <td>{{ date_format(date_create($penyaluranbantuan->tgl_penyaluran_bantuan),"d-m-Y") }}</td>

                <td>
                    <a href="#"
                        onclick="deletepenyaluranbantuan({{$penyaluranbantuan->id_penyaluran_bantuan}})" class="btn btn-danger" role="button">Hapus</a>
                    
                    @if ($penyaluranbantuan->status == 'belum')

                    <a href="#" onclick="salurkanbantuan({{$penyaluranbantuan->id_penyaluran_bantuan}})" class="btn btn-success" role="button">Salurkan</a>
                        
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection

@push('scripts')

<script>
    function deletepenyaluranbantuan(id_penyaluran_bantuan) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: '/deletepenyaluranbantuan/' + id_penyaluran_bantuan,
                    success: function (data) {
                        Swal.fire(
                            'Sukses!',
                            data.reason,
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    }
                });

            }
        })

    }

    $(document).ready(function () {
        $('#datapenyaluranbantuan').DataTable({
            "order": []
        });
    });

    function salurkanbantuan(id_penyaluran_bantuan) {

        Swal.fire({
            title: 'Salurkan bantuan?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, salurkan!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: '/salurkanbantuan/' + id_penyaluran_bantuan,
                    success: function (data) {
                        if (data.status == 'error') {
                            Swal.fire(
                                'Error!',
                                data.reason,
                                'error'
                            );
                        } else {
                            Swal.fire(
                                'Sukses!',
                                data.reason,
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        }

                    }
                });

            }
        })

    }

</script>

@endpush
