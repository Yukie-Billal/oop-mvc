<?php 

class ProdukController extends Controller
{
    public function index()
    {
        $produk = new Produk;
        return view("produk/index",[
            'produk' => $produk->where('harga','15000'),
        ]);
    }
}
