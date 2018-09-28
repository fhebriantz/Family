
@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Product</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Product</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
	                        <table class="table">

                                <tr>
                                    <td>ID</td>
                                    <td><input  class="form-control" type="number" min="0" step="1" name="id"  value="{{ $product_data->id }}" style="width: 100%" readonly></td>
                                </tr>

    							<tr>
    								<td>Nama Product</td>
    								<td><input  class="form-control" type="text" name="category_product_name" value="{{ $product_data->category_product_name }}" style="width: 100%" readonly></td>
    							</tr>


                                <tr>
                                    <td>Created Date</td>
                                    <td><input class="form-control"  type="text" name="created_at"  value="{{ $product_data->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input class="form-control"  type="text" name="created_by"  value="{{ $product_data->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input class="form-control"  type="text" name="updated_at"  value="{{ $product_data->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input  class="form-control" type="text" name="updated_by"  value="{{ $product_data->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
						</table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection