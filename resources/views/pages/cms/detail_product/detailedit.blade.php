@extends('layouts.cmsnew')

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
                    	<form method="POST" action="/family/public/cms/product/subproduct/detail/{{ $product_detail->id }}/edit" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">
								<tr>
									<td>Category Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select name="id_category" style="width: 100%">
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
									    <select name="id_category_sub" style="width: 100%">
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
									<td><input type="text" name="name_product" placeholder="Nama Product" value="{{ $product_detail->name_product }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Price</td>
									<td><input type="text" name="price" placeholder="Harga Produk" value="{{ $product_detail->price }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Frame</td>
									<td><input type="text" name="frame" placeholder="Frame" value="{{ $product_detail->frame }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Fork</td>
									<td><input type="text" name="fork" placeholder="Fork" value="{{ $product_detail->fork }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Brakes Rear</td>
									<td><input type="text" name="brakes_rear" placeholder="Brakes Rear" value="{{ $product_detail->brakes_rear }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Brakes Levers</td>
									<td><input type="text" name="brakes_levers" placeholder="Brakes Levers" value="{{ $product_detail->brakes_levers }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Pedals</td>
									<td><input type="text" name="pedals" placeholder="Pedals" value="{{ $product_detail->pedals }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Crankset</td>
									<td><input type="text" name="crankset" placeholder="Crankset" value="{{ $product_detail->crankset }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Bottom Bracket</td>
									<td><input type="text" name="bottom_bracket" placeholder="Bottom Bracket" value="{{ $product_detail->bottom_bracket }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Chain</td>
									<td><input type="text" name="chain" placeholder="Chain" value="{{ $product_detail->chain }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Cassete</td>
									<td><input type="text" name="cassete" placeholder="Cassete" value="{{ $product_detail->cassete }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Rim</td>
									<td><input type="text" name="rim" placeholder="Rim" value="{{ $product_detail->rim }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Saddle</td>
									<td><input type="text" name="saddle" placeholder="Saddle" value="{{ $product_detail->saddle }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Seatpot</td>
									<td><input type="text" name="seatpot" placeholder="Seatpot" value="{{ $product_detail->seatpot }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Stem</td>
									<td><input type="text" name="stem" placeholder="Stem" value="{{ $product_detail->stem }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Handlebar</td>
									<td><input type="text" name="handlebar" placeholder="Handlebar" value="{{ $product_detail->handlebar }}" style="width: 100%"></td>
								</tr>

								<tr>
									<td>Image1</td>
									<td><input type="text" name="image1" placeholder="Image1" value="{{ $product_detail->image1 }}" style="width: 100%" readonly>
									<input type="file" name="image1" placeholder="Image1" value="{{ $product_detail->image1 }}" style="width: 100%">
									<img src="/family/public/asset/img/{{ $product_detail->image1 }}" style="max-height:200px;max-width:200px;margin-top:10px;">
									
                                    <input class="btn btn-danger" type="submit" name="delete1" value="Delete" onclick="return confirm('Are you sure want to delete image1?');"> <p style="color: red">{{ session('status1')}}</p> 

                                	</td>
								</tr>

								<tr>
									<td>Image2</td>
									<td><input type="text" name="image2" placeholder="Image2" value="{{ $product_detail->image2 }}" style="width: 100%" readonly>
									<input type="file" name="image2" placeholder="Image2" value="{{ $product_detail->image2 }}" style="width: 100%">
									<img src="/family/public/asset/img/{{ $product_detail->image2 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete2" value="Delete" onclick="return confirm('Are you sure want to delete image2?');"> <p style="color: red">{{ session('status2')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image3</td>
									<td><input type="text" name="image3" placeholder="Image3" value="{{ $product_detail->image3 }}" style="width: 100%" readonly>
									<input type="file" name="image3" placeholder="Image3" value="{{ $product_detail->image3 }}" style="width: 100%">
									<img src="/family/public/asset/img/{{ $product_detail->image3 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete3" value="Delete" onclick="return confirm('Are you sure want to delete image3?');"> <p style="color: red">{{ session('status3')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image4</td>
									<td><input type="text" name="image4" placeholder="Image4" value="{{ $product_detail->image4 }}" style="width: 100%" readonly>
									<input type="file" name="image4" placeholder="Image4" value="{{ $product_detail->image4 }}" style="width: 100%">
									<img src="/family/public/asset/img/{{ $product_detail->image4 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input class="btn btn-danger" type="submit" name="delete4" value="Delete" onclick="return confirm('Are you sure want to delete image4?');"> <p style="color: red">{{ session('status4')}}</p> 

									</td>
								</tr>

								<tr>
									<td>Image5</td>
									<td><input type="text" name="image5" placeholder="Image5" value="{{ $product_detail->image5 }}" style="width: 100%" readonly>
									<input type="file" name="image5" placeholder="Image5" value="{{ $product_detail->image5 }}" style="width: 100%">
									<img src="/family/public/asset/img/{{ $product_detail->image5 }}" style="max-height:200px;max-width:200px;margin-top:10px;">

									  <input  class="btn btn-danger" type="submit" name="delete5" value="Delete" onclick="return confirm('Are you sure want to delete image5?');"> <p style="color: red">{{ session('status5')}}</p> 

									</td>
								</tr>

								<tr>
									<td></td>
									<td><input class="btn btn-info" name="submit" value="submit" type="submit"></td>
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