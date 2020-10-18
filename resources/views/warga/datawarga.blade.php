@extends('layouts.page')
@section('title')
Dashboord    
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Dashboard</h1>
</div>

<div class="section-body">
  <a href="/tambahwarga"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIK</th>
			<th>No. KK</th>
			<th>Nama</th>
      <th>TTL</th>
      <th>Jenis Kelamin</th>
      <th>Latitude</th>
      <th>Longitude</th>
      <th>Riwayat</th>
      <th>Waktu Karantina</th>
			<th>Opsi</th>
		</tr>
		@foreach($datawarga as $warga)
		<tr>
			<td>{{ $warga->nik }}</td>
			<td>{{ $warga->no_kk }}</td>
			<td>{{ $warga->nama }}</td>
      <td>{{ $warga->ttl }}</td>
      <td>{{ $warga->jk }}</td>
      <td>{{ $warga->latitude }}</td>
      <td>{{ $warga->longitude }}</td>
      <td>{{ $warga->riwayat }}</td>
      <td>{{ $warga->waktu_karantina }}</td>
			<td>
				<a href="/editwarga/{{ $warga->nik }}">Edit</a>
				|
				<a href="#"onclick="deletewarga({{$warga->id}})">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>    
@endsection

@push('scripts')
    <script>

      function deletewarga(id){
       
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
            type:'GET',
            dataType: 'json',
            url: '/deletewarga/' + id,
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
    </script>
@endpush
