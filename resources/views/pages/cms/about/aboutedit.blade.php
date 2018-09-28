@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">About</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>About<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data About</h3></div>
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
                    	<form method="POST" action="{{url('/cms/about/'.$about_data->id.'/edit')}}">
						{{ csrf_field() }}
	                        <table class="table">     
                                <tr>
                                    <td>Caption</td>
                                    <td><input type="text"  class="form-control" name="caption" placeholder="Caption" value="{{ $about_data->caption }}" style="width: 100%"></td>
                                </tr>                   
	                            <tr>
									<td>Title</td>
									<td><input  class="form-control" type="text" name="title" placeholder="Title" value="{{ $about_data->title }}" style="width: 100%"></td>
								</tr>
								<tr>
									<td>Description</td>
									<td> <textarea  class="form-control ckeditor" name="desc">{{ $about_data->desc }}</textarea></td>
								</tr>

								<tr>
									<td></td>
									<td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
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