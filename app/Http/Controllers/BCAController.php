<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Symfony\Component\Process\Process;
// use Symfony\Component\Process\Exception\ProcessFailedException;
use Auth;
use DB;

class BCAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('loginbank.bca');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function cek(Request $request)
    {
      $username = $request->username;
      $password = $request->password;
       $nasabah = Auth::user()->id;
      $id_nasabah = Auth::user()->id;

    // echo shell_exec("python C:/xampp/htdocs/PANINGnabil/public/bca-scrapping-master/bca.py 2>&1 $username $password $nasabah"); //local


// if (file_exists( public_path() . "/".$nasabah."_data_bca_new.json")) {
$timeA =time();

echo shell_exec(public_path() . "/Python27/python.exe ". public_path() . "/bca-scrapping-master/bca.py 2>&1 $username $password $nasabah"); //hosting
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

if ($interval>=20) {
    
$url_bca = public_path() . "/".$nasabah."_data_bca_new.json";
$datos_bca = file_get_contents($url_bca);
$data_bca = json_decode($datos_bca, true);

$data_bca = array_filter($data_bca);

$data_bca = collect($data_bca)->all();


foreach ($data_bca as  $d) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CekMutasi-Database";
    $tanggal = strtr($d[0], '/', '-');
    // $tanggal = date('d-m',strtotime($tanggal));
$tanggal = $tanggal.'-'.date('Y');
    $tanggal_diakses = date("Y-m-d");
    $tanggal = date("Y-m-d",strtotime($tanggal));
   

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // $sql =  "INSERT INTO mutasi_bca (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah)  VALUES ('$tanggal','$d[3]','$d[4]','$d[5]','bca','$tanggal_diakses','$nasabah')";
  $sql =  "INSERT INTO mutasi_nasabah (tanggal,nominal_mutasi,tipe_mutasi,total,bank,tanggal_diakses,id_nasabah)  VALUES ('$tanggal','$d[3]','$d[4]','$d[5]','bca','$tanggal_diakses','$nasabah')";

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



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
