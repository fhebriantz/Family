@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">News</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>News<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data News</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
	                        <table class="table">    
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" min="0" step="1" name="id"  value="{{ $news_data->id }}" style="width: 100%" readonly></td>
                                </tr>              
	                            <tr>
									<td>Title</td>
									<td><input type="text" name="title"  value="{{ $news_data->title }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>Description</td>
									<td> <textarea name="desc" class="ckeditor" readonly>{{ $news_data->desc }}</textarea></td>
								</tr>
                                <tr>
                                    <td>Images</td>
                                    <td><input type="text" name="images" placeholder="Image" value="{{ $news_data->images }}" style="width: 100%" readonly>
                                        <img src="/family/public/asset/img/{{ $news_data->images }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                                </tr>
                                <tr>
                                    <td>Created Date</td>
                                    <td><input type="text" name="created_at" value="{{ $news_data->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input type="text" name="created_by" value="{{ $news_data->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input type="text" name="updated_at" value="{{ $news_data->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input type="text" name="updated_by" value="{{ $news_data->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
	                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    (function($){
        $(function(){
            $('.button-collapse').sideNav();
        });
    })(jQuery);
</script>
@endsection