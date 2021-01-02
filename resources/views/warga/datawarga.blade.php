@extends('layouts.page')
@section('title')
Data Warga    
@endsection

@push('styles')
    <style>
    </style>
@endpush

@section('content')
<div class="section-header">
  <h1>Data Warga</h1>

  {{-- notifikasi form validasi --}}
  @if ($errors->has('file'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('file') }}</strong>
  </span>
  @endif

  {{-- notifikasi sukses --}}
  @if ($sukses = Session::get('sukses'))
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Indicates a successful or positive action.
  </div>
  @endif

</div>

<div class="section-body">
  <div class="card w-100">
  <a href="/tambahwarga" class="btn btn-success" role="button">Tambah Data Baru</a>

  <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
    IMPORT EXCEL
  </button>
	
	<br/>
	<br/>

	<table border="1" id="datawarga">
    <thead>
		<tr>
			<th>NIK</th>
			<th>No. KK</th>
			<th>Nama</th>
      <th>TTL</th>
      <th>Jenis Kelamin</th>
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datawarga as $warga)
		<tr>
			<td>{{ $warga->nik }}</td>
			<td>{{ $warga->no_kk }}</td>
			<td>{{ $warga->nama }}</td>
      <td>{{ $warga->ttl }}</td>
      <td>{{ $warga->jk }}</td>
			<td>
				<a href="/editwarga/{{ $warga->nik }}" class="btn btn-warning" role="button">Edit</a>
				
				<a href="#"onclick="deletewarga({{$warga->nik}})" class="btn btn-danger" role="button">Hapus</a>
			</td>
		</tr>
    @endforeach
  </tbody>
  </table>
</div>

 <!-- Import Excel -->
 <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="import_excel" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
        </div>
        <div class="modal-body">

          {{ csrf_field() }}

          <label>Pilih file excel</label>
          <div class="form-group">
            <input type="file" name="file" required="required">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@push('scripts')
    <script>

      function deletewarga(nik){
       
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
            url: '/deletewarga/' + nik,
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
            $('#datawarga').DataTable({
                "order": []
            });
        });

        $('.modal').insertAfter($('body'));
    </script>
@endpush
