@extends('layouts.master')
@section('content')
<!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        } );
     
        new $.fn.dataTable.FixedHeader( table );
    });
</script>
  @if (session('berhasil'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success"></span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

      @if (session('gagal'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-danger"></span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
                  <!-- <h3 class="panel-title">Pengguna : {{ Auth::user()->name }} </h3>
                  <br> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

    <div class="container">
        <div class="row">
                <form action="{{url('/cekmutasiku/filter')}}" method="get"  class="input-group">
                    
                    <div class="input-group-btn search-panel" style="background-color:  none;">
                        <select name="search_param" id="search_param" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  onchange="showDiv(this)">
                            <option value="all">All</option>
                            <option value="bca">BCA</option>
                            <option value="btn">BTN</option>
                            <option value="4">Tanggal</option>
                        </select>
                    </div>
        
                    <span class="input-group-btn" >
                        <button class="btn btn-default" type="submit" style="margin-left:  -46em">
                           <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>

            <div  id="select_tanggal" style="display: none;">
                        <button class="btn btn-default" type="submit" style="margin-left:  -1.2em;">
                           <span class="glyphicon glyphicon-search"></span>
                        </button>
                              <span style="margin-left: 2em;">Dari </span>
                      <input type="date" name="tanggal_mulai" max="<?php echo date('Y-m'); ?>">
                      <span >Sampai </span>
                      <input type="date" name="tanggal_akhir" max="<?php echo date('Y-m'); ?>">
                  </div>
                </form><!-- end form -->     
        </div><!-- end row -->  
    </div><!-- end container -->    
    <script type="text/javascript">

          function showDiv(element)
          {
          
            document.getElementById('select_tanggal').style.display = element.value == 4 ? 'block' : 'none';
          }

        </script>   

                    <div>
   <form action="{{url('/mutasi/unduh_pdf/database')}}" method="get">
                      <button type="submit" style="color: #a11023; border: none; float: right;background: none" >
                        <i class="fa fa-file-pdf fa-2x"></i>

                      </button>
                      <input type="text" name="filter" value="{{$filter}}" style="display: none;" >
                    <input type="text" name="tanggal_mulai" value="{{$tanggal_mulai_cetak}}" style="display: none;" >
                    <input type="text" name="tanggal_akhir" value="{{$tanggal_akhir_cetak}}" style="display: none;" >
                    </form>
                    <form action="{{url('/mutasi/unduh_excel/database')}}" method="get">
                      <button type="submit" style="color: #00610b;float: right; border: none; background: none;" >
                        <i class="fa fa-file-excel fa-2x"></i>

                      </button>
                        <input type="text" name="filter" value="{{$filter}}" style="display: none;" >
                    <input type="text" name="tanggal_mulai_excel" value="{{$tanggal_mulai_cetak}}" style="display: none;" >
                    <input type="text" name="tanggal_akhir_excel" value="{{$tanggal_akhir_cetak}}" style="display: none;" >
                    </form>
                    </div>
   <!--  <label><input type="radio" name="colorRadio" value="bca"> bca</label>
        <label><input type="radio" name="colorRadio" value="btn"> btn</label>
        <label><input type="radio" name="colorRadio" value="bri"> bri</label> -->
                </div>
 <!-- <li><input type="checkbox" value="bca">bca</li>
  <li><input type="checkbox" value="btn">btn</li>
  <li><input type="button" id="btnFilter" value="Filter"></li> -->
  
<div class="panel-body" id="container">

                  <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
                        <!-- <div class="col-lg-1 col-xs-2 thumbnail" style="margin-left: 30em"><img src="bca.png" /></div>
                          
                        <br> -->

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nominal Mutasi</th>
                        <th>Tipe Mutasi</th>
                        <th>Nominal Akhir</th>
                        <th>Bank</th>
                        <th>Tanggal Akses Mutasi</th>
                      </tr>
                    </thead>

                    <tbody>

                      
                        <?php $i = 1; ?>


                        @foreach($data_report as $value)
                            
                      <tr >

                        <td>{{ $i }}</td>

<td>{{Carbon\Carbon::parse($value->tanggal)->translatedFormat('d F Y')}}</td>
<td style="text-align: right">{{$value->nominal_mutasi}}</td>
<td style="text-align: right">{{$value->tipe_mutasi}}</td>
<td style="text-align: right">{{$value->total}}</td>
<td style="text-transform: uppercase;">{{$value->bank}}</td>
<td>{{Carbon\Carbon::parse($value->tanggal_diakses)->translatedFormat('d F Y')}}</td>
  
                        <?php $i++ ?>
                      
                      </tr >
                        @endforeach

                    </tbody>
                    
                  </table>
                

                </div>
<!--    <script src="{{asset('js/Chart.js')}}"></script>
  <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
    </style> -->
  <!--   <div class="container">
            <canvas id="demobar" width="100" height="100"></canvas>
    </div>   -->  
<!--      <div class="chart" >
          <h2>Line Chart</h2>
          <canvas id="line-chart"></canvas>
        </div>   -->      
              </div>

          <!-- OVERVIEW -->
          <!-- <div class="panel panel-headline">

            <div class="panel-body">
                  
                            <div style="padding: 150px;">
                                <a href=" {{ url('loginbri') }}"><img src="bri.png" height= "160px" width="220" style="padding: 30px;"/></a>
                                 <a href="{{url ('loginbca')}}"><img src="bca.png" height= "160px" width="220" style="padding: 30px;"/></a>
                                 <a href="{{url ('loginbtn')}}"><img src="btn.png" height= "160px" width="220" style="padding: 30px;"/></a>
                          </div>
            </div>
          </div> -->
<div id="pie_chart"></div>

        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<script type="text/javascript">
 var analytics = <?php echo $data; ?> 

 google.charts.load('current', {'packages':['corechart']});

 google.charts.setOnLoadCallback(drawChart);

 function drawChart()
 {
  var data = google.visualization.arrayToDataTable(analytics);
  var options = {
   title : 'Data Mutasi {{Auth::user()->name}}'
 };
 var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
 chart.draw(data , options);

}
</script>


<!-- 
  <?php
    $koneksi     = mysqli_connect("localhost", "root", "", "cekmutasi-database");

    $tanggal      = mysqli_query($koneksi, "SELECT tanggal FROM mutasi_nasabah ");

    $BCA      = mysqli_query($koneksi, "SELECT * FROM mutasi_nasabah WHERE bank='bca'");
    $BTN      = mysqli_query($koneksi, "SELECT * FROM mutasi_nasabah WHERE bank='btn'");

     ?>

        <script  type="text/javascript">

        var ctx = document.getElementById("demobar").getContext("2d");
        var data = {
                  labels: ["Debit","Kredit"],
                  datasets: [
                  {
                    label: "Samsung",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(59, 100, 222, 1)",
                    borderColor: "rgba(59, 100, 222, 1)",
                    pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
                    pointHoverBorderColor: "rgba(59, 100, 222, 1)",
                    data: [<?php while ($p = mysqli_fetch_array($BCA)) { echo '"' . $p['tanggal'] . '","' . $p['tipe_mutasi'] . '","' . $p['bank'] . '",';}?>]
                  },
                  {
                    label: "Apple",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(203, 222, 225, 0.9)",
                    borderColor: "rgba(203, 222, 225, 0.9)",
                    pointHoverBackgroundColor: "rgba(203, 222, 225, 0.9)",
                    pointHoverBorderColor: "rgba(203, 222, 225, 0.9)",
                    data: [<?php while ($p = mysqli_fetch_array($BTN))  { echo '"' . $p['tanggal'] . '","' . $p['tipe_mutasi'] . '","' . $p['bank'] . '",';}?>]
                  },
                  ]
                  };

        var myBarChart = new Chart(ctx, {
                  type: 'line',
                  data: data,
                  options: {
                  barValueSpacing: 20,
                  scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }]
                    }
                }
              });
      </script> -->


<?php
    $connect = mysqli_connect("localhost", "root", "", "cekmutasi-database");
    $data_penjualan = mysqli_query($connect, "SELECT *, count(*) AS ikune FROM mutasi_nasabah GROUP BY tanggal");

    $data_tanggal = array();
    $data_total = array();

    while ($data = mysqli_fetch_array($data_penjualan)) {
      $data_tanggal[] = Carbon\Carbon::parse($data['tanggal'])->translatedFormat('d F Y')." ".$data['tipe_mutasi']; // Memasukan tanggal ke dalam array
      $data_total[] = $data['ikune']; // Memasukan total ke dalam array
    }
    ?>
       <style>
        .container {
          width: 100%;
          margin: 15px 10px;
        }

        .chart {
          width: 50%;
          float: left;
          text-align: center;
        }
      </style>
      <script type="text/javascript" src="{{asset('js/Chart.bundle.min.js')}}"></script>
<script>
   var linechart = document.getElementById('line-chart');
        var chart = new Chart(linechart, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($data_tanggal) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Mutasi {{Auth::user()->name}}' ,
              data: <?php echo json_encode($data_total) ?>,
              borderColor: 'rgba(70, 130, 219)',
              backgroundColor: 'transparent',
              borderWidth: 2
            }]
          }
        });
</script>
      
    @endsection