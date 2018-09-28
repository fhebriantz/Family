@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">FAQ</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>FAQ<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data FAQ</h3></div>
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
                    	<form method="POST" action="{{url('/cms/faq/input')}}">
						{{ csrf_field() }}
	                        <table class="table">                        
	                            <tr>
									<td>Title</td>
									<td><input type="text" name="title" placeholder="Title" style="width: 100%" value="{{ old('title') }}"></td>
								</tr>
								<tr>
									<td>Description</td>
									<td> <textarea name="desc" class="ckeditor">{{ old('desc') }}</textarea></td>
								</tr>

								<tr>
									<td></td>
									<td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
								</tr>
	                        </table>
	                    </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection