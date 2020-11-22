@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
			<h3>{{$produk->nama}}</h3>
			<hr>
			<p>
				Rp. {{number_format($produk->harga)}} |
				Stok : {{$produk->stok}} |
				Berat : {{$produk->berat}} gr
				Seller : {{$produk->seller}}
			</p>
			<p>
				{!! nl2br ($produk->deskripsi) !!}
			</p>

			
		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection