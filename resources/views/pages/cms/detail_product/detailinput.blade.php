@extends('layouts.cmsnew')

@section('header')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Product Detail</h3>
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subproduct<span class="fa-angle-right fa"></span>Product Detail<span class="fa-angle-right fa"></span>Input</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Product Detail</h3></div>
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
                    	<form method="POST" action="{{url('/cms/product/subproduct/detail/input')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">
								<tr>
									<td>Category Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_category" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($category_product as $product)
									        <option value="{{$product->id}}">{{$nos++}}.  {{$product->category_product_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>							

								<tr>
									<td>Category Sub Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_category_sub" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($category_subproduct as $subproduct)
									        <option value="{{$subproduct->id}}">{{$no++}}.  {{$subproduct->category_product_name}} - {{$subproduct->category_subproduct_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Name Product</td>
									<td><input class="form-control"  type="text" name="name_product" placeholder="Nama Product"  style="width: 100%" value="{{ old('name_product') }}"></td>
								</tr>

								<tr>
									<td>Price</td>
									<td><input class="form-control"  type="text" name="price" placeholder="Harga Produk"  style="width: 100%" value="{{ old('price') }}"></td>
								</tr>

								<tr>
									<td>Description</td>
									<td><textarea id="summernote" name="description">{{ old('description') }}</textarea></td>
								</tr>

								<tr>
									<td>Image1</td>
									<td><input type="file" id="inputgambar" name="image1"  style="width: 100%" placeholder="Image1" ></td>
								</tr>

								<tr>
									<td>Image2</td>
									<td><input type="file" id="inputgambar" name="image2"  style="width: 100%" placeholder="Image2" ></td>
								</tr>

								<tr>
									<td>Image3</td>
									<td><input type="file" id="inputgambar" name="image3"  style="width: 100%" placeholder="Image3"></td>
								</tr>

								<tr>
									<td>Image4</td>
									<td><input type="file" id="inputgambar" name="image4"  style="width: 100%" placeholder="Image4"></td>
								</tr>

								<tr>
									<td>Image5</td>
									<td><input type="file" id="inputgambar" name="image5"  style="width: 100%" placeholder="Image5"></td>
								</tr>

								<tr>
									<td></td>
									<td><input name="submit" class="btn btn-info" value="submit" type="submit"></td>
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
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
	$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection