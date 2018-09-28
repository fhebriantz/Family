@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Highlight</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Highlight<span class="fa-angle-right fa"></span>Edit</p>
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
                    	<form method="POST" action="{{url('/cms/highlight/'.$highlight_data->id.'/edit')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">                   
                                
                                <tr>
                                    <td>Name File</td>
                                    <td><input type="text" name="namefile" placeholder="Image" value="{{ $highlight_data->namefile }}" style="width: 100%" readonly>
                                    <input type="file" name="namefile" placeholder="Image" value="{{ $highlight_data->namefile }}" style="width: 100%">
                                    <img src="/family/public/asset/img/{{ $highlight_data->namefile }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                                    
                                    <input class="btn btn-danger" type="submit" name="deletes" value="Delete" onclick=" return confirm('Are you sure want to delete image?');"> <p style="color: red">{{ session('status')}}</p> 
                                    </td>
                                </tr>

                                <tr>
                                    <td>Flag</td>
                                    <td><input type="text" name="flag" placeholder="flag" value="{{ $highlight_data->flag }}" style="width: 100%"></td>
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