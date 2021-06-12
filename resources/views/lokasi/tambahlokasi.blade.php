@extends('layouts.page')
@section('title')
Tambah Data Lokasi  
@endsection

@push('styles')
    
@endpush

@section('content')
<div class="section-header">
  <h1>Tambah Data Lokasi</h1>
</div>

<div class="section-body">
  <a href="/datalokasi" class="btn btn-primary" role="button"> Kembali</a>
	
	<br/>
	<br/>

	<form id="tambahlokasi" method="post">
    {{ csrf_field() }}
    <select id="no_kk" name="no_kk" class="form-control select2" {{--onchange="selectTypeNo_kk(this)"--}} required>
      <option></option>
      @foreach ($datawarga as $warga)
      <option value="{{$warga->no_kk}}">{{$warga->no_kk}}</option>
      @endforeach
      </select>

    <div class="form-group">
      <input type="text" name="latitude" required="required" class="form-control form-control-sm" placeholder="Latitude">
    </div>

    <div class="form-group">
      <input type="text" name="longitude" required="required" class="form-control form-control-sm" placeholder="Longitude">
    </div>
		
		<input type="submit" value="Tambah" class="btn btn-primary" role="button">
	</form>
</div>    
@endsection

@push('scripts')

<script>
  $("#tambahlokasi").submit(function(event){
    event.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
      type:'POST',
      dataType: 'json',
      url: '/tambahlokasi',
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
      success:function(data){
        Swal.fire(
          'Sukses!',
          data.reason,
          'success'
        ).then(() => {
          location.replace("/datalokasi");
        });
      }
    });


  });

  $(document).ready(function() {
    $('#no_kk').select2({
      placeholder: "Pilih Nomor KK"
    });
  });

  // function selectTypeNo_kk(item){
  //   var formdata= new FormData();
  //   formdata.append('no_kk', item.options[item.selectedIndex].value);
  //   $.ajax({
  //     type: 'POST',
  //     dataType:'json',
  //     url: 'getwarga',
  //     data: formdata,
  //     contentType: false,
  //     cache: false,
  //     processData: false,
  //     success:function(data){
  //       $('#no_kk option[value=' + data.no_kk + ']').attr('selected','selected');
  //     }
  //   })
  // }
</script>

@endpush