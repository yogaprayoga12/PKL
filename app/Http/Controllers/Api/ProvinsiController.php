<?php

namespace App\Http\Controllers\Api;

use App\Models\Provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ProvinsiController extends Controller
{
    //
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
  
        $prov = [
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $provinsi
        ];
        return response()->json($prov,200);
    }

    public function store(Request $request)
    {
        //validate data
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        $prov = [
               'success' => true,
               'data'    => $provinsi,
               'message' => 'Data berhasil di update'
        ];
        return response()->json($prov, 200);
        //CONTOH
        // $validator = Validator::make($request->all(), [
        //     'title'     => 'required',
        //     'content'   => 'required',
        // ],
        //     [
        //         'title.required' => 'Masukkan Title Post !',
        //         'content.required' => 'Masukkan Content Post !',
        //     ]
        // );

        // if($validator->fails()) {

        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Silahkan Isi Bidang Yang Kosong',
        //         'data'    => $validator->errors()
        //     ],400);

        // } else {

        //     $post = Post::create([
        //         'title'     => $request->input('title'),
        //         'content'   => $request->input('content')
        //     ]);


        //     if ($post) {
        //         return response()->json([
        //             'success' => true,
        //             'message' => 'Post Berhasil Disimpan!',
        //         ], 200);
        //     } else {
        //         return response()->json([
        //             'success' => false,
        //             'message' => 'Post Gagal Disimpan!',
        //         ], 400);
        //     }
        // }
    }


    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Post!',
                'data'    => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'content'   => 'required',
        ],
            [
                'title.required' => 'Masukkan Title Post !',
                'content.required' => 'Masukkan Content Post !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $post = Post::whereId($request->input('id'))->update([
                'title'     => $request->input('title'),
                'content'   => $request->input('content'),
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Diupdate!',
                ], 500);
            }

        }

    }

    public function destroy($id)
    {
        $provinsi = Post::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 500);
        }

    }
}
