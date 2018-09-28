@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Sub Product</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subproduct<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Subproduct</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
	                        <table class="table">
	                        	<tr>
									<td>ID</td>
									<td><input  class="form-control" type="number" min="0" step="1" name="id" value="{{ $category_subproduct->id }}" style="width: 100%"  readonly></td>
								</tr>
								
								<tr>
									<td>Nama Subproduct</td>
									<td><input class="form-control"  type="text" name="category_subproduct_name" value="{{ $category_subproduct->category_subproduct_name }}" style="width: 100%" readonly></td>
								</tr>

                                <tr>
                                    <td>Category Product</td>
                                    <td><input class="form-control"  type="text" name="category_product_name" value="{{ $category_subproduct->category_product_name }}" style="width: 100%" readonly></td>
                                </tr>

                                <tr>
                                    <td>ID Category Product</td>
                                    <td><input class="form-control"  type="number" min="0" step="1" name="id_category" value="{{ $category_subproduct->id_category }}" style="width: 100%" readonly></td>
                                </tr>

								<tr>
                                    <td>Created Date</td>
                                    <td><input  class="form-control" type="text" name="created_at"  value="{{ $category_subproduct->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input  class="form-control" type="text" name="created_by"  value="{{ $category_subproduct->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input  class="form-control" type="text" name="updated_at"  value="{{ $category_subproduct->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input  class="form-control" type="text" name="updated_by"  value="{{ $category_subproduct->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
						</table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection