@extends('layout.main')

@section('conten')
    <section class="content-wrapper">
        <div class="container-fluid">
            <div class="content-header">
                <!-- Navbar -->
                {{-- <select class="form-control filter-select" id="pageSelect" onchange="handleSelectChange()">
                    <option value="" disabled selected>Pilih Bulan</option>
                    @foreach ($bulan as $key => $namaBulan)
                        <option value="{{ route('riwayat', ['bulan' => $key]) }}">{{ $namaBulan }}</option>
                    @endforeach
                </select> --}}
                <!-- /.navbar -->
            </div>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div id="grafik"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var respon = <?php echo json_encode($total_respon); ?>;
        var bulan = <?php echo json_encode(array_values($bulan)); ?>; // Menggunakan array_values untuk mendapatkan nilai bulan

        Highcharts.chart('grafik', {
            title: {
                text: 'Grafik Respon Bulanan'
            },
            xAxis: {
                categories: bulan
            },
            yAxis: {
                title: {
                    text: 'Nilai respon Bulanan'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Nilai Respon',
                data: respon
            }]
        });

        function handleSelectChange() {
            var select = document.getElementById('pageSelect');
            var value = select.value;
            if (value) {
                window.location.href = value;
            }
        }
    </script>
@endsection
