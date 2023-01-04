<?php

namespace App\Http\Controllers;
use App\Models\ShowroomModels;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function TambahMobil()
    {
    // $data['companies'] = Company::orderBy('id','desc')->paginate(5);
    // return view('companies.index', $data);
    return view('showroom.TambahMobil');
    }

    public function detailnya(Request $request,$id)
    {
 
    $itemproduk = ShowroomModels::where('id', $id)
                                // ->where('status', 'publish')
                                ->get();
            if ($itemproduk) {
                // $data = array('title' => $itemproduk->nama_produk,
                //             'itemproduk' => $itemproduk);
                return view('showroom.detailmobil', ['itemproduk' =>$itemproduk ]);            
            } else {
                // kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
                return abort('404');
            }
    
    // return view('showroom.detailmobil');
    }

    public function delete(ShowroomModels $post)
{
    $post->delete();

    return redirect()->route('showroom.index')
         ->withSuccess(__('Post delete successfully.'));
}
}
