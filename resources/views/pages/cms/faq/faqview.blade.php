@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">FAQ</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>FAQ<span class="fa-angle-right fa"></span>Edit</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data FAQ</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                    	
	                        <table class="table">   
                                 <tr>
                                    <td>ID</td>
                                    <td><input type="number" min="0" step="1" name="id" placeholder="Title" style="width: 100%"  value="{{ $faq_data->id }}" readonly></td>
                                </tr>                     
	                            <tr>
									<td>Title</td>
									<td><input type="text" name="title" placeholder="Title" style="width: 100%"  value="{{ $faq_data->title }}" readonly ></td>
								</tr>
								<tr>
									<td>Description</td>
									<td> <textarea name="desc" class="ckeditor" readonly>{{ $faq_data->desc }}</textarea></td>
								</tr>
                                <tr>
                                    <td>Created Date</td>
                                    <td><input type="text" name="created_at" value="{{ $faq_data->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input type="text" name="created_by" value="{{ $faq_data->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input type="text" name="updated_at" value="{{ $faq_data->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input type="text" name="updated_by" value="{{ $faq_data->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
	                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection