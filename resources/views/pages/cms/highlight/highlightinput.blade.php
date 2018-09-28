@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Highlight</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Highlight<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Highlight</h3></div>
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
                    	<form method="POST" action="{{url('/cms/highlight/input')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">                    

                                <tr>
                                    <td>Images</td>
                                    <td><input type="file" id="inputgambar" name="namefile"  style="width: 100%" placeholder="Image" ></td>
                                </tr>

                                <tr>
                                    <td>Flag</td>
                                    <td><input type="text" name="flag" placeholder="flag" style="width: 100%" value="{{ old('title') }}"></td>
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