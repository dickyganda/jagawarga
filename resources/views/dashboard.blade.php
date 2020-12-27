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

    <div class="card-group">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p class="card-text">Jumlah Penduduk</p>
                <h4>{{$jumlah_penduduk}}</h4>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p class="card-text">Jenis Penyakit Menular</p>
                <h4>7</h4>
            </div>
        </div>
        <div class="card bg-success">
            <div class="card-body text-center">
                <p class="card-text">Jumlah Kasus</p>
                <h4>5</h4>
            </div>
        </div>
        {{-- <div class="card bg-danger">
            <div class="card-body text-center">
                <p class="card-text">Some text inside the fourth card</p>
            </div> --}}
        </div>
    </div>

    <div class="card w-100">
        <div style="width: 500px; height: 500px">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [{
                label: '# of Votes',
                data: {{json_encode($kasusaktif_monthly)}},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>

@endpush
