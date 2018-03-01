@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">About</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>About<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data About</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
	                        <table class="table">    
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" min="0" step="1" name="id"  value="{{ $about_data->id }}" style="width: 100%" readonly></td>
                                </tr>        
                                <tr>
                                    <td>Caption</td>
                                    <td><input type="text" name="caption"  value="{{ $about_data->caption }}" style="width: 100%" readonly></td>
                                </tr>            
	                            <tr>
									<td>Title</td>
									<td><input type="text" name="title"  value="{{ $about_data->title }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>Description</td>
									<td> <textarea name="desc" class="ckeditor" readonly>{{ $about_data->desc }}</textarea></td>
								</tr>
                                <tr>
                                    <td>Created Date</td>
                                    <td><input type="text" name="created_at" value="{{ $about_data->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input type="text" name="created_by" value="{{ $about_data->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input type="text" name="updated_at" value="{{ $about_data->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input type="text" name="updated_by" value="{{ $about_data->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
	                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection