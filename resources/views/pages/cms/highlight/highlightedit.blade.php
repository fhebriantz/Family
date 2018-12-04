@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Images</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Images<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Images</h3></div>
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
                                    @if($highlight_data->flag == 13)
                                        <p style="color: red">{{trans('validation.flag13')}} </p>
                                    @endif
                                    @if($highlight_data->flag == 12)
                                        <p style="color: red">{{trans('validation.flag12')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 11)
                                        <p style="color: red">{{trans('validation.flag11')}}   </p>
                                    @endif
                                    @if($highlight_data->flag == 10)
                                        <p style="color: red">{{trans('validation.flag10')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 9)
                                        <p style="color: red">{{trans('validation.flag9')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 8)
                                        <p style="color: red">{{trans('validation.flag8')}} </p>
                                    @endif
                                    @if($highlight_data->flag == 7)
                                        <p style="color: red">{{trans('validation.flag7')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 6)
                                        <p style="color: red">{{trans('validation.flag6')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 5)
                                        <p style="color: red">{{trans('validation.flag5')}}  </p>
                                    @endif
                                    @if($highlight_data->flag == 4)
                                        <p style="color: red">{{trans('validation.flag4')}} </p> 
                                    @endif
                                    @if($highlight_data->flag == 3)
                                        <p style="color: red">{{trans('validation.flag3')}} </p>
                                    @endif
                                    @if($highlight_data->flag == 2)
                                        <p style="color: red">{{trans('validation.flag2')}} </p> 
                                    @endif
                                    @if($highlight_data->flag == 1)
                                        <p style="color: red">{{trans('validation.flag1')}}  </p>
                                    @endif
                                    <input type="file" name="namefile" placeholder="Image" value="{{ $highlight_data->namefile }}" style="width: 100%; margin-top: 15px;">
                                    <img src="/family/public/asset/img/{{ $highlight_data->namefile }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                                    
                                    <input class="btn btn-danger" type="submit" name="deletes" value="Delete" onclick=" return confirm('Are you sure want to delete image?');"> <p style="color: red">{{ session('status')}}</p> 
                                    </td>
                                </tr>

								<tr>
									<td></td>
									<td>
                                        <input class="btn btn-info" name="submit" value="Submit" type="submit" style="padding: 5px;">
                                        <a class="btn btn-danger" href="{{url('/cms/highlight')}}"  style="padding: 5px; text-decoration: none;">Back</a>
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