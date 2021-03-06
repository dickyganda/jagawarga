@extends('layouts.page')
@section('title')
Data Lokasi    
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Data Lokasi</h1>
  
</div>

<div class="section-body">
    <a href="/tambahlokasi" class="btn btn-success" role="button"> Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1" id="datalokasi">
    <thead>
		<tr>
      <th>ID lokasi</th>
      <th>Nomor KK</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datalokasi as $lokasi)
		<tr>
      <td>{{ $lokasi->id_lokasi }}</td>
      <td>{{ $lokasi->no_kk }}</td>
			<td>{{ $lokasi->latitude }}</td>
			<td>{{ $lokasi->longitude }}</td>
			<td>
				<a href="/editlokasi/{{ $lokasi->id_lokasi }}" class="btn btn-warning" role="button">Edit</a>
				<a href="#"onclick="deletelokasi({{$lokasi->id_lokasi}})" class="btn btn-danger" role="button">Hapus</a>
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

    function deletelokasi(id_lokasi){
     
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
          url: '/deletelokasi/' + id_lokasi,
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
            $('#datalokasi').DataTable({
                "order": []
            });
        });
  </script>
    
@endpush
