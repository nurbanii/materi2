@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
			<form action="{{url('produk', $produk->id)}}" method="post" style="position: relative; box-sizing: border-box;">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="" class="control-label">Nama Produk</label>
					<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Berat</label>
							<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Deskripsi</label>
					<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
				</div>
				<div style="display: block; width: 100%;height: 50px;background: transparent;" >
					<button class="btn btn-primary" style="margin: 20px 0;float: right;"><i class="fa fa-save"></i>Simpan</button>
				</div>
			</form>
			<div class="clear-fix"></div>

		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection