
  <!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cek Mutasi</title>
 <link rel="icon" type="image/png" href="{{ asset('latar.png') }} ">
<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
      pre {
    text-align: left;
    white-space: pre-line;
  }
</style>

</head>
<body>

  <table width="100%">
    <tr>
        
        
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td style="text-transform: uppercase;"><center><strong>{{ $nasabah }} , {{Carbon\Carbon::parse($tanggal)->translatedFormat('l, d F Y')}} </strong></center></td>
    </tr>

  </table>

  <br/>

  <table width="100%" style="text-transform: uppercase;">
    <thead style="background-color: lightgray;">
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
                        
                      
                      </tr>
    </tbody>

   
  </table>
  <br><br><br>
<footer><center><span></span></center></footer>
</body>
</html>