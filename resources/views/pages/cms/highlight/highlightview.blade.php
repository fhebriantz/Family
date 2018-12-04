@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Images</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Images<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Images</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
	                        <table class="table">    
                                <tr>
                                    <td>Highligt Category</td>
                                    <td><input type="text" name="type" placeholder="Image" value="{{ $highlight_data->type }}" style="width: 100%" readonly>
                                </tr>              
	                            
                                <tr>
                                    <td>Name File</td>
                                    <td><input type="text" name="namefile" placeholder="Image" value="{{ $highlight_data->namefile }}" style="width: 100%" readonly>
                                        <img src="/family/public/asset/img/{{ $highlight_data->namefile }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                                </tr>

                                <tr>
                                    <td>Created Date</td>
                                    <td><input type="text" name="created_at" value="{{ $highlight_data->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input type="text" name="created_by" value="{{ $highlight_data->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input type="text" name="updated_at" value="{{ $highlight_data->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input type="text" name="updated_by" value="{{ $highlight_data->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a class="btn btn-danger" href="{{url('/cms/highlight')}}"  style="padding: 5px; text-decoration: none;">Back</a></td>
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