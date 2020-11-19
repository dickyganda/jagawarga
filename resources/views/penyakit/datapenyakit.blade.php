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
    <a href="/tambahpenyakit"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1" id="datapenyakit">
    <thead>
		<tr>
			<th>ID Penyakit</th>
			<th>Nama Penyakit</th>
			<th>Gejala</th>
      <th>Waktu Karantina (Hari)</th>
      <th>Penanganan Pertama</th>
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datapenyakit as $penyakit)
		<tr>
			<td>{{ $penyakit->id_penyakit }}</td>
			<td>{{ $penyakit->nama_penyakit }}</td>
			<td>{{ $penyakit->gejala }}</td>
      <td>{{ $penyakit->waktu_karantina }}</td>
      <td>{{ $penyakit->penanganan_pertama }}</td>
			<td>
				<a href="/editpenyakit/{{ $penyakit->id_penyakit }}">Edit</a>
				|
				<a href="#"onclick="deletepenyakit({{$penyakit->id_penyakit}})">Hapus</a>
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

    function deletepenyakit(id_penyakit){
     
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
          url: '/deletepenyakit/' + id_penyakit,
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
            $('#datapenyakit').DataTable({
                "order": []
            });
        });
  </script>
    
@endpush
