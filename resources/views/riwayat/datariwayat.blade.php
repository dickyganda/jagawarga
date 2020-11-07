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
    <a href="/tambahriwayat"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1" id="datariwayat">
    <thead>
		<tr>
            <th>ID Riwayat</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>ID Penyakit</th>
            <th>Nama Penyakit</th>
            <th>ID Lokasi</th>
            <th>Latitude</th>
            <th>Longiitude</th>
            {{-- <th>Tanggal Input</th> --}}
            {{-- <th>Waktu Karantina</th>
            <th>Sisa Waktu</th>
            <th>Status</th> --}}
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datariwayat as $riwayat)
		<tr>
      <td>{{ $riwayat->id_riwayat }}</td>
			<td>{{ $riwayat->nik }}</td>
			<td>{{ $riwayat->nama }}</td>
            <td>{{ $riwayat->id_penyakit }}</td>
            <td>{{ $riwayat->nama_penyakit }}</td>
            <td>{{ $riwayat->id_lokasi }}</td>
            <td>{{ $riwayat->latitude }}</td>
            <td>{{ $riwayat->longitude }}</td>
            {{-- <td>{{ $karantina->tgl_input }}</td>
            <td>{{ $karantina->waktu_karantina }}</td> --}}
            {{-- <td>@php
              $diff = date("Y-m-d", strtotime('+' . $karantina->waktu_karantina . "days", strtotime($karantina->tgl_input)));
                $diff = date_diff(date_create($diff), date_create(date("Y-m-d")));
            @endphp
            @if($diff->format("%R") == '+')
            0
            @php
                $status = "selesai";
            @endphp
            @else 
            @if ($diff->format("%a") == '0')
            @php
                $status = "selesai";
            @endphp
            @else
            {{
                $diff->format("%a hari lagi")
            }}
                @php
                $status = "dalam karantina";
            @endphp
            @endif
            @endif
            </td> --}}
            {{-- <td>{{$status}}</td> --}}
			<td>
				<a href="/editkarantina/{{ $riwayat->id_riwayat }}">Edit</a>
				|
        <a href="#"onclick="deletekarantina({{$riwayat->id_riwayat}})">Hapus</a>
        {{-- |
        @if ($status=="selesai"){
        <a href="#"onclick="tambahwaktukarantina({{$karantina->id_karantina}})">Tambah</a>

        }    
        @endif --}}
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

    function deletepenyakit(id_karantina){
     
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
          url: '/deletekarantina/' + id_karantina,
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
            $('#datakarantina').DataTable({
                "order": []
            });
        });
        
        function tambahwaktukarantina(id_karantina){
     
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
         url: '/tambahwaktukarantina/' + id_karantina,
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
