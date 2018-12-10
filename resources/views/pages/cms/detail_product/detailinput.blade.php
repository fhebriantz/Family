@extends('layouts.cmsnew')

@section('header')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
									    <select class="form-control"  name="id_category" id="id_category" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($category_product as $product)
									        <option value="{{$product->id}}">{{$product->category_product_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>							

								<tr>
									<td>Category Sub Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_category_sub" id="id_category_sub" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
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
									<td>Hide Price</td>
									<td>
										<select class="form-control"  name="hide_price" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									    	<option value="1">Sembunyikan Harga</option>
									    	<option value="0">Tampilkan Harga</option>
									    </select>
									</td>
								</tr>

								<tr>
									<td>Description</td>
									<td><textarea id="summernote" name="description">{{ old('description') }}</textarea></td>
								</tr>

								<tr>
									<td>Tag Mainan</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control" id="id_mainan"  name="id_mainan" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									    </select>
									</td>
								</tr>

								<tr style="display: none;">
									<td>Tag HandGrip</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control"  name="id_sandaran" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									        @foreach($sandaran as $sandar)
									        <option value="{{$sandar->id}}">{{$sandar->nama_sandaran}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Tag Ban</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select class="form-control" id="id_ban"  name="id_ban" style="width: 100%">
									    	<option value="">-- Pilih Kategori --</option>
									    </select>
									</td>
								</tr>

								<tr>
									<td>Image1</td>
									<td><input type="file" id="inputgambar" name="image1"  style="width: 100%" placeholder="Image1" >
									<p style="color: red">{{trans('validation.flag10')}}  </p></td>
								</tr>

								<tr>
									<td>Image2</td>
									<td><input type="file" id="inputgambar" name="image2"  style="width: 100%" placeholder="Image2" >
									<p style="color: red">{{trans('validation.flag10')}}  </p></td>
								</tr>

								<tr>
									<td>Image3</td>
									<td><input type="file" id="inputgambar" name="image3"  style="width: 100%" placeholder="Image3">
									<p style="color: red">{{trans('validation.flag10')}}  </p></td>
								</tr>

								<tr>
									<td>Image4</td>
									<td><input type="file" id="inputgambar" name="image4"  style="width: 100%" placeholder="Image4">
									<p style="color: red">{{trans('validation.flag10')}}  </p></td>
								</tr>

								<tr>
									<td>Image5</td>
									<td><input type="file" id="inputgambar" name="image5"  style="width: 100%" placeholder="Image5">
									<p style="color: red">{{trans('validation.flag10')}}  </p></td>
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


  <script>
    $('#id_category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-catpro?cat_id=' + cat_id, function(data){
        // success data
        $('#id_category_sub').empty();
        $.each(data, function(index, subproObj){

          $('#id_category_sub').append('<option value="'+subproObj.id+'">'+subproObj.category_subproduct_name+'</option>');

        });

      });

    });

    $('#id_category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-mainan?cat_id=' + cat_id, function(data){
        // success data
        $('#id_mainan').empty();
        $.each(data, function(index, mainanObj){

          $('#id_mainan').append('<option value="'+mainanObj.id+'">'+mainanObj.nama_mainan+'</option>');

        });

      });

    });

    $('#id_category').on('change',function(e){
      console.log(e);

      var cat_id = e.target.value;

      // ajax
      $.get('ajax-ban?cat_id=' + cat_id, function(data){
        // success data
        $('#id_ban').empty();
        $.each(data, function(index, banObj){

          $('#id_ban').append('<option value="'+banObj.id+'">'+banObj.nama_ban+'</option>');

        });

      });

    });
  </script>
  </script>

  <!-- TAG -->
  <script>
    
@endsection