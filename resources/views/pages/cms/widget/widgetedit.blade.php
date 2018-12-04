
@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Widget</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Widget<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Widget</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    	<form method="POST" action="{{url('/cms/widget/'.$widget_data->id.'/edit')}}">
						{{ csrf_field() }}
	                        <table class="table">
							<tr>
								<td>Nama Widget</td>
								<td><textarea name="embed_text" id="" cols="30" rows="10"  style="width: 100%">{{ $widget_data->embed_text }}</textarea><p style="color: red">{{ session('status')}}</p></td>
							</tr>

							<tr>
								<td></td>
								<td>
                                        <input class="btn btn-info" name="submit" value="Submit" type="submit" style="padding: 5px;">
                                        <a class="btn btn-danger" href="{{url('/cms/widget')}}"  style="padding: 5px; text-decoration: none;">Back</a>
                                    </td>
							</tr>
						</table>
						<input type="hidden" name="_method" value="PUT">
	                    </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection