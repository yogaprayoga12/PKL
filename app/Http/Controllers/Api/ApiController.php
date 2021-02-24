<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use DB;

class ApiController extends Controller
{
    public $data = [];
    public function global()
    {
        $response = Http::get('https://api.kawalcorona.com')->json();//link dari web kawalcovid
        foreach ($response as $data => $val) {
        $raw = $val['attributes'];
        $res = [
            'Negara' => $raw['Country_Region'],
            'Positif' => $raw['Confirmed'],
            'Sembuh' => $raw['Recovered'],
            'Meninggal' => $raw['Deaths']
        ];
        array_push($this->data, $res);
    }
    $data = [
        'Succes' => true,
        'Data' => $this->data,
        'Message' => 'Berhasil'
    ];
    return response()->json($data,200);
    }

    public function Indonesia(){
        $jumlah_positif = DB::table('trackings')
                        ->select('trackings.jumlah_positif')
                        ->sum('trackings.jumlah_positif');

        $jumlah_sembuh = DB::table('trackings')
                        ->select('trackings.jumlah_sembuh')
                        ->sum('trackings.jumlah_sembuh');

        $jumlah_meninggal = DB::table('trackings')  
                        ->select('trackings.jumlah_meninggal')
                        ->sum('trackings.jumlah_meninggal');

        return response([
                    'success' => true,
                    'data' => [
                    'name' => 'Indonesia',
                    'jumlah_positif'=> $jumlah_positif,
                    'jumlah_sembuh'=> $jumlah_sembuh,
                    'jumlah_meninggal'=> $jumlah_meninggal,
                            ],
                                    'message' => ' Berhasil!',

                        ]);

    }

    public function Provinsi(){
        
        $allday = DB::table('provinsis')
        ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(trackings.jumlah_positif) as positif'),
        DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
        DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.provinsi_id')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('provinsis.id')
        ->get();

        $today = DB::table('provinsis')
        ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(trackings.jumlah_positif) as positif'),
        DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
        DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.provinsi_id')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->whereDate('trackings.tanggal',Carbon::today())
        ->groupBy('provinsis.id')
        ->get();

        $positif = DB::table('rws')->select('trackings.jumlah_positif')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
        $sembuh = DB::table('rws')->select('trackings.jumlah_sembuh')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
        $meninggal = DB::table('rws')->select('trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $today,
        'Data' => [
                    'Provinsi' => $allday,
        'Total' =>[
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'Message' => ' Berhasil!',
            ],
        ],
    ]);

}

    public function Kota(){
        
        $kota = DB::table('kotas')
             ->select('kotas.kode_kota','kotas.nama_kota', 
              DB::raw('SUM(trackings.jumlah_positif) as positif'),
              DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
              DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))
        
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('kotas.id')
        ->get();
        $jumlah_positif = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
        $jumlah_sembuh = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
        $jumlah_meninggal = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    
        return response([
            'success' => true,
            'data' => [
                
                        'Hari Ini' => $kota
                        ],
            'Total' =>[
                        'Jumlah Positif' => $jumlah_positif,
                        'Jumlah Sembuh' => $jumlah_sembuh,
                        'Jumlah Meninggal' => $jumlah_meninggal,
                    ],
                         'message'    => 'berhasil'
        ]);

    }

    public function Kecamatan(){
        
        $kecamatan = DB::table('kecamatans')
             ->select('kecamatans.kode_kec','kecamatans.nama_kec', 
              DB::raw('SUM(trackings.jumlah_positif) as positif'),
              DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
              DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))
        
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('kecamatans.id')
        ->get();
        $jumlah_positif = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
        $jumlah_sembuh = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
        $jumlah_meninggal = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    
        return response([
            'success' => true,
            'data' => [
                
                        'Hari Ini' => $kecamatan
                        ],
            'Total' =>[
                        'Jumlah Positif' => $jumlah_positif,
                        'Jumlah Sembuh' => $jumlah_sembuh,
                        'Jumlah Meninggal' => $jumlah_meninggal,
                    ],
                         'message'    => 'berhasil'
        ]);

    }

    public function Kelurahan(){
        
        $kelurahan = DB::table('kelurahans')
             ->select('kelurahans.kode_kel','kelurahans.nama_kel', 
              DB::raw('SUM(trackings.jumlah_positif) as positif'),
              DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
              DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))

        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('kelurahans.id')
        ->get();
        $jumlah_positif = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
        $jumlah_sembuh = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
        $jumlah_meninggal = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    
        return response([
            'success' => true,
            'data' => [
                
                        'Hari Ini' => $kelurahan
                        ],
            'Total' =>[
                        'Jumlah Positif' => $jumlah_positif,
                        'Jumlah Sembuh' => $jumlah_sembuh,
                        'Jumlah Meninggal' => $jumlah_meninggal,
                    ],
                         'message'    => 'berhasil'
        ]);

    }

    public function Rw(){
        
        $rw = DB::table('rws')
             ->select('rws.kode_rw','rws.nama_rw', 
              DB::raw('SUM(trackings.jumlah_positif) as positif'),
              DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
              DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))

        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('rws.id')
        ->get();
        $jumlah_positif = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
        $jumlah_sembuh = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
        $jumlah_meninggal = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_reaktif'.'trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    
        return response([
            'success' => true,
            'data' => [
                
                        'Hari Ini' => $rw
                        ],
            'Total' =>[
                        'Jumlah Positif' => $jumlah_positif,
                        'Jumlah Sembuh' => $jumlah_sembuh,
                        'Jumlah Meninggal' => $jumlah_meninggal,
                    ],
                         'message'    => 'berhasil'
        ]);

    }

    
    public function Positif(){
      $positif = DB::table('rws')
      ->select('trackings.jumlah_positif')
      ->join('trackings','rws.id','=','trackings.rw_id')
      ->sum('trackings.jumlah_positif');
       
    
      return response([
        'success' => true,
        'data' => [
                    'data' => 'Data seluruh jumlah positif',
                    'Jumlah Positif' => $positif,   
                ],
                     'message'    => 'berhasil'
    ]);


    }
    public function Sembuh(){
        $sembuh = DB::table('rws')
        ->select('trackings.jumlah_sembuh')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->sum('trackings.jumlah_sembuh');
         
        $data = [
          'succes'  =>  true,
          ' data '  => 'Data jumlah sembuh',
          'seluruh jumlah sembuh' => $sembuh,
          'message' => 'berhasil'
        ];
        return response()->json($data,200);
  
      }
      public function Meninggal(){
        $meninggal = DB::table('rws')
        ->select('trackings.jumlah_meninggal')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->sum('trackings.jumlah_meninggal');
         
        $data = [
          'succes'  =>  true,
          ' data '  => 'Data jumlah meninggal',
          'seluruh jumlah meninggal' => $meninggal, 
          'message' => 'berhasil'
        ];
        return response()->json($data,200);
  
      }
      
    //   public function contohrw(){
    //     $rw = DB::table('trackings')
    //     ->join('rws', 'rw_id', '=', 'rw_id')
    //     ->select('trackings.jumlah_positif','trackings.jumlah_sembuh','trackings.jumlah_meninggal')
    //     ->first();
    //     $data = [
    //         'succes' => true,
    //         'data' => $rw,
    //         'message' => 'Berhasil'
    //     ];
    //     return response()->json($data);
    //     $provinsi = DB::table('trackings')->select('provinsis.nama_provinsi')->
    //     join('provinsis','trackings.id','=','provinsis.trackings_id')->get('trackings.nama_provisi');
    //     $rw = DB::table('trackings')->select([
    //             DB::raw('SUM(jumlah_positif) as Positif'),
    //             DB::raw('SUM(jumlah_sembuh) as Sembuh'),
    //             DB::raw('SUM(jumlah_meninggal) as Meninggal'),
    //     ])->groupBy('tanggal')->get();
    //         $jumlah_positif = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_positif');
    //         $jumlah_sembuh = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_sembuh');
    //         $jumlah_meninggal = DB::table('rws')->select('trackings.jumlah_positif','trackings.jumlah_sembuh','trackings.jumlah_meninggal')->join('trackings','rws.id','=','trackings.rw_id')->sum('trackings.jumlah_meninggal');
    //         return response([
    //             'success' => true,
    //             'data' => [
    //                         'Hari Ini' => $rw
    //                         ],
    //             'Total' =>[ 
    //                         'Jumlah Positif' => $jumlah_positif,
    //                         'Jumlah Sembuh' => $jumlah_sembuh,
    //                         'Jumlah Meninggal' => $jumlah_meninggal,
    //                     ],
    //         ]);
    // }
}
