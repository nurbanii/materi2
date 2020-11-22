@extends('admin.base')

@section('content')

<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
			
<div class="clear-fix"></div>
			<table class="table">
						<thead>
							<tr>
								<td colspan="3">
									<b>Data User</b>
								</td>
								<td colspan="3" align="right">
									<a href="{{url('user/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i>Tambah Data</a>
								</td>
							</tr>
							<tr>
								<th><center>No</center></th>
								<th><center>Aksi</center></th>
								<th><center>username</center></th>
								<th><center>nama</center></th>
								<th><center>email</center></th>
							</tr>
						</thead>	
						<body>
							@foreach($DataUser as $user)
							<tr>
								<th><center>{{$loop->iteration}}</center></th>
								<th>
									<center>
										<div class="btn-group">
										<a href="{{url('user', $user->id)}}" class="btn btn-primary">
											info
										</a>
										<a href="{{url('user', $user->id)}}/edit" class="btn btn-warning">
											Edit
										</a>
										@include('admin.utils.delete', ['url' => url('user', $user->id)])
										</div>
									</center>
								</th>
								<th><center>{{$user->username}}</center></th>
								<th><center>{{$user->nama}}</center></th>
								<th><center>{{$user->email}}</center></th>
							</tr>
							@endforeach
						</body>	
					</table>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection