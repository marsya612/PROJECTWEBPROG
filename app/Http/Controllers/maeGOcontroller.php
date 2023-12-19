<?php

namespace App\Http\Controllers;
use App\Models\maejangGO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class maeGOcontroller extends Controller
{

    public function showproduct()
    {
        $products = maejangGO::all()->first();

        return view('product.all',[
            'products' => $products
        ]);
    }

    public function ShowproductNCT($id){

        $products = maejangGO::where('Kategori','NCT')->find($id);
        return view('detailfact', [
            'products' => $products
        ]);
    }

    public function ShowproductAespa($id){
        $products = maejangGO::where('Kategori','AESPA')->find($id);

        return view('detaildrama', [
            'products' => $products
        ]);
    }
}
