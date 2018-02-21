@extends('layouts.cmsnew')

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
                    	<form method="POST" action="/family/public/cms/product/subproduct/detail/input" enctype="multipart/form-data">
						{{ csrf_field() }}
	                        <table class="table">
								<tr>
									<td>Category Product</td>
									<td> <!-- select class form control untuk membuat combo box -->
									    <select name="id_category" style="width: 100%">
									    	<option>-- Pilih Kategori --</option>
									        @foreach($category_product as $product)
									        <option value="{{$product->id}}">{{$nos++}}.  {{$product->category_product_name}}</option>
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
									        <option value="{{$subproduct->id}}">{{$no++}}.  {{$subproduct->category_product_name}} - {{$subproduct->category_subproduct_name}}</option>
									        @endforeach
									    </select>
									</td>
								</tr>

								<tr>
									<td>Name Product</td>
									<td><input type="text" name="name_product" placeholder="Nama Product"  style="width: 100%"></td>
								</tr>

								<tr>
									<td>Price</td>
									<td><input type="text" name="price" placeholder="Harga Produk"  style="width: 100%"></td>
								</tr>

								<tr>
									<td>Frame</td>
									<td><input type="text" name="frame" placeholder="Frame"  style="width: 100%"></td>
								</tr>

								<tr>
									<td>Fork</td>
									<td><input type="text" name="fork"  style="width: 100%" placeholder="Fork"></td>
								</tr>

								<tr>
									<td>Brakes Rear</td>
									<td><input type="text" name="brakes_rear"  style="width: 100%" placeholder="Brakes Rear"></td>
								</tr>

								<tr>
									<td>Brakes Levers</td>
									<td><input type="text" name="brakes_levers"  style="width: 100%" placeholder="Brakes Levers"></td>
								</tr>

								<tr>
									<td>Pedals</td>
									<td><input type="text" name="pedals"  style="width: 100%" placeholder="Pedals"></td>
								</tr>

								<tr>
									<td>Crankset</td>
									<td><input type="text" name="crankset"  style="width: 100%" placeholder="Crankset"></td>
								</tr>

								<tr>
									<td>Bottom Bracket</td>
									<td><input type="text" name="bottom_bracket"  style="width: 100%" placeholder="Bottom Bracket"></td>
								</tr>

								<tr>
									<td>Chain</td>
									<td><input type="text" name="chain"  style="width: 100%" placeholder="Chain"></td>
								</tr>

								<tr>
									<td>Cassete</td>
									<td><input type="text" name="cassete"  style="width: 100%" placeholder="Cassete"></td>
								</tr>

								<tr>
									<td>Rim</td>
									<td><input type="text" name="rim"  style="width: 100%" placeholder="Rim"></td>
								</tr>

								<tr>
									<td>Saddle</td>
									<td><input type="text" name="saddle"  style="width: 100%" placeholder="Saddle"></td>
								</tr>

								<tr>
									<td>Seatpot</td>
									<td><input type="text" name="seatpot"  style="width: 100%" placeholder="Seatpot"></td>
								</tr>

								<tr>
									<td>Stem</td>
									<td><input type="text" name="stem"  style="width: 100%" placeholder="Stem"></td>
								</tr>

								<tr>
									<td>Handlebar</td>
									<td><input type="text" name="handlebar"  style="width: 100%" placeholder="Handlebar"></td>
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
									<td><input name="submit" value="submit" type="submit"></td>
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