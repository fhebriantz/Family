@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					@if(count($abouts))
					<ul>
						@foreach($abouts as $about)
							<li>{!!$about->title!!}</li>
						@endforeach
					</ul>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection