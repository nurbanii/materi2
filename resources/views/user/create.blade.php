@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
<form action="{{url('user')}}" method="post" style="position: relative; box-sizing: border-box;">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama User</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Username</label>
									<input type="text" class="form-control" name="username">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Password</label>
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">No HP</label>
									<input type="text" class="form-control" name="no_handphone">
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