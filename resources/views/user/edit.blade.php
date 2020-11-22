@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
			<form action="{{url('user', $user->id)}}" method="post" style="position: relative; box-sizing: border-box;">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="" class="control-label">Nama</label>
					<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Usename</label>
							<input type="text" class="form-control" name="username" value="{{$user->username}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="email" class="form-control" name="email" value="{{$user->email}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" class="form-control" name="password" value="{{$user->password}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">No HP</label>
							<input type="text" class="form-control" name="no_handphone" value="{{$user->no_handphone}}">
						</div>
					</div>
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