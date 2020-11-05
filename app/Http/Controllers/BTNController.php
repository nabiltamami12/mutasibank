<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class BTNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('loginbank.btn');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cek(Request $request)
    {


      $username = $request->username;
      $nasabah = Auth::user()->id;

      $password = $request->password;
      $jawaban1 = $request->jawaban1;
      $jawaban2 = $request->jawaban2;
      $jawaban3 = $request->jawaban3;

          // echo shell_exec("python C:/xampp/htdocs/PANINGnabil/public/bca-scrapping-master/btn.py 2>&1 $username $password $jawaban1 $jawaban2 $jawaban3 $nasabah");//local

$timeA =time();

          echo shell_exec(public_path() . "/Python27/python.exe ". public_path() . "/bca-scrapping-master/btn.py 2>&1 $username $password $jawaban1 $jawaban2 $jawaban3 $nasabah"); //hosting
// dd($timeA);
$timeB = time();
// dd($timeB);
$interval = $timeB-$timeA;

// dd($interval);
// $nasabah = Auth::user()->name;
// dd($timeB);
// $hasilTime = $timeB - $timeA;
// $Hasil = floor($hasilTime / (24 * 60 * 60 )); 
// dd($Hasil);

if ($interval>=30) {

   $url_btn = public_path() . "/".$nasabah."_data_btn_new.json"; // ie: /var/www/laravel/app/storage/$url_btn = 'storage/json/es/noticia.json';
   $datos_btn = file_get_contents($url_btn);
   $data_btn = json_decode($datos_btn, true);

   $data_btn = array_filter($data_btn);
   $data_btn = array_reverse($data_btn);

   $data_btn = collect($data_btn)->all();

   foreach ($data_btn as  $d) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CekMutasi-Database";
    $tanggal = strtr($d[0], '/', '-');
    $tanggal = date('d-m-Y',strtotime($tanggal));
    $tanggal = date("Y-m-d",strtotime($tanggal));
    $tanggal_diakses = date("Y-m-d");

// Create connection

    $conn = mysqli_connect($servername, $username, $password, $dbname);
   //  if ($d[5]=="DB") {
   //    $sql =  "INSERT INTO mutasi_btn (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah) VALUES ('$tanggal','$d[2]','$d[5]','$d[4]','btn','$tanggal_diakses','$nasabah')";
   //  }
   // else{
   //   $sql =  "INSERT INTO mutasi_btn (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah) VALUES ('$tanggal','$d[3]','$d[5]','$d[4]','btn','$tanggal_diakses','$nasabah')";
   // }

 if ($d[5]=="DB") {
      $sql =  "INSERT INTO mutasi_nasabah (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah) VALUES ('$tanggal','$d[2]','$d[5]','$d[4]','btn','$tanggal_diakses','$nasabah')";
    }
   else{
     $sql =  "INSERT INTO mutasi_nasabah (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah) VALUES ('$tanggal','$d[3]','$d[5]','$d[4]','btn','$tanggal_diakses','$nasabah')";
   }

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}


return redirect('/cekmutasiku')->with('alert','Berhasil Menambahkan Data');
    
}

else{
return redirect()->back()->with('alert','Koneksi Gagal');


}
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
