<?php 
namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
	function index(){
		$data['DataProduk'] = Produk::all();

		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success','Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
	
		$produk->nama = request ('nama');
		$produk->stok = request ('stok');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();
			
		return redirect('produk')->with('success','Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('danger','Data Berhasil Dihapus');

	}
}

	function filter(){
		$nama = request ('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');

		//$data['DataProduk'] = produk::where('nama', 'like', "%$nama%")->get();
		//$data['DataProduk'] = Produk::whereIn('stok',  $stok)->get();
		//$data['DataProduk'] = Produk::whereBetween('harga', [$harga_min,$harga_max])->get();
		//$data['DataProduk'] = produk::where('stok', <>, $stok)->get();
		//$data['DataProduk'] = Produk::whereNotIn('stok',  $stok)->get();
		//$data['DataProduk'] = Produk::whereBetween('harga', [$harga_min,$harga_max])->get();
        //$data['DataProduk'] = Produk::whereNotNull('stok')->get();
		//$data['DataProduk'] = Produk::whereDate('create_at', ['2020-01-20', '2020-01-19'])->get();
		$data['DataProduk'] = Produk::whereBetween('harga', [$harga_min,$harga_max])->whereNotIn('stok', [750])->WhereYear('create_at', '2019')->get();


		$data['nama'] = $nama;
		$stok['stok'] = request('stok');


		return view('produk.index', $data);
	}