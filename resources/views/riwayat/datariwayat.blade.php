@extends('layouts.page')
@section('title')
Data Riwayat    
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Data Riwayat</h1>
  
</div>

<div class="section-body">
    {{-- <a href="/tambahriwayat" class="btn btn-success" role="button"> Tambah Data Riwayat Baru</a> --}}
	
	<br/>
	<br/>

	<table border="1" id="datariwayat">
    <thead>
		<tr>
      <th>ID Riwayat</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Nama Penyakit</th>
      <th>Latitude</th>
      <th>Longiitude</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datariwayat as $riwayat)
		<tr>
      <td>{{ $riwayat->id_riwayat }}</td>
			<td>{{ $riwayat->nik }}</td>
			<td>{{ $riwayat->nama }}</td>
      <td>{{ $riwayat->nama_penyakit }}</td>
      <td>{{ $riwayat->latitude }}</td>
      <td>{{ $riwayat->longitude }}</td>
      <td>
				{{-- <a href="/editriwayat/{{ $riwayat->id_riwayat }}" class="btn btn-warning" role="button">Edit</a> --}}
        <a href="#"onclick="deleteriwayat({{$riwayat->id_riwayat}})" class="btn btn-danger" role="button">Hapus</a>
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

    function deleteriwayat(id_riwayat){
     
      Swal.fire({
      title: 'Hapus Data ?',
      text: "Anda tidak akan dapat mengembalikan ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.isConfirmed) {

        $.ajax({
          type:'GET',
          dataType: 'json',
          url: '/deleteriwayat/' + id_riwayat,
          success:function(data){
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

    $(document).ready(function() {
            $('#datariwayat').DataTable({
                "order": []
            });
        });
  </script>
    
@endpush
