@extends('layouts.cmsnew')

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Product Detail</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subproduct<span class="fa-angle-right fa"></span>Product Detail<span class="fa-angle-right fa"></span>View</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Product Detail</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">                    	
	                        <table class="table">
								
								<tr>
									<td>id</td>
									<td><input class="form-control"  type="number" min="0" step="1" name="id" value="{{ $product_detail->id }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>Name Product</td>
									<td><input  class="form-control" type="text" name="name_product"  value="{{ $product_detail->name_product }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>Category Product</td>
									<td><input  class="form-control" type="text" min="0" step="1" name="category_product_name" value="{{ $product_detail->category_product_name }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>ID Category</td>
									<td><input  class="form-control" type="number" min="0" step="1" name="id_category" value="{{ $product_detail->id_category }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>Category Subproduct</td>
									<td><input class="form-control"  type="text" min="0" step="1" name="category_subproduct_name" value="{{ $product_detail->category_subproduct_name }}" style="width: 100%" readonly></td>
								</tr>
								<tr>
									<td>ID Sub Category</td>
									<td><input  class="form-control" type="number" min="0" step="1" name="id_category_sub" value="{{ $product_detail->id_category_sub }}" style="width: 100%" readonly></td>
								</tr>

								<tr>
									<td>Price</td>
									<td><input  class="form-control" type="text" name="price" placeholder="Harga Produk" value="{{ $product_detail->price }}" style="width: 100%" readonly></td>
								</tr>

								<tr>
									<td>Image1</td>
									<td><input type="text" name="image1" placeholder="Image1" value="{{ $product_detail->image1 }}" style="width: 100%" readonly>
										<img src="/family/public/asset/img/{{ $product_detail->image1 }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
								</tr>

								<tr>
									<td>Image2</td>
									<td><input type="text" name="image2" placeholder="Image2" value="{{ $product_detail->image2 }}" style="width: 100%" readonly>
										<img src="/family/public/asset/img/{{ $product_detail->image2 }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
								</tr>

								<tr>
									<td>Image3</td>
									<td><input type="text" name="image3" placeholder="Image3" value="{{ $product_detail->image3 }}" style="width: 100%" readonly>
										<img src="/family/public/asset/img/{{ $product_detail->image3 }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
								</tr>

								<tr>
									<td>Image4</td>
									<td><input type="text" name="image4" placeholder="Image4" value="{{ $product_detail->image4 }}" style="width: 100%" readonly>
										<img src="/family/public/asset/img/{{ $product_detail->image4 }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
								</tr>

								<tr>
									<td>Image5</td>
									<td><input type="text" name="image5" placeholder="Image5" value="{{ $product_detail->image5 }}" style="width: 100%" readonly>
										<img src="/family/public/asset/img/{{ $product_detail->image5 }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
								</tr>

								<tr>
                                    <td>Created Date</td>
                                    <td><input type="text" name="created_at" value="{{ $product_detail->created_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Created By</td>
                                    <td><input type="text" name="created_by" value="{{ $product_detail->created_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified Date</td>
                                    <td><input type="text" name="updated_at" value="{{ $product_detail->updated_at }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                    <td>Modified By</td>
                                    <td><input type="text" name="updated_by" value="{{ $product_detail->updated_by }}" style="width: 100%" readonly></td>
                                </tr>
                                <tr>
                                	<td></td>
                                	<td><a class="btn btn-danger" href="{{url('/cms/product/subproduct/detail')}}"  style="padding: 5px; text-decoration: none;">Back</a></td>
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

@section('scripts')
<script type="text/javascript">
	(function($){
		$(function(){
			$('.button-collapse').sideNav();
		});
	})(jQuery);
</script>
@endsection