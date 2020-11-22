
@extends('admin.base')

@section('content')
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
			<h3>{{$user->nama}}</h3>
			<hr>
			<p>
				{{"@".$user->username}} |
				Email : {{$user->email}} |
			</p>
			<p>
				No Handphone : {{$user->no_handphone}} |
			</p>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection