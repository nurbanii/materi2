@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">

<div class="clear-fix"></div>
			<table class="table" id="dataTable">
						<thead>
							<tr>
								<td colspan="3">
									<b>Data Produk</b>
								</td>
								<td colspan="3" align="right">
									<a href="{{url('produk/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i>Tambah Data</a>
								</td>
							</tr>
							<tr>
								<th><center>No</center></th>
								<th><center>Aksi</center></th>
								<th><center>Nama</center></th>
								<th><center>Harga</center></th>
								<th><center>Berat</center></th>
								<th><center>Stok</center></th>
							</tr>
						</thead>	
						<body>
							@foreach($DataProduk as $produk)
							<tr>
								<th><center>{{$loop->iteration}}</center></th>
								<th>
									<center>
										<div class="btn-group">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-primary">
											info
										</a>
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning">
											Edit
										</a>
										@include('admin.utils.delete', ['url' => url('produk', $produk->id)])
										</div>
									</center>
								</th>
								<th><center>{{$produk->nama}}</center></th>
								<th><center>{{$produk->harga}}</center></th>
								<th><center>{{$produk->berat}}</center></th>
								<th><center>{{$produk->stok}}</center></th>
							</tr>
							@endforeach
						</body>	
					</table>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection