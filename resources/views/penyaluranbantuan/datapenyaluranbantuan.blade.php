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
    <a href="/tambahpenyaluranbantuan"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1" id="datapenyaluranbantuan">
    <thead>
		<tr>
            <th>ID Penyaluran Bantuan</th>
            <th>NIK</th>
            <th>Nama Penerima</th>
            <th>ID Bantuan</th>
            <th>Jenis Bantuan</th>
            <th>Qty</th>
            {{-- <th>Latitude</th>
            <th>Longiitude</th> --}}
            {{-- <th>Tanggal Input</th> --}}
            {{-- <th>Waktu Karantina</th>
            <th>Sisa Waktu</th>
            <th>Status</th> --}}
			<th>Opsi</th>
    </tr>
  </thead>
  <tbody>
		@foreach($datapenyaluranbantuan as $penyaluranbantuan)
		<tr>
      <td>{{ $penyaluranbantuan->id_penyaluran_bantuan }}</td>
			<td>{{ $penyaluranbantuan->nik }}</td>
			<td>{{ $penyaluranbantuan->nama }}</td>
      <td>{{ $penyaluranbantuan->id_bantuan }}</td>
      <td>{{ $penyaluranbantuan->jenis_bantuan }}</td>
      <td>{{ $penyaluranbantuan->qty }}</td>
            {{-- <td>{{ $riwayat->latitude }}</td>
            <td>{{ $riwayat->longitude }}</td> --}}
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
				<a href="/editpenyaluranbantuan/{{ $penyaluranbantuan->id_penyaluran_bantuan }}">Edit</a>
				|
        <a href="#"onclick="deletepenyaluranbantuan({{$penyaluranbantuan->id_penyaluran_bantuan}})">Hapus</a>
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

    function deletepenyaluranbantuan(id_penyaluran_bantuan){
     
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
          url: '/deletepenyaluranbantuan/' + id_penyaluran_bantuan,
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
            $('#datapenyaluranbantuan').DataTable({
                "order": []
            });
        });
        
  // //       function tambahwaktukarantina(id_karantina){
     
  // //    Swal.fire({
  // //    title: 'Are you sure?',
  // //    text: "You won't be able to revert this!",
  // //    icon: 'warning',
  // //    showCancelButton: true,
  // //    confirmButtonColor: '#3085d6',
  // //    cancelButtonColor: '#d33',
  // //    confirmButtonText: 'Yes, delete it!'
  // //  }).then((result) => {
  // //    if (result.isConfirmed) {

  // //      $.ajax({
  // //        type:'GET',
  // //        dataType: 'json',
  // //        url: '/tambahwaktukarantina/' + id_karantina,
  // //        success:function(data){
  // //          Swal.fire(
  // //            'Sukses!',
  // //            data.reason,
  // //            'success'
  // //          ).then(() => {
  // //            location.reload();
  // //          });
  // //        }
  // //      });

  // //    }
  // //  })

  //  }
  </script>
    
@endpush
