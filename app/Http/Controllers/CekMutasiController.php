<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use Excel;
use DB;
use App\Exports\MutasiExport;
class CekMutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


$id_nasabah = Auth::user()->id;
$data_report = DB::table('mutasi_nasabah')
       ->groupBy('tanggal');
 
$userInput = 2;

$data = DB::table('mutasi_nasabah')
        ->has('nominal_mutasi', '<', $userInput)
       ->groupBy(['tipe_mutasi'])
       ->select(
        DB::raw('tipe_mutasi as a'),
        DB::raw('tanggal as tanggale'),
        DB::raw('sum(nominal_mutasi) as number'))
       ->where('id_nasabah',$id_nasabah)
       ->get();
     
     $array[] = ['a', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->a." ("."Rp " . number_format((($value->number)*1000),2,',','.').")",$value->number];

     }
     $data_report = $data_report
      ->get();

        return view('nasabah.cekmutasi',compact('mutasi_bca','mutasi_btn','data_report'))->with('data', json_encode($array));

// dd($mutasi_bca);
// dd($mutasi_btn);




}




 public function filter_data(Request $request)
 {
$id_nasabah = Auth::user()->id;

   $filter = $request->search_param;
   $tanggal_mulai_cetak = $request->tanggal_mulai;
   $tanggal_akhir_cetak = $request->tanggal_akhir;
$data_report = DB::table('mutasi_nasabah');


  if ($filter =='all' ) {
     $data_report = $data_report;
   }
 else if ($filter =='bca' ) {
     $data_report = $data_report->where('bank','bca');
   }

   else if ($filter =='btn' ) {
     $data_report = $data_report->where('bank','btn');
   }
   else if ($filter ==4 ) {
     if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
       $data_report = $data_report->whereDate('tanggal','>=',$request->tanggal_mulai);     
       $data_report = $data_report->whereDate('tanggal','<=',$request->tanggal_akhir);
     }
     else{
      return redirect()->back()->with('gagal', 'Data Tidak Ada');

    }
  }


$data = DB::table('mutasi_nasabah')
       ->select(
        DB::raw('tipe_mutasi as a'),
        DB::raw('tanggal as tanggale'),
        DB::raw('sum(nominal_mutasi) as number'))
       ->where('id_nasabah',$id_nasabah)
       ->groupBy('a')
       ->get();
     
     $array[] = ['a', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->a." ("."Rp " . number_format((floatval($value->number))."000",2,',','.').")",$value->number];

     }
  $data_report = $data_report->get();

        return view('nasabah.cekmutasi_filter',compact('mutasi_bca','mutasi_btn','data_report','tanggal_mulai_cetak','tanggal_akhir_cetak','filter'))->with('data', json_encode($array));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

 public function unduh_pdf_database(Request $request)
    {
$id_nasabah = Auth::user()->id;
$nasabah = Auth::user()->nama;
$tanggal = date("Y-m-d");
   $filter = $request->filter;

$data_report = DB::table('mutasi_nasabah');


  if ($filter =='all' ) {
     $data_report = $data_report;
   }
 else if ($filter =='bca' ) {
     $data_report = $data_report->where('bank','bca');
   }

   else if ($filter =='btn' ) {
     $data_report = $data_report->where('bank','btn');
   }
   else if ($filter ==4 ) {
     if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
       $data_report = $data_report->whereDate('tanggal','>=',$request->tanggal_mulai_cetak);     
       $data_report = $data_report->whereDate('tanggal','<=',$request->tanggal_akhir_cetak);
     }
     else{
      return redirect()->back()->with('gagal', 'Data Tidak Ada');

    }
  }


  $data_report = $data_report->get();

$pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_report','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($data_report);
  return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

        
    }



 public function unduh_excel_database(Request $request)
    {
$id_nasabah = Auth::user()->id;
$nasabah = Auth::user()->nama;
$tanggal = date("Y-m-d");
   $filter = $request->filter;

$data_report = DB::table('mutasi_nasabah');


  if ($filter =='all' ) {
     $data_report = $data_report;
   }
 else if ($filter =='bca' ) {
     $data_report = $data_report->where('bank','bca');
   }

   else if ($filter =='btn' ) {
     $data_report = $data_report->where('bank','btn');
   }
   else if ($filter ==4 ) {
     if (date($request->tanggal_mulai) <= date($request->tanggal_akhir)) {
     $data_report = $data_report->whereDate('tanggal','>=',$request->tanggal_mulai);     
       $data_report = $data_report->whereDate('tanggal','<=',$request->tanggal_akhir);
     }
     else{
      return redirect()->back()->with('alert', 'Data Tidak Ada');

    }
  }


  $data_report = $data_report->get()->toArray();



$export = new MutasiExport($data_report);
         return Excel::download( $export, 'Mutasi '.$nasabah.' Tanggal '.$tanggal.' '.'.xlsx');


        
    }

    public function unduh_pdf()
    {
        $nasabah = Auth::user()->name;
        $tanggal = now();
if (file_exists(public_path() . "/".$nasabah."_data_bca_new.json") && file_exists(public_path() . "/".$nasabah."_data_btn_new.json")){


    $url_bca = public_path() . "/".$nasabah."_data_bca_new.json";
    $datos_bca = file_get_contents($url_bca);
    $data_bca = json_decode($datos_bca, true);

    $data_bca = array_filter($data_bca);

    $data_bca = collect($data_bca)->all();




     $url_btn = public_path() . "/".$nasabah."_data_btn_new.json"; // ie: /var/www/laravel/app/storage/$url_btn = 'storage/json/es/noticia.json';
    $datos_btn = file_get_contents($url_btn);
    $data_btn = json_decode($datos_btn, true);

    $data_btn = array_filter($data_btn);

    $data_btn = collect($data_btn)->all();

$data =  array_merge($data_bca, $data_btn);


// dd($data);
// dd($data_btn);
// dd($data_bca);

         $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

    }

else if (file_exists( public_path() . "/".$nasabah."_data_bca_new.json")) {

     $url_bca = public_path() . "/".$nasabah."_data_bca_new.json"; // ie: /var/www/laravel/app/storage/$url_bca = 'storage/json/es/noticia.json';
    $datos_bca = file_get_contents($url_bca);
    $data_bca = json_decode($datos_bca, true);

    $data_bca = array_filter($data_bca);

    $data_bca = collect($data_bca)->all();

    $data_btn = array();

$data =  array_merge($data_bca, $data_btn);

       $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

}

else if (file_exists( public_path() . "/".$nasabah."_data_btn_new.json")) {
   
     $url_btn = public_path() . "/".$nasabah."_data_btn_new.json"; // ie: /var/www/laravel/app/storage/$url_btn = 'storage/json/es/noticia.json';
    $datos_btn = file_get_contents($url_btn);
    $data_btn = json_decode($datos_btn, true);

    $data_btn = array_filter($data_btn);

    $data_btn = collect($data_btn)->all();

    $data_bca = array();


$data =  array_merge($data_bca, $data_btn);


        $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

}

else
{


    $data_bca = array();
    $data_btn = array();


$data =  array_merge($data_bca, $data_btn);


       $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function unduh_excel()
    {
        $nasabah = Auth::user()->name;
        $tanggal = now();
if (file_exists(public_path() . "/".$nasabah."_data_bca_new.json") && file_exists(public_path() . "/".$nasabah."_data_btn_new.json")){


    $url_bca = public_path() . "/".$nasabah."_data_bca_new.json";
    $datos_bca = file_get_contents($url_bca);
    $data_bca = json_decode($datos_bca, true);

    $data_bca = array_filter($data_bca);

    $data_bca = collect($data_bca)->all();




     $url_btn = public_path() . "/".$nasabah."_data_btn_new.json"; // ie: /var/www/laravel/app/storage/$url_btn = 'storage/json/es/noticia.json';
    $datos_btn = file_get_contents($url_btn);
    $data_btn = json_decode($datos_btn, true);

    $data_btn = array_filter($data_btn);

    $data_btn = collect($data_btn)->all();

$data =  array_merge($data_bca, $data_btn);

$export = new MutasiExport($data);
// dd($data);
// dd($data_btn);
// dd($data_bca);

         // $pdf = Excel::download('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
         return Excel::download( $export, 'Mutasi '.$nasabah.' Tanggal '.$tanggal.' '.'.xlsx');
  // return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');

    }

else if (file_exists( public_path() . "/".$nasabah."_data_bca_new.json")) {

     $url_bca = public_path() . "/".$nasabah."_data_bca_new.json"; // ie: /var/www/laravel/app/storage/$url_bca = 'storage/json/es/noticia.json';
    $datos_bca = file_get_contents($url_bca);
    $data_bca = json_decode($datos_bca, true);

    $data_bca = array_filter($data_bca);

    $data_bca = collect($data_bca)->all();

    $data_btn = array();

$data =  array_merge($data_bca, $data_btn);
$export = new MutasiExport($data);
       // $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  // return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');
         return Excel::download( $export, 'Mutasi '.$nasabah.' Tanggal '.$tanggal.' '.'.xlsx');


}

else if (file_exists( public_path() . "/".$nasabah."_data_btn_new.json")) {
   
     $url_btn = public_path() . "/".$nasabah."_data_btn_new.json"; // ie: /var/www/laravel/app/storage/$url_btn = 'storage/json/es/noticia.json';
    $datos_btn = file_get_contents($url_btn);
    $data_btn = json_decode($datos_btn, true);

    $data_btn = array_filter($data_btn);

    $data_btn = collect($data_btn)->all();

    $data_bca = array();


$data =  array_merge($data_bca, $data_btn);
$export = new MutasiExport($data);

        // $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  // return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');
         return Excel::download( $export, 'Mutasi '.$nasabah.' Tanggal '.$tanggal.' '.'.xlsx');


}

else
{


    $data_bca = array();
    $data_btn = array();


$data =  array_merge($data_bca, $data_btn);
$export = new MutasiExport($data);

       // $pdf = PDF::loadView('nasabah.unduh_mutasi', compact('data_btn','data_bca','data','nasabah','tanggal'))->setPaper('a4', 'landscape');
  // dd($lap);
  // return $pdf->stream('CekMutasi'.$nasabah.' - '.$tanggal.'.pdf');
         return Excel::download( $export, 'Mutasi '.$nasabah.' Tanggal '.$tanggal.' '.'.xlsx');


}
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
