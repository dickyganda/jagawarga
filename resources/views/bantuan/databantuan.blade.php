@extends('layouts.page')
@section('title')
Data Bantuan    
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Data Bantuan</h1>
</div>

<div class="section-body">
  {{-- <a href="/tambahwarga"> + Tambah Data Baru</a> --}}
	
	<br/>
	<br/>

	<table border="1" id="databantuan">
    <thead>
		<tr>
			<th>ID Bantuan</th>
      <th>Jenis Bantuan</th>
      <th>Stok</th>
      <th>Satuan</th>
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($databantuan as $bantuan)
		<tr>
			<td>{{ $bantuan->id_bantuan }}</td>
      <td>{{ $bantuan->jenis_bantuan}}</td>
      <td>{{ $bantuan->stok}}</td>
      <td>{{ $bantuan->satuan}}</td>
			<td>
				<a href="/editbantuan/{{ $bantuan->id_bantuan }}">Edit</a>
				|
				<a href="#"onclick="deletebantuan({{$bantuan->id_bantuan}})">Hapus</a>
			</td>
		</tr>
    @endforeach
  </tbody>
	</table>
</div>    
@endsection

@push('scripts')
<script>

  function deletebantuan(id_bantuan){
   
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
        url: '/deletebantuan/' + id_bantuan,
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
            $('#databantuan').DataTable({
                "order": []
            });
        });
</script>
@endpush