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
                <p class="animated fadeInDown">CMS<span class="fa-angle-right fa"></span>Product<span class="fa-angle-right fa"></span>Subproduct<span class="fa-angle-right fa"></span>Product Detail<span class="fa-angle-right fa"></span>Edit</p>
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
                    	<form method="POST" action="{{url('/cms/product/subproduct/detail/'.$product_detail->id.'/edit')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">
								<tr>
									<td>Category Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select name="id_category"  class="form-control" style="width: 100%">
									    	<option>-- Pilih Kategori --</option>
									        @foreach($category_product as $product)
									        <option value="{{$product->id}}"

									        	<?php if ($product->id == $product_detail->id_category): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										    	>{{$nos++}}.  {{$product->category_product_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>							

								<tr>
									<td>Category Sub Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select name="id_category_sub" class="form-control"  style="width: 100%">
									    	<option>-- Pilih Kategori --</option>
									        @foreach($category_subproduct as $subproduct)
									        <option value="{{$subproduct->id}}"

									        	<?php if ($subproduct->id == $product_detail->id_category_sub): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >{{$no++}}.  {{$subproduct->category_product_name}} - {{$subproduct->category_subproduct_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Name Product</td>
									<td><input type="text" class="form-control"  name="name_product" placeholder="Nama Product" value="{{ $product_detail->name_product }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Price</td>
									<td><input type="text" class="form-control"  name="price" placeholder="Harga Produk" value="{{ $product_detail->price }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Hide Price</td>
									<td>
										<select class="form-control"  name="hide_price" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									    	<option value="1"

									        	<?php if (1 == $product_detail->hide_price): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >Sembunyikan Harga</option>
									    	<option value="0"

									        	<?php if (0 == $product_detail->hide_price): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >Tampilkan Harga</option>
									    </select>
									</td>
								</tr>

								<tr>
									<td>Description</td>
									<td><textarea id="summernote" name="description">{!! $product_detail->description !!}</textarea></td>
								</tr>

								<tr>
									<td>Tag Mainan</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_mainan" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($mainan as $main)
									        <option value="{{$main->id}}"

									        	<?php if ($main->id == $product_detail->id_mainan): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >{{$main->nama_mainan}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Tag HandGrip</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_sandaran" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($sandaran as $sandar)
									        <option value="{{$sandar->id}}"

									        	<?php if ($sandar->id == $product_detail->id_sandaran): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >{{$sandar->nama_sandaran}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Tag Ban</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_ban" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($ban as $ba)
									        <option value="{{$ba->id}}"

									        	<?php if ($ba->id == $product_detail->id_ban): ?>

										        	<?php echo "selected" ?>
										        	
										        <?php endif ?> 

										        >{{$ba->nama_ban}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Image1</td>
									<td><input type="text" class="form-control"  name="image1" placeholder="Image1" value="{{ $product_detail->image1 }}" style="width: 100%" readonly>
									<input type="file" name="image1" placeholder="Image1" value="{{ $product_detail->image1 }}" style="width: 100%">
									<p style="color: red">{{trans('validation.flag10')}}  </p>
									<img src="/family/public/asset/img/{{ $product_detail->image1 }}" style="max-height:200px;max-width:200px;margin-top:10px;">
									
                                    <input class="btn btn-danger" type="submit" name="delete1" value="Delete" onclick="return confirm('Are you sure want to delete image1?');"> <p style="color: red">{{ session('status1')}}</p> 

                                	</td>
								</tr>

								<tr>
									<td>Image2</td>
									<td><input type="text" class="form-control"  name="image2" placeholder="Image2" value="{{ $product_detail->image2 }}" style="width: 100%" readonly>
									<input type="file" name="image2" placeholder="Image2" value="{{ $product_detail->image2 }}" style="width: 100%">
									<p style="color: red">{{trans('validation.flag10')}}  </p>
									<img src="/family/public/asset/img/{{ $product_detail->image2 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete2" value="Delete" onclick="return confirm('Are you sure want to delete image2?');"> <p style="color: red">{{ session('status2')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image3</td>
									<td><input type="text" class="form-control"  name="image3" placeholder="Image3" value="{{ $product_detail->image3 }}" style="width: 100%" readonly>
									<input type="file" name="image3" placeholder="Image3" value="{{ $product_detail->image3 }}" style="width: 100%">
									<p style="color: red">{{trans('validation.flag10')}}  </p>
									<img src="/family/public/asset/img/{{ $product_detail->image3 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete3" value="Delete" onclick="return confirm('Are you sure want to delete image3?');"> <p style="color: red">{{ session('status3')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image4</td>
									<td><input type="text"  class="form-control" name="image4" placeholder="Image4" value="{{ $product_detail->image4 }}" style="width: 100%" readonly>
									<input type="file" name="image4" placeholder="Image4" value="{{ $product_detail->image4 }}" style="width: 100%">
									<p style="color: red">{{trans('validation.flag10')}}  </p>
									<img src="/family/public/asset/img/{{ $product_detail->image4 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete4" value="Delete" onclick="return confirm('Are you sure want to delete image4?');"> <p style="color: red">{{ session('status4')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image5</td>
									<td><input type="text"  class="form-control" name="image5" placeholder="Image5" value="{{ $product_detail->image5 }}" style="width: 100%" readonly>
									<input type="file" name="image5" placeholder="Image5" value="{{ $product_detail->image5 }}" style="width: 100%">
									<p style="color: red">{{trans('validation.flag10')}}  </p>
									<img src="/family/public/asset/img/{{ $product_detail->image5 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input  class="btn btn-danger" type="submit" name="delete5" value="Delete" onclick="return confirm('Are you sure want to delete image5?');"> <p style="color: red">{{ session('status5')}}</p> 

									</td>
								</tr>

								<tr>
									<td></td>
									<td>
										<input class="btn btn-info" name="submit" value="Submit" type="submit" style="padding: 5px;">
										<a class="btn btn-danger" href="{{url('/cms/product/subproduct/detail')}}"  style="padding: 5px; text-decoration: none;">Back</a>
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


@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
	$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection